<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $list['todos']=array('Primary','Normal','Slow');
        return view('category.index',$list);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        //menambahkan validation
        $request->validate(
            [
                'title'=>'required'
            ]
            );

        //return hanya boleh satu yang dari post
        return $request->all();
        
        //return $request->title;

        
    }
}
