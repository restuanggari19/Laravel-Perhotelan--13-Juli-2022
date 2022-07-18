<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Tamu;
use App\Models\Kamar;
use App\Models\Fasilitas;

class BookingController extends Controller
{
    public function index()
    {
        return view('tampilan.booking');
    }

    public function datatableBooking()
    {
        $data = [];
        $booking = Booking::get();

        foreach($booking as $item) {
            $tamu = Tamu::find($item->tamu_id);
            $kamar = Kamar::find($item->kamar_id);
            $fasilitas = Fasilitas::find($item->fasilitas_id);

            $data[] = [
                $item->id,
                $tamu->nama_tamu,
                $kamar->nama_kamar,
                $fasilitas->nama_fasilitas,
                $item->tanggal_booking,
                '<a href="/edit/'.$item->id.'" class="btn btn-primary">Edit</a> <a href="/delete/'.$item->id.'" class="btn btn-danger">Delete</a>'
            ];
        }

        return [
            'data' => $data,
        ];
    }
}
