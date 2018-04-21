@extends('layout')
@section('title','Isian todo')
@section('content')
    <h2>Form Todo</h2>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    {{ Form::open(['url'=>'todo'])}}
    <br>
    {{Form::select('category',[1=>'Primary',2=>'Normal',3=>'Slow'],null)}}
    <br>
    {{Form::text('title',null,['placeholder'=>'Todo Title'])}}
    <br>
    {{Form::textarea('description',null)}}
    <br>
    {{Form::submit('Save Todo')}}
    {{link_to('/todo','Back')}}
    
    {{ Form::close()}}
@endsection()