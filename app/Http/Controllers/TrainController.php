<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {

        return view('home.train');
    }
    public function store(Request $request)
    {
        Train::create([
            'user_id' => auth()->user()->id,
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'kelas' => $request->kelas
        ]);

        return redirect()->route('order.index',);
    }
}
