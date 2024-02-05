@extends('layouts.app')

@section('content')
<div class="container bg-white text-black rounded p-5">
    <div class="row">
        <h2>{{ $game->title }}</h2>
    </div>
    <div class="row">
        <p>{{ $game->description }}</p>
    </div>
</div>
@endsection