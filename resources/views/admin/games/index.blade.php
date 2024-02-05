@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        @foreach ($games as $game)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ $game->title }}</div>
                <div class="card-body">{{ $game->description }}</div>
                <div class="card-body">{{ $game->thumb }}</div>
                <div class="categorie">
                    <div class="card-body">{{ $game->category->name }}</div>
                    <div class="card-body">{{ $game->category->description }}</div>
                </div>
                <div class="card-body">
                    @if (count($game->tags) > 0)
                        <ul>
                            @foreach ($game->tags as $tag)
                                <li>{{ $tag->name }}</li>
                            @endforeach
                        </ul>
                    @else
                        <span>Non ci sono tag collegati</span>
                    @endif
                </div>
                <a type="button" class="btn btn-primary" href="{{ route('admin.game.show', $game->id) }}">Show</a>
                <a type="button" class="btn btn-success" href="{{ route('admin.game.edit', $game->id) }}">Edit</a>
                <form action="{{ route('admin.game.destroy', $game->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<style>
    a{
        color:black;
        text-decoration: none
    }

    .categorie{
        background-color: rgba(0, 0, 0, 0.772);
        color: white;
    }
</style>