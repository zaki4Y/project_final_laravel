<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('reservation');
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
        $data = [
            "name" => $request->title,
            "description" => $request->description,
            "dateStart" => $request->dateStart,
            "timeStart" => $request->timeStart,
            "dateEnd" => $request->dateEnd,
            "timeEnd" => $request->timeEnd
        ];

        Reservation::create($data);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
        $events = Reservation::all()->map(function (Reservation $event) {
            $start = $event->dateStart . " " . $event->timeStart;
            $end = $event->dateEnd . " " . $event->timeEnd;
            return [
                "start" => $start,
                "end" => $end,
                "title" => $event->name,
                "color" => "#137C8B",
                
                
                
            ];
        });

        return response()->json([
            "events" => $events
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
        request()->validate([
            "name" => "required",
            "description" => "required",
            "dateStart" => "required",
            "timeStart" => "required",
            "dateEnd" => "required",
            "timeEnd" => "required"
        ]);

        $reservation->update([
            "name" => $request->title,
            "description" => $request->description,
            "dateStart" => $request->dateStart,
            "timeStart" => $request->timeStart,
            "dateEnd" => $request->dateEnd,
            "timeEnd" => $request->timeEnd
        ]);

        return back();


        

    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
        $reservation->delete();

        return back();
    }
}
