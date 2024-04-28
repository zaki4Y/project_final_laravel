<?php

namespace App\Http\Controllers;

use App\Models\Workacce;
use Illuminate\Http\Request;

class WorkaccController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $workacces = Workacce::all();

        return view('admin', compact('Workacces'));
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
        //
        request()->validate([
            "user_id" => "required",
            "workspace_id" => "required",
            "access_start_time" => "required",
            "access_end_time" => "required",
            "password" => "required",
            

        ]);

        Workacce::create([
            "user_id" => $request->user_id,
            "workspace_id" => $request->workspace_id,
            "access_start_time" => $request->access_start_time,
            "access_end_time" => $request->access_end_time,
            "password" => $request->password,
            

        ]);

        return back();

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
    public function update(Request $request, Workacce $workacce)
    {
        //
        request()->validate([
            "user_id" => "required",
            "workspace_id" => "required",
            "access_start_time" => "required",
            "access_end_time" => "required",
            "password" => "required",
            

        ]);

        $workacce->update([
            "user_id" => $request->user_id,
            "workspace_id" => $request->workspace_id,
            "access_start_time" => $request->access_start_time,
            "access_end_time" => $request->access_end_time,
            "password" => $request->password,
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
