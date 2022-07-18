<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    public function index()
    {
        return view('tampilan.tamu');
    }

    public function create()
    {
        return view('tampilan.form-tamu');
    }

    public function storeTamu(Request $request)
    {
        $status = Tamu::storeTamu($request);
        if ($status) return redirect('/tamu');
        else return redirect('/form-tamu');
    }

    public function datatabletamu()
    {
        $data = [];
        $tamu = Tamu::get();
        foreach ($tamu as $item) {
            $data[] = [
                $item->id,
                $item->nama_tamu,
                $item->jenis_kelamin,
                $item->no_telepon,
                $item->alamat,
                '<a href="/edit-tamu/'.$item->id.'" class="btn btn-primary">Edit</a>, <a href="/delete/'.$item->id.'" class="btn btn-danger">Delete</a>'
                
            ];
            
            }

        return [
            'data' => $data,
        ];
    }

    public function editTamu(Request $request, $id)
    {
        $data['tamu'] = Tamu::find($id);

        return view('tampilan.edit-tamu', $data);
    }

    public function updateTamus(Request $request)
    {
        $status = Tamu::updateTamu($request);
        if ($status) return redirect('/edit-tamu');
        else return redirect('/edit-tamu');
    }
}
