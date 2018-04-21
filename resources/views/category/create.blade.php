@extends('layout')
@section('title','Isian category')
@section('content')
    <h2>Form Category</h2>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    {{ Form::open(['url'=>'category'])}}
    <br>
    {{Form::text('title',null,['placeholder'=>'Category Title'])}}
    <br>
    {{Form::submit('Save Category')}}
    {{link_to('/category','Back')}}
    
    {{ Form::close()}}
@endsection()