<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nip',
        'email',
        'alamat',
        'no_telepon',
    ];

    protected $with = ['mapels']; // otomatis eager load mapels 

    // 👉 Ini bagian RELASI
    public function mapels()
    {
        return $this->belongsToMany(Mapel::class);
    }
}
