<?php

namespace App\Http\Controllers;

use App\Task;
use App\Flight;

class ProjectTasksController extends Controller
{

    public function store (Flight $flight) {

            $flight->addTm(
                request()->validate(['transmission'=>'required'])
            );

            //$flight->addTm($attributes);


        //$flight->addTm(request('transmission'));

        /*Task::create([

            'flight_id' => $flight->id,
            'transmission' => request('transmission')

        ]);*/

        return back();
    }

    public function update(Task $task) {

        $method = request()->has('completed') ? 'complete' : 'incomplete';

        $task->$method();

        //$task->complete(request()->has('completed'));
        //dd(request()->all());
        /*$task->update([
            'completed' => request()->has('completed')
        ]);*/
        return back();
    }
}
