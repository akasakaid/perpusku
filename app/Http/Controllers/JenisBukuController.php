<?php

namespace App\Http\Controllers;

use App\Models\JenisBuku;
use App\Http\Requests\StoreJenisBukuRequest;
use App\Http\Requests\UpdateJenisBukuRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JenisBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = DB::table('jenis_bukus')->get();
        return view('daftarjenis',['jenis' => $jenis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addjenis');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJenisBukuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $updato = DB::table('jenis_bukus')->insert([
            'nama_jenis' => $request->nama_jenis
        ]);

        return redirect('/daftar-jenis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisBuku  $jenisBuku
     * @return \Illuminate\Http\Response
     */
    public function show(JenisBuku $jenisBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisBuku  $jenisBuku
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisBuku $jenisBuku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJenisBukuRequest  $request
     * @param  \App\Models\JenisBuku  $jenisBuku
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJenisBukuRequest $request, JenisBuku $jenisBuku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisBuku  $jenisBuku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleto = DB::table('jenis_bukus')->where('id',$id)->delete();
        return redirect('/daftar-jenis');
    }
}
