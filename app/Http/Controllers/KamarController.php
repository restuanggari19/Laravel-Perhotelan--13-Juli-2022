<?php

namespace App\Http\Controllers;
use App\Models\Kamar;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function dataPesanSidebar()
    {
        return view('tampilan.kamar');
        
    }

    public function create()
    {
        return view('tampilan.form-kamar');
    }

    public function storekamar(Request $request)
    {
        $status = Kamar::storeKamar($request);
        if ($status) return redirect('/kamar');
        else return redirect('/form-kamar');
    }

    public function datatableKamar()
    {
        $data = [];
        $kamar = Kamar::get();
        foreach ($kamar as $item) {
            $data[] = [
                $item->id,
                $item->nama_kamar,
                '<a href="/edit-kamar/'.$item->id.'" class="btn btn-primary">Edit</a>, <a href="/delete/'.$item->id.'" class="btn btn-danger">Delete</a>'
                
            ];
            
            }

        return [
            'data' => $data,
        ];
    }
}
