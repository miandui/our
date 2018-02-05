<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function index()
    {
        $user_name = session('name');
        return view('home.index',['user_name'=>$user_name]);
    }
    public function guide()
    {
        return view('home.guide');
    }
    public function mine()
    {
        return view('home.mine');
    }
    public function refer()
    {
        return view('home.refer');
    }
    public function help()
    {
        return view('home.help');
    }
    public function edit()
    {
        return view('home.edit');
    }
    public function mu(){
        return view('home.mu');
    }
}
