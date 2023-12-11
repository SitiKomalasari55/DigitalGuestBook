<?php

namespace App\Http\Controllers;
use App\Models\BukuTamuUndangan;
use Illuminate\Http\Request;

class UserCtrl extends Controller
{
    public function index(){
        $data['title']= 'Dashboard User';
        $products = [
            ['name' => 'Product 1', 'price' => 100],
            ['name' => 'Product 2', 'price' => 150],
            ['name' => 'Product 3', 'price' => 200],
        ];
        return view('halamanuser', array(
            'data' => $data,
            'products' => $products
        ));
    }

    public function indexuser(){
        $BukuTamu = BukuTamuUndangan::all();
        $data['title']= 'Dashboard User';
        $data['posts'] = $BukuTamu;
        return view('Users.Read',$data);
    }

}
