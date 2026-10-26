@extends('layouts.app')

@section('content')
    <h1>Today's Tasks</h1>

    <p class="subtitle">Welcome back! Here are your tasks for today.</p>

    @if($tasks->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Task</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->task_date->format('Y-m-d') }}</td>
                    <td>
                        <span class="badge badge-{{ $task->status }}">
                            {{ ucfirst($task->status) }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="empty">
            <p>No tasks for today!</p>
            <p><a href="/tasks" class="btn btn-edit">View all tasks</a></p>
        </div>
    @endif
@endsection
