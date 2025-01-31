<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function create()
    {
        return view('film.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'summary' => 'required|string',
            'release_year' => 'required',
            'poster' => 'required',
        ]);

        DB::table('films')->insert([
            'title' => $request->input('title'),
            'summary' => $request->input('summary'),
            'release_year' => $request->input('release_year'),
            'poster' => $request->input('poster'),
            'genre_id' => $request->input('genre_id'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect('film');
    }

    public function index()
    {
        $film = DB::table('films')->get();

        return view('film.index', ['film' => $film]);
    }

    public function show($id)
    {
        $film = DB::table('films')->find($id);

        return view('film.detail', ['film' => $film]);
    }

    public function edit($id)
    {
        $film = DB::table('films')->find($id);

        return view('film.edit', ['film' => $film]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:3',
            'summary' => 'required|string',
            'release_year' => 'required',
            'poster' => 'required',
        ]);

        DB::table('films')
            ->where('id', $id)
            ->update(
                [
                    'title' => $request->input('title'),
                    'summary' => $request->input('summary'),
                    'release_year' => $request->input('release_year'),
                    'poster' => $request->input('poster'),
                    'genre_id' => $request->input('genre_id'),
                ]
            );

        return redirect('film');
    }

    public function destroy($id)
    {
        DB::table('films')->where('id', $id)->delete();

        return redirect('/film');
    }
}
