<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Supscription;
use Illuminate\Http\Request;

class SupscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Subscriptions = Supscription::all();

        return view('admin', compact('Subscriptions'));
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
            "start_date" => "required",
            "end_date" => "required",
            "status" => "required",
           
            

        ]);

        Supscription::create([
            "user_id" => $request->user_id,
            "start_date" => $request->start_date,
            "end_date" => $request->end_date,
            "status" => $request->status,

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
    public function update(Request $request, Supscription $subscription)
    {
        //
        request()->validate([
            "user_id" => "required",
            "start_date" => "required",
            "end_date" => "required",
            "status" => "required",
        ]);

        Supscription::update([
            "user_id" => $request->user_id,
            "start_date" => $request->start_date,
            "end_date" => $request->end_date,
            "status" => $request->status,
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
