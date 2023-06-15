<?php

namespace App\Http\Controllers;

use App\Http\Requests\HealthUnitRequest;
use App\Models\HealthUnit;
use Illuminate\Http\Request;

class HealtUnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $health_units = HealthUnit::paginate(10);
        return view('unidades.index', compact('health_units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('unidades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HealthUnitRequest $request)
    {
        HealthUnit::create($request->all());

        return redirect()->route('health_units.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(HealthUnit $healthUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HealthUnit $healthUnit)
    {
//        dd($healthUnit);
//
//        $healthUnit = HealthUnit::find($healthUnit);
        return view('unidades.edit', compact('healthUnit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HealthUnitRequest $request, HealthUnit $healthUnit)
    {
        $healthUnit->fill($request->all());
        $healthUnit->save();
        return redirect()->to('health_units');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HealthUnit $healthUnit)
    {
        $healthUnit->delete();
        return redirect()->to('health_units');
    }
}
