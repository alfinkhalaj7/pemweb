<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mapel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    // 👉 Ini bagian RELASI
    public function gurus()
    {
        return $this->belongsToMany(Guru::class);
    }
}
