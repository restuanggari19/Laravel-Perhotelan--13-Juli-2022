<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_fasilitas',
        'harga',
    ];

    public function scopeStoreFasilitas($query, $request)
    {
        $status = $query->create([
            'nama_fasilitas' => $request->nama_fasilitas,
            'harga' => $request->harga,
        ]);

        if(!$status) return false;

        return true;
    }
}
