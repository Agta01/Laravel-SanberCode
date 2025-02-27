<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function create(){
        return view('genre.tambah');
    }

    public function store(Request $request) {
         $request->validate([
            'name' => 'required|min:3',
        ]);

        DB::table('genres')->insert([
            'name' => $request->input('name'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect('genre');
    }

    public function index() {
        $genre = DB::table('genres')->get();
 
        return view('genre.index', ['genre' => $genre]);
    }

    public function show($id) {
        $genre = DB::table('genres')->find($id);

        return view('genre.detail', ['genre' => $genre]);
    }

    public function edit($id) {
        $genre = DB::table('genres')->find($id);

        return view('genre.edit', ['genre' => $genre]);
    }

    public function update(Request $request ,$id) {
            $request->validate([
            'name' => 'required|min:3',
        ]);

        DB::table('genres')
              ->where('id', $id)
              ->update(
                [
                    'name' => $request->input('name'),
                ]
            );

            return redirect('genre');
    }

    public function destroy($id) {
        DB::table('genres')->where('id', $id)->delete();

        return redirect('/genre');
    }
}
