<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class TaskSeekerController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.task_seeker.index');
    }

    public function applyForm(Request $request)
    {
        $categories = Category::whereStatus('1')->get();
        return view('pages.task_seeker.add', compact('categories'));
    }
}
