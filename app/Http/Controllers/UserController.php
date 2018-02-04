<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        echo route('profile');die;
        return view('test');
    }
    public function add()
    {
        //$users = DB::table('hd')->get();
       /* $delete_row = DB::table('hd')->where('id', 10)->delete();
        dd($delete_row);*/
    }
}