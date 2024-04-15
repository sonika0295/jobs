<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
