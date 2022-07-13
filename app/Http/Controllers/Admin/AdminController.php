<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TamuHotel;

class AdminController extends Controller
{
   public function index()
    {
        $users = TamuHotel::where('id', '!=', 0)->count();
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
        $status = TamuHotel::storeTamu($request);
       if ($status)return redirect('/tampilan');
       else return redirect('/from-input');
    }

    public function datatableTamu()
    {
        $data = [];
        $tamu = TamuHotel::get();
        foreach ($tamu as $item) {
            $data[] = [
                $item->id,
                $item->nama_tamu,
                $item->jenis_kelamin,
                $item->no_handphone,
                $item->email,
                '<a href="/edit/'.$item->id.'" class="btn btn-primary">Edit</a>, <a href="/delete/'.$item->id.'" class="btn btn-danger">Delete</a>'
                
            ];
        
            }

        return [
            'data' => $data,
        ];
    }

    public function destroy($id)
    {
        $delete = TamuHotel::where('id', $id)->delete();
        
        if ($delete) return redirect('/tampilan');
        else return 'gagal delete data';
    }
    
    public function edit($id)
    {
        $data['tamu_hotel'] = TamuHotel::find($id);

        return view('tampilan.edit', $data);
    }

    public function update(Request $request)
    {
        $status = TamuHotel::updateTamu($request,);
        if ($status) return redirect('/tampilan');
        else return redirect('/edit');
    }

    public function tampilanData()
    {
        return view('tampilan.user');
        
    }

    public function tampilanDataPesan()
    {
        $data = [];
        $tamu = TamuHotel::get();
        foreach ($tamu as $item) {
            $data[] = [
                $item->id,
                $item->nama_tamu,
                $item->nama_kamar,
                $item->no_kamar,
                $item->fasilitas,
                '<a href="/edit/'.$item->id.'" class="btn btn-primary">Edit</a>, <a href="/delete/'.$item->id.'" class="btn btn-danger">Delete</a>'
                
            ];
        
            }

        return [
            'data' => $data,
        ];
    }

    public function dataPesanSidebar()
    {
        return view('tampilan.dataPesan');
        
    }


}