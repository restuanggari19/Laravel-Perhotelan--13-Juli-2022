<?php

namespace App\Models;

use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamuHotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_tamu',
        'jenis_kelamin',
        'nama_kamar',
        'no_kamar',
        'fasilitas',
        'no_handphone',
        'email'
    ];

    public function scopeStoreTamu($query, $request)
    {
        $status = $query->create([
            'nama_tamu' => $request->nama_tamu,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_kamar' => $request->nama_kamar,
            'no_kamar' => $request->no_kamar,
            'fasilitas' => $request->fasilitas,
            'no_handphone' => $request->no_handphone,
            'email' => $request->email,
        ]);

        if(!$status) return false;

        return true;
    }

    public function scopeUpdateTamu($query, $request)
    {
        $status = $query->where('id', $request->id)->update([
            'nama_tamu' => $request->nama_tamu,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_kamar' => $request->nama_kamar,
            'no_kamar' => $request->no_kamar,
            'fasilitas' => $request->fasilitas,
            'no_handphone' => $request->no_handphone,
            'email' => $request->email,
        ]);

        if(!$status) return false;

        return true;
    }

}
