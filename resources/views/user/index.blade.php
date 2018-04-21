

@extends('layout')

@section('title','List Users')

@section('content')
<h2>List Users</h2>

<div class="box">
    <div class="box-header with-border">
    <h3 class="box-title">Nama User</h3>
    </div>

    <div class="box-body">
        <table border="1">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Pass</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['password']}}</td>
    </tr>
    @endforeach
    </table>
    </div>

    <div class="box-footer clearfix">
    <a href="/user/create" class="btn btn-danger btn-sm">Create New User</a>
    </div>
</div>




@endsection()