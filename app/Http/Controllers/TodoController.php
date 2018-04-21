<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index()
    {
        $list['todos']=array('A1_controller','B1_controller','C1_controller','D1_controller');
        return view('todo.index',$list);
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        //menambahkan validation
        $request->validate(
            [
                'title'=>'required|min:10',
                'description'=>'required|max:25'
            ]
            );

        //return hanya boleh satu yang dari post
        return $request->all();
        
        //return $request->title;

        
    }
}
