<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
        ['name'=>'山田','mail'=>'taro@gmail.com'],
        ['name'=>'本田','mail'=>'honda@gmail.com'],
        ['name'=>'鈴木','mail'=>'suzuki@gmail.com']
    ];
        return view('hello.index', ['data' => $data]);
    }

    // public function post(Request $request)
    // {
    //     return view('hello.index',['msg'=>$request->msg]);
    // }
       
}

