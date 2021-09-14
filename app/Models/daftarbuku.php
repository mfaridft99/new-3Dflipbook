<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftarbuku extends Model
{
    protected $table = "daftarbukus";

    protected $fillable = ['judul', 'keterangan', 'file', 'gambar'];
    // use HasFactory;
}
