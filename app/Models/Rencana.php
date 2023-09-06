<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rencana extends Model
{
    use HasFactory;

    protected $table = "rencana";
    protected $primaryKey = "id";
    protected $fillable =[
        'id', 
        'nama_rencana', 
        'kategori_rencana',
        'tanggal_rencana',
        'isi_rencana',
        'status'
    ];
}
