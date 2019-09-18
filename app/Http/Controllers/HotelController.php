<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    private $photos_path;
    public function __construct()
    {
        $this->photos_path = public_path('/public/images/uploads');
    }

    public function index(Request $request)
    {
        $hotels = Hotel::all();
        if ($request->api){
            return response()->json($hotels, 200);
        } else {
            return view ('hotels.index', compact('hotels'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = new Hotel;
        return view('hotels.create', compact('hotels'));
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
            'name' => 'required',
            'phonenumber' => 'required',
            'email' => 'required|email|min:3|max:150',
        ]);

        $hotel = new Hotel;
        $hotel->name = $request->get('name');
        $hotel->address =  $request->get('address');
        $hotel->city = $request->get('city');
        $hotel->state = $request->get('state');
        $hotel->country = $request->get('country');
        $hotel->zipcode = $request->get('zipcode');
        $hotel->phonenumber =  $request->get('phonenumber');
        $hotel->email =  $request->get('email');
        $hotel->save();

        if ($request->api){
            return response()->json($hotel, 201);
        } else {
            return redirect('/hotels')->with('success', 'Hotel created!');
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
        $hotel = Hotel::find($id);
        if ($request->api){
            return response()->json($hotel, 200);
        } else {
            return view ('hotels', compact('hotel'));
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
        $hotel = Hotel::findOrFail($id);
        $hotel->update($request->all());

        if ($request->api){
            return response()->json($hotel, 200);
        } else {
            return redirect('/hotels')->with('success', 'Hotel Updated!');
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
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();

        if ($request->api){
            return response()->json(null, 204);
        } else {
            return redirect('/hotels')->with('success', 'Hotel Deleted!');
        }
    }
}
