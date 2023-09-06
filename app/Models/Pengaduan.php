<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = "pengaduan";
    protected $primaryKey = "id";
    protected $fillable =[
        'id', 
        'nama', 
        'kontak',
        'bagian',
        'isi',
        'tanggal'
    ];
}
