

@extends('layout')

@section('title','List Todo')

@section('content')
<h2>List Category</h2>

<ul>
<?php
foreach($todos as $todo)
{
    echo "<li>".$todo."</li>";
}
?>
</ul>

<a href="/todo/create">Create New Todo</a>
@endsection()