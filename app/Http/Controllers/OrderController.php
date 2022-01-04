<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plane;
use App\Models\Train;

class OrderController extends Controller
{
    public function index()
    {
        $planes = Plane::where('user_id',auth()->user()->id)->get();
        $trains = Train::where('user_id',auth()->user()->id)->get();
        return view('home.order',['planes' => $planes],['trains' => $trains]);
    }
}
