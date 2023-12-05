<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view_form_user(){
        $data['nama']= 'Arnold';
        $data['nim']= '18110135';
        $data['prodi']= 'IFSI';
        return view('layouts.app' , $data);  
    }
}
