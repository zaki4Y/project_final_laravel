<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bookings = Booking::all();

        return view('admin', compact('bookings'));
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
        
        
        
        // dd($request);
        request()->validate([
            "user_id" => "required",
            "workspace_id" => "required",
            "booking_type" => "required",
            "start_time" => "required",
            "end_time" => "required",
            "status" => "required",
            
        ]);
        
        Booking::create([
            "user_id" => $request->user_id,
            "workspace_id" => $request->workspace_id,
            "booking_type" => $request->booking_type,
            "start_time" => $request->start_time,
            "end_time" => $request->end_time,
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
    public function update(Request $request, Booking $booking)
    {
        request()->validate([
            "user_id" => "required",
            "workspace_id" => "required",
            "booking_type" => "required",
            "start_time" => "required",
            "end_time" => "required",
            "status" => "required"
        ]);

        $booking->update([
            "user_id" => $request->user_id,
            "workspace_id" => $request->workspace_id,
            "booking_type" => $request->booking_type,
            "start_time" => $request->start_time,
            "end_time" => $request->end_time,
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
