<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
        'nama_buku',
        'kode_buku',
        'jenis_buku',
        'keterangan'
    ];
}
