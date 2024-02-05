@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <h2>Modifica</h2>
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="row">
        <form action="{{ route('admin.game.update', $game->id) }}" method="POST">
            @method('PUT')
            @csrf
            {{-- name description --}}
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" value="{{ old('description') ?? $game->description}}">
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"
                    value="{{ old('thumb') ?? $game->thumb }}">
                @error('thumb')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">seleziona una categoria</label>
                <select name="category_id" id="category_id" class="form-select">
                    <option selected value="{{ $game->category->id }}">{{ $game->category->name }}</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tags" class="form-label">seleziona i tag associati</label>
                <select multiple name="tags[]" id="tags" class="form-select">
                    {{-- @php 
                    $game_tag_ids = array_map(function($game_tag){
                        return $game_tag["id"];

                    },
                    $game->tags->toArray());
                    
                    @endphp --}}
                    @foreach ($tags as $tag)
                    
                        {{-- @if (in_array($tag->id, $game_tag_ids)) --}}
                        @if ($game->tags->contains($tag))
                            <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @else
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endif
                        
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Inserisci</button>
        </form>
    </div>
</div>
@endsection