<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserContoller extends Controller
{

    public function edit()
    {
        return view('home.setting')->with('user', auth()->user());
    }
    public function update(Request $request, User $user)
    {
       $validateData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        User::where('id',auth()->user()->id)->update($validateData);
        return redirect()->route('user.update',['user' => $user])->with('pesan',"Data Pengguna {$validateData['name']} Berhasil Diubah");
    }
}
