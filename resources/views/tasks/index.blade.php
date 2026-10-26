@extends('layouts.app')

@section('content')
    <h1>All Tasks</h1>

    <div class="header" style="margin-bottom: 20px;">
        <p>Complete list of tasks ordered by date.</p>
    </div>

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
            <p>No tasks found.</p>
        </div>
    @endif
@endsection
