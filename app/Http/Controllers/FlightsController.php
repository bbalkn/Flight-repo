<?php

namespace App\Http\Controllers;

use App\Flight;
//use Illuminate\Http\Request;

// git taskları
// git reposunu oluştur
// ondan sonra githubta yeni repo
// projenin şu anki halini master branche pushla
// pushlamak için remote repo yu gitte githubtaki repo olarak belirlemen lazım.
class FlightsController extends Controller
{
    public function index()
    {
        $flights = Flight::all();
        return view('flights.index', compact('flights'));
    }

    public function create()
    {

        return view('flights.create');
    }

    public function show(Flight $flight)
    {

        //$flight = Flight::findOrFail($id);

        return view('flights.show', compact('flight'));
    }

    public function edit(Flight $flight)
    {
        //$flights = Flight::findOrFail($id);
        return view('flights.edit', compact('flight'));

    }

    public function update(Flight $flight)
    {

        $flight->update(request(['number', 'from', 'destination']));

        /*$flights = Flight::findOrFail($id);
        $flights->id = request('id');
        $flights->number = request('number');
        $flights->from = request('from');
        $flights->destination = request('destination');

        $flights->save();*/

        return redirect('/flights');
        //dd(request()->all());

    }

    public function destroy(Flight $flight)
    {

        //Flight::findOrFail($id)->delete();
        $flight->delete();
        return redirect('/flights');
    }

    /**
     * @return array|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {

        /*return[
            'id' => request('id'),
            'number' => request('number'),
            'from' => request('from'),
            'destination' => request('destination')

        ];*/

        // Bunun Laravel'de hazır create diye bir fonksiyonu var
        // laravel docs'tan ona da bak bir

        /*$flight = new Flight();

        $flight->id = request('id');
        $flight->number = request('number');
        $flight->from = request('from');
        $flight->destination = request('destination');

        $flight->save();*/

        /*Flight::create([
            'id' => request('id'),
            'number' => request('number'),
            'from' => request('from'),
            'destination' => request('destination')

        ]);*/

        Flight::create(request()->validate([

           'number' => ['required'],
            'from' => ['required', 'min:3'],
            'destination' => ['required', 'min:3']

        ]));

        //Flight::create(request(['number', 'from', 'destination']));




        return redirect('/flights');

        //return request()->all();
    }
}
