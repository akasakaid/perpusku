<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DashboardController extends Controller
{
    public function index(){
        $peminjam = DB::table('peminjams')->get();
        return view("dashboard",["peminjam" => $peminjam]);
    }
}
