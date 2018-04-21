<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        
        $list['users']=array(
            array('name'=>'ttt','email'=>'a@a.com','password'=>'1234567890'),
            array('name'=>'uuu','email'=>'b@b.com','password'=>'1234567890')
        );
        return view('user.index',$list);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        //menambahkan validation
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required'
            ]
            );

        //return hanya boleh satu yang dari post
        return $request->all();
        
        //return $request->title;



        
    }
}
