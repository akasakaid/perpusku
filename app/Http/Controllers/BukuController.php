<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = DB::table('bukus')->get();
        return view('daftarbuku',['buku' => $buku]);
    }

    public function jenis()
    {
        $jenis = DB::table('jenis_bukus')->get();
        return view('addbuku',['jenis'=>$jenis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // insert buku baru ke dalam database
        DB::table('bukus')->insert([
            'kode_buku' => $request->kode_buku,
            'nama_buku' => $request->nama_buku,
            'jenis_buku'=> $request->jenis_buku,
            'keterangan' => $request->keterangan
        ]);
        return redirect('/daftar-buku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBukuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBukuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($buku)
    {
        $buku = DB::table('bukus')->where('id',$buku)->get();
//        dd($buku[0]);
        $jenis = DB::table('jenis_bukus')->get();
        return view('editbuku',['buku' => $buku[0],
                                'jenis'=> $jenis]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBukuRequest  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $updato = DB::table('bukus')->where('id',$request->id)->update([
            'kode_buku' => $request->kode_buku,
            'nama_buku' => $request->nama_buku,
            'jenis_buku'=> $request->jenis_buku,
            'keterangan' => $request->keterangan
        ]);
        return redirect('/daftar-buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $deleto = DB::table('bukus')->where('id',$request->id)->delete();
        return redirect('/daftar-buku');
    }
}
