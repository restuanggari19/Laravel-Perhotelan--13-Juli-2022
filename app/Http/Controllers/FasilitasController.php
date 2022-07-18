<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
        return view('tampilan.fasilitas');
    }

    public function create()
    {
        return view('tampilan.form-fasilitas');
    }

    public function storeFasilitas(Request $request)
    {
        $status = Fasilitas::storeFasilitas($request);
        if ($status) return redirect('/fasilitas');
        else return redirect('/form-fasilitas');
    }

    public function datatableFasilitas()
    {
        $data = [];
        $fasilitas = Fasilitas::get();
        foreach ($fasilitas as $item) {
            $data[] = [
                $item->id,
                $item->nama_fasilitas,
                $item->harga,
                '<a href="/edit-fasilitas/'.$item->id.'" class="btn btn-primary">Edit</a>, <a href="/delete/'.$item->id.'" class="btn btn-danger">Delete</a>'

            ];

            }

        return [
            'data' => $data,
        ];
    }
}
