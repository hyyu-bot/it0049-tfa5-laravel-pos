<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where('is_archived', false)
            ->orderBy('task_date', 'asc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('tasks.index', compact('tasks'));
    }
}
