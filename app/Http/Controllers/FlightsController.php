<?php

namespace App\Http\Controllers;

use App\Flight;
use Illuminate\Http\Request;

// git taskları
// git reposunu oluştur
// ondan sonra githubta yeni repo
// projenin şu anki halini master branche pushla
// pushlamak için remote repo yu gitte githubtaki repo olarak belirlemen lazım.
class FlightsController extends Controller
{
    public function index(Request $request)
    {
        $flights = Flight::all();
        return $flights;
        return view('flights.index', compact('flights'));
    }

    public function create()
    {

        return view('flights.create');
    }

    public function show()
    {


    }

    public function edit($id)
    {
        $flights = Flight::find($id);
        return view('flights.edit', compact('flights'));

    }

    public function update($id)
    {

        $flights = Flight::find($id);
        $flights->id = request('id');
        $flights->number = request('number');
        $flights->from = request('from');
        $flights->destination = request('destination');

        $flights->save();

        return redirect('/flights');
        //dd(request()->all());

    }

    public function destroy()
    {


    }

    public function store()
    {
        // Bunun Laravel'de hazır create diye bir fonksiyonu var
        // laravel docs'tan ona da bak bir
        $flight = new Flight();

        $flight->id = request('id');
        $flight->number = request('number');
        $flight->from = request('from');
        $flight->destination = request('destination');


        $flight->save();

        return redirect('/flights');

        //return request()->all();
    }
}
