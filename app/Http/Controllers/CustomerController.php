<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return CustomerResource::collection(Customer::with('fullname')->paginate(25));
        $customers = Customer::all();
        if ($request->api){
            return response()->json($customers, 200);
        } else {
            return view ('customers.index', compact('customers'));
        }
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
            'fullname'=>'required',
            'phone'=>'required',
            'email'=>'required'
        ]);

        $customer = new Customer();
        $customer->fullname = $request->get('fullname');
        $customer->address = $request->get('address');
        $customer->city = $request->get('city');
        $customer->phone =  $request->get('phone');
        $customer->fax =  $request->get('fax');
        $customer->email = $request->get('email');
        $customer->save();

        if ($request->api){
            return response()->json($customer, 200);
        } else {
            return redirect('/customers')->with('success', 'Customer Created!');
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
        $customer = Customer::find($id);
        if ($request->api){
            return response()->json($customer, 200);
        } else {
            return view('customers', compact('customer'));
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
            'fullname'=>'required',
            'phone'=>'required',
            'email'=>'required'
        ]);

        $customer = Customer::findOrFail($id);

        $customer->fullname = $request->get('fullname');
        $customer->address = $request->get('address');
        $customer->city = $request->get('city');
        $customer->phone =  $request->get('phone');
        $customer->fax =  $request->get('fax');
        $customer->email = $request->get('email');

        $customer->update($request->all());

        if ($request->api){
            return response()->json($customer, 200);
        } else {
            return redirect('/customers')->with('success', 'Customer Updated!');
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
        $customer = Customer::findOrFail($id);
        $customer->delete();

        if ($request->api){
            return response()->json(null, 204);
        } else {
            return redirect('/customers')->with('success', 'Customer deleted!');
        }
    }
}
