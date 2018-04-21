

@extends('layout')

@section('title','List Todo')

@section('content')
<h2>List Category</h2>
<div class="box">
    <div class="box-header with-border">
    <h3 class="box-title">Nama User</h3>
    </div>
<ul>
<?php
foreach($todos as $todo)
{
    echo "<li>".$todo."</li>";
}
?>
</ul>

    <div class="box-footer clearfix">
    <a href="/todo/create" class="btn btn-danger btn-sm">Create New Todo</a>
    </div>
</div>



@endsection()