<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    public function index()
    {
        return Genre::all();
    }

    public function show(Genre $genre)
    {
        return $genre;
    }

    public function store(Request $request)
    {
        $genre = Genre::create($request->all());

        return response()->json($genre, 201);
    }

    public function update(Request $request, Genre $genre)
    {
        $genre->update($request->all());

        return response()->json($genre, 200);
    }

    public function delete(Genre $genre)
    {
        $genre->delete();

        return response()->json(null, 204);
    }
}
