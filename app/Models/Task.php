<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'status', 'task_date', 'is_archived'];

    protected $casts = [
        'is_archived' => 'boolean',
        'task_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
