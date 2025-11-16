<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard(){
        return view('Administrator.dashboard');
    }
    public function Beranda(){
        return view('beranda');
    }
    public function User(){
        $data['users'] = User::all();
        return view('Administrator.user', $data);
    }
    public function Toko(){
        $data['user'] = User::all();
        $data['stores'] = Store::all();
        return view('Administrator.Toko.toko', $data);
    }
}
