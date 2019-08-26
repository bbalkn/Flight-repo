<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{

    protected $fillable = [

        'number', 'from', 'destination'
    ];

    public function tasks() {

        return $this->hasMany(Task::class);

    }

    public function addTm($task) {

        $this->tasks()->create($task);

        /*return Task::create([

            'flight_id' => $this->id,
            'transmission' => $transmission

        ]);*/

    }
}
