<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plane;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        return view('home.index');
    }
    public function store(Request $request)
    {
        Plane::create([
            'user_id' => auth()->user()->id,
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'kelas' => $request->kelas,
        ]);

        return redirect()->route('order.index',);
    }
}
