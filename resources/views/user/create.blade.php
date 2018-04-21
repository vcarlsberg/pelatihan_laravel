@extends('layout')
@section('title','Isian user')
@section('content')
    <h2>Form Create User</h2>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    {{ Form::open(['url'=>'user'])}}
    <br>
    {{Form::text('name',null,['placeholder'=>'Nama User'])}}
    {{Form::text('email',null,['placeholder'=>'Email'])}}
    {{Form::text('password',null,['placeholder'=>'Password'])}}
    <br>
    {{Form::submit('Save User')}}
    {{link_to('/user','Back')}}
    
    {{ Form::close()}}
@endsection()