<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function Index(){
        return view('toko');
    }
    public function Store(Request $request){
        $data['user'] = User::all();
        $validate = $request->validate([
            'nama_toko' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alamat' => 'required|string|max:500',
            'kontak_toko' => 'required|string|max:15',
            'users_id' => 'required|unique:stores|exists:users,id',
        ]);

        // Cegah user membuat toko lebih dari 1 (karena users_id unique)
        if (Store::where('users_id', $request->users_id)->exists()) {
            return back()->withErrors(['User ini sudah memiliki toko.']);
        }


        // Upload & simpan gambar ke folder storage/gambar-toko
        $image = $request->file('gambar');
        $filename = time(). "-" . $request->judul . "." . $image->getClientOriginalExtension();
        $image->storeAs('public/gambar-toko', $filename);
        $validate['gambar'] = $filename;
        
        // Simpan Toko ke databse
        Store::create($validate);
        return redirect()->route('toko.admin')->with('pesan', 'Toko berhasil dibuat.');
    }
    public function Delete(String $id){
        //
    }
}
