<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers= Customer::get();
        return response()->json($customers, 200);
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;
        
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->adress=$request->adress;
        
        $customer->save();
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $customer = Customer::find($id);
       return response()->json($customer, 200);
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
        $customer = Customer::find($id);
        
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->adress=$request->adress;
        
        $customer->save();
        
        return response()->json("customer updated!!", 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customers= Customer::find($id);
        $customers->delete();
        return response()->json(["message"=>"customer deleted"], 200);
    }
}
