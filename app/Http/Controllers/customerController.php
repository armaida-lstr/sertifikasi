<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all(); // Menggunakan huruf kapital pada nama model
        return view('customers.tampilcust')->with('customers', $customers);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customers.tambahcust');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Customer::create($input);
        return redirect('customer')->with('flash_message', 'Customer Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customers.showcust')->with('customers', $customer);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id); // Change the variable name to $customer
        return view('customers.editcust', [
            'customer' => $customer, // Change 'customers' to 'customer'
        ]);
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
        //
        $customers = Customer::find($id);

        $customers->nama = $request->nama;
        $customers->alamat = $request->alamat;
        $customers->no_telp = $request->no_telp;
        $customers->id_card = $request->id_card;
        // $input = $request->all();
        // $anggota->update($input);

        $customers->save();
        return redirect('customer')->with('flash_message', 'customer Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
    
        if (!$customer) {
            return redirect('customer')->with('error', 'Customer not found!');
        }
    
        $customer->delete();
    
        return redirect('customer')->with('flash_message', 'Customer deleted!');
    }
    
}
