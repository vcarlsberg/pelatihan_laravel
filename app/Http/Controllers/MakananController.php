<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakananController extends Controller
{
    //
    public function index()
    {
        $list['makanan']=array('martabak','lemper','cireng');
        return view('makanan',$list);
    }
}
