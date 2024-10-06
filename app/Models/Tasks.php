<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'comment',
        'is_done',
        'task_date'
    ];

    protected function casts()
    {
        return [
            'is_done' => 'boolean',
            'task_date' => 'date'
        ];
    }


    /**
     * Get tasks list
     *
     * fetch data from database and transform into list
     *
     * @return \Illuminate\Database\Eloquent\Collection<int, Tasks>
     */
    public function fetchTasks(): Collection
    {
        return $this->all();
    }

    /**
     * Create Tasks
     *
     * Inputted data will be saved in the database
     *
     * @return \App\Models\Tasks
     */
    public function createTask($data): Tasks
    {
        $data['task_date'] = now();
        $result = $this->create($data);

        return $result;
    }
}
