<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_tamu',
        'jenis_kelamin',
        'alamat',
        'no_telepon',
    ];

    public function scopeStoreTamu($query, $request)
    {
        $status = $query->create([
            'nama_tamu' => $request->nama_tamu,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
        ]);

        if(!$status) return false;

        return true;
    }

    //update tamu
    public function scopeUpdateTamu($query, $request)
    {
        $status = $query->where('id', $request->id)->update([
            'nama_tamu' => $request->nama_tamu,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
        ]);

        if(!$status) return false;

        return true;
    }

    //Form pesan
    public function scopeStorePesanan($query, $request)
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

}
