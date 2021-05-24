<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meteran extends Model
{
    protected $fillable = ['k3_awal', 'k3_akhir', 'tanggal', 'alamat', 'id_pengguna'];
    protected $primaryKey = 'id';
    protected $table = 'meterans';

    public function hanyaPunya()
    {
        return $this->belongsTo(Pengguna::class);
    }
    use HasFactory;
}
