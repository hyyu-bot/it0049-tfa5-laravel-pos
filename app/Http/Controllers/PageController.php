<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $today = Carbon::today();
        $tasks = Task::where('task_date', $today)
            ->where('is_archived', false)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('home', compact('tasks'));
    }

    public function about()
    {
        return view('about');
    }
}
