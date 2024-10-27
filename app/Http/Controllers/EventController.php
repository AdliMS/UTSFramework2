<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('form.event');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'date' => 'required',
            'maxp' => 'required',
        ]);

        $data = [
            'event_name' => $request -> input('name'),
            'description' => $request -> input('desc'),
            'date' => $request -> input('date'),
            'max_participants' => $request -> input('maxp'),
        ];
        Event::create($data);

        // Pesan::create([
        //     'name' => $request -> name,
        //     'email' => $request -> email,
        //     'pesan' => $request -> pesan,
        // ]);

        return to_route('event_form')->with('success', 'Berhasil menambahkan event!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
