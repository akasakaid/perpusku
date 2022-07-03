<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use App\Http\Requests\StorePeminjamRequest;
use App\Http\Requests\UpdatePeminjamRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjam = DB::table('peminjams')->get();
        return view('daftarpeminjam',['peminjam' => $peminjam]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = DB::table('bukus')->get();
        return view('addpeminjam',['buku' => $buku]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePeminjamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku = DB::table('bukus')->get();
        foreach ($buku as $i) {
            if ($i->nama_buku == $request->judul_buku) {
                $kode_buku = $i->kode_buku;
            }
            break;
        }
        $updato = DB::table("peminjams")->insert([
            "nama" => $request->nama_peminjam,
            "kontak" => $request->kontak,
            "judul_buku" => $request->judul_buku,
            "kode_buku" => $kode_buku,
            "status" => $request->status
        ]);

        return redirect('/daftar-peminjam');
    }

    public function edit($peminjam)
    {
        $data = DB::table('peminjams')->where('id',$peminjam)->get();
        return view('editpeminjam',['peminjam' => $data[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeminjamRequest  $request
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $updato = DB::table('peminjams')->where('id',$request->id)->update([
            "nama" => $request->nama_peminjam,
            "kontak" => $request->kontak,
            "judul_buku" => $request->judul_buku,
            "denda" => $request->denda,
            "status" => $request->status
        ]);
        return redirect('/daftar-peminjam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function destroy($peminjam)
    {
        $deleto = DB::table('peminjams')->where('id',$peminjam)->delete();
        return redirect('/daftar-peminjam');
    }
}
