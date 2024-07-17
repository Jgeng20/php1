@extends('layouts.app')
@section('title', 'Home')
@section('content')

<!-- Jumbotron component -->
<div class="jumbotron">
    <h1 class="display-4">{{ $data['title'] }}</h1>
    <p class="lead">{{ $data['description'] }}</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content
    out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="#"
    role="button">{{ $data['button_text'] }}</a>
</div>

<!-- Display dummy data items -->
<div class="container mt-4">
    <h2>Items List</h2>
    <ul class="list-group">
    @foreach($data['items'] as $item)
    <li class="list-group-item">{{ $item }}</li>
    @endforeach
    </ul>
</div>
@endsection