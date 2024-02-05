<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Tag;
use App\Models\Category;
use App\Http\Requests\StoreGameRequest;

use App\Http\Requests\UpdateGameRequest;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        $tags = Tag::all();
        return view("admin.games.index", compact("games", "tags"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view("admin.games.create", compact("categories", "tags"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request)
    {
        $validati = $request->validated();

        $newGame = new Game();
        $newGame->fill($validati);
        $newGame->save();

        if ($request->tags) {
            $newGame->tags()->attach($request->tags);
        }

        // return redirect()->route("admin.games.show", $newGame->id);
        return redirect()->route("admin.game.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view("admin.games.show", compact("game"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view("admin.games.edit", compact("game", "categories", "tags"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        $validati = $request->validated();



        $game->fill($validati);
        if ($request->tags) {
            $game->tags()->attach($request->tags);
        }
        $game->update();

        return redirect()->route("admin.game.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route("admin.game.index");
    }
}
