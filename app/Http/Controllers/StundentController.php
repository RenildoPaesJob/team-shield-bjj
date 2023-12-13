<?php

namespace App\Http\Controllers;

use App\Http\Requests\StundentRequest;
use App\Models\Stundent;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StundentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stundents = Stundent::all();
		return Inertia::render('Stundent/StundentIndex', compact('stundents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StundentRequest $request)
    {
        $stundent = Stundent::create([
            'name'       => $request->name,
			'lastname'   => $request->lastname,
			'date_birth' => $request->date_birth,
			'belt'       => $request->belt,
			'graduation' => $request->graduation
        ]);

		return Inertia::render('Stundent/StundentIndex', [
			'stundent_name' => $stundent['name']
		]);
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
