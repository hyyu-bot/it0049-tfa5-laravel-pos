<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $tasks = [
            ['Review project requirements', 'completed', '2026-10-26'],
            ['Create database schema', 'completed', '2026-10-26'],
            ['Design user interface mockups', 'completed', '2026-10-27'],
            ['Implement authentication module', 'pending', '2026-10-27'],
            ['Write unit tests for controllers', 'pending', '2026-10-28'],
            ['Deploy application to staging server', 'pending', '2026-10-28'],
            ['Conduct user acceptance testing', 'pending', '2026-10-28'],
            ['Prepare final presentation', 'on_hold', '2026-10-27'],
        ];

        foreach ($tasks as $task) {
            Task::create([
                'title' => $task[0],
                'status' => $task[1],
                'task_date' => $task[2],
                'is_archived' => false,
            ]);
        }
    }
}
