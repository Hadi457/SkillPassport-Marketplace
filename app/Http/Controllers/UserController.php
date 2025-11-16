<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function Store()
    {
        $validated = request()->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'kontak' => 'required|string|max:15',
            'role' => 'required|in:admin,member',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'kontak' => $validated['kontak'],
            'role' => $validated['role'],
            'password' => bcrypt($validated['password']),
        ]);

        return redirect()->route('user')->with('pesan', 'User baru berhasil ditambahkan.');
    }
    public function decrypId($id){
        try {
            return Crypt::decrypt($id);
        } catch (DecryptException $e) {
            abort(404);
        }
    }
    public function Delete(String $id){
        $id = $this->decrypId($id);
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('pesan', 'User berhasil dihapus.');
    }
}
