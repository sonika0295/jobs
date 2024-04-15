<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Str;
use App\Models\Task;

class TaskProviderController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.task_provider.index');
    }

    public function addForm(Request $request)
    {
        return view('pages.task_provider.add');
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'budget' => 'required|numeric',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
                'description' => 'required|string',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput($request->except('password'));
            }

            $tbl = new Task();
            $slug = Str::slug($request->name);
            $count = Task::whereSlug($slug)->count();
            if ($count > 0) {
                $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
            }


            $tbl->slug = $slug;
            $tbl->user_id = Auth::id();
            $tbl->title = $request->title;
            $tbl->location = $request->location;
            $tbl->budget = $request->budget;
            $tbl->start_date = $request->start_date;
            $tbl->end_date = $request->end_date;
            $tbl->description = $request->description;

            $tbl->save();


            return back()->with(['success' => 'Task Added Successfully']);
        } catch (Exception $e) {
            return back()
                ->with(['error' => $e->getMessage()])
                ->withInput();
        }
    }
}
