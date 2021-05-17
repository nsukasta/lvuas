<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meteran extends Model
{
    use HasFactory;
    protected $fillable = ['m3_awal', 'm3_akhir', 'tanggal', 'alamat'];
}
