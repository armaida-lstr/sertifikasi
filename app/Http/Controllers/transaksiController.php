<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\kendaraan;
use App\Models\transaksi;
use Illuminate\Http\Request;

class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transaksi = transaksi::all();
        return view ('transaksis.tampiltrans')->with('transaksis', $transaksi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    // Assuming $customers and $kendaraans are the variables you want to pass to the view

    $transaksi = transaksi::all();
    $customers = customer::all();
    $kendaraans = kendaraan::all();
    
    return view('transaksis.tambahtrans', compact('customers', 'kendaraans'));
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
        transaksi::create($input);
        return redirect('transaksi')->with('flash_message', 'transaksi Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    public function show($id)
    {
        $transaksi = transaksi::find($id);

        if (!$transaksi) {
            return redirect()->route('transaksis.index')->with('error', 'Transaksi not found.');
        }

    // Menambahkan relasi Eloquent untuk mengambil nama anggota dan judul buku
        $transaksi->load('customer', 'kendaraan');
            // Pemeriksaan untuk memastikan data dikirimkan
        // dd($transaksi);

        return view('transaksis.showtrans', compact('transaksi'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $transaksi = transaksi::find($id);
        $customers = customer::all();
        $kendaraans = kendaraan::all();
        // return view('transaksis.edittrans',[
        //     'transaksi' => $transaksi,
        // ]);
        return view('transaksis.edittrans', compact('transaksi', 'customers', 'kendaraans'));
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
        $transaksi = transaksi::find($id);

        $transaksi->id_customer = $request->id_customer;
        $transaksi->id_kendaraan = $request->id_kendaraan;

        $transaksi->save();

        return redirect('transaksi')->with('flash_message', 'transaksi Updated!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        transaksi::destroy($id);
        return redirect('transaksi')->with('flash_message', 'transaksi deleted!'); 
    }
}
