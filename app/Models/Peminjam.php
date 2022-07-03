<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    protected $fillable = [
        'nama',
        'kontak',
        'judul_buku',
        'kode_buku',
        'denda',
        'status'
    ];
}
