<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    protected $game_list;

    public function __construct()
    {
        $this->game_list = require __DIR__ . '/../../../database/datasource.php';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('games.index', ['games' => $this->game_list]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $game = collect($this->game_list)->firstWhere('id', $id);

        if (!$game) {
            abort(404, 'Game not found');
        }

        // Return the *show* view with a single game
        return view('games.show', ['game' => $game]);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $results = array_filter($this->game_list, function ($game) use ($id) {
            return $game['id'] == $id;
        });
        return response()->json([
            'message' => 'Record Successfull Deleted.',
            'content' => $results
        ], 200);
    }
}
