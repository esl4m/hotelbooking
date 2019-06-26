<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use DateTime;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bookings = Booking::all();
        if ($request->api){
            return response()->json($bookings, 200);
        } else {
            return view ('bookings.index', compact('bookings'));
        }
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $booking = new Booking;
        return view('bookings.create', compact('booking'));
    }

    /**
     * Calculate # of days.
     *
     * @return int
     */
    public function daysCalculate($start_date, $end_date)
    {
        // Calculate # of days
        $first_date = new DateTime($start_date);
        $second_date = new DateTime($end_date);
        $days = $first_date->diff($second_date)->days;

        return $days;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'hotel_id'=>'required',
            'room_id'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'customer_id'=>'required'
        ]);

        // Calculate # of days
        $start_date = $request->get('start_date');
        $end_date = $request->get('end_date');

        $booking = new Booking;
        $booking->hotel_id = $request->get('hotel_id');
        $booking->room_id =  $request->get('room_id');
        $booking->start_date = $start_date;
        $booking->end_date = $end_date;
        $booking->days = daysCalculate($start_date, $end_date);
        $booking->customer_id = $request->get('customer_id');
        $booking->save();

        if ($request->isJson()){
            return response()->json($booking, 200);
        } else {
            return redirect('/bookings')->with('success', 'Booking created!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $booking = Booking::find($id);

        if ($request->api){
            return response()->json($booking, 200);
        } else {
            return view ('bookings', compact('booking'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'hotel_id'=>'required',
            'room_id'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'customer_id'=>'required'
        ]);

        $start_date = $request->get('start_date');
        $end_date = $request->get('end_date');

        $booking = Booking::findOrFail($id);
        $booking->hotel_id = $request->get('hotel_id');
        $booking->room_id =  $request->get('room_id');
        $booking->start_date = $start_date;
        $booking->end_date = $end_date;
        $booking->days = daysCalculate($start_date, $end_date);
        $booking->customer_id = $request->get('customer_id');

        $booking->update($request->all());

        if ($request->api){
            return response()->json($booking, 200);
        } else {
            return redirect('/bookings')->with('success', 'Booking Updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        if ($request->api){
            return response()->json(null, 204);
        } else {
            return redirect('/bookings')->with('success', 'Booking deleted!');
        }

    }
}
