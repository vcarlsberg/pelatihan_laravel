

@extends('layout')

@section('title','List Category')

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

<a href="/category/create">Create New Category</a>
@endsection()