<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tamu;

class AdminController extends Controller
{
   public function index()
    {
        $users = Tamu::where('id', '!=', 0)->count();
        return view ('tampilan.dashboard', compact('users'));
    }
    
    public function tampilan()
    {
        return view('tampilan.user');
    }

    public function create()
    {
        return view('tampilan.form-input');
    }

    public function store(Request $request)
    {
        $status = Tamu::storeTamu($request);
       if ($status)return redirect('/tampilan');
       else return redirect('/from-input');
    }

    public function datatableTamu()
    {
        $data = [];
        $tamu = Tamu::get();
        foreach ($tamu as $item) {
            $data[] = [
                $item->id,
                $item->nama_tamu,
                $item->jenis_kelamin,
                $item->no_handphone,
                $item->email,
                '<a href="/edit-tamu/'.$item->id.'" class="btn btn-primary">Edit</a>, <a href="/delete/'.$item->id.'" class="btn btn-danger">Delete</a>'
                
            ];
        
            }

        return [
            'data' => $data,
        ];
    }

    public function destroy($id)
    {
        $delete = Tamu::where('id', $id)->delete();
        
        if ($delete) return redirect('/tampilan');
        else return 'gagal delete data';
    }
    
    public function edit($id)
    {
        $data['tamu_hotel'] = Tamu::find($id);

        return view('tampilan.edit', $data);
    }

    public function update(Request $request)
    {
        $status = Tamu::updateTamu($request,);
        if ($status) return redirect('/tampilan');
        else return redirect('/edit');
    }

    public function tampilanData()
    {
        return view('tampilan.tamu');
        
    }

    public function tampilanDataPesan()
    {
        $data = [];
        $tamu = Tamu::get();
        foreach ($tamu as $item) {
            $data[] = [
                $item->id,
                $item->nama_tamu,
                $item->nama_kamar,
                $item->no_kamar,
                $item->fasilitas,
                '<a href="/edit-pesanan/'.$item->id.'" class="btn btn-primary">Edit</a>, <a href="/delete/'.$item->id.'" class="btn btn-danger">Delete</a>'
                
            ];
        
            }

        return [
            'data' => $data,
        ];
    }

    public function dataPesanSidebar()
    {
        return view('tampilan.kamar');
        
    }


}