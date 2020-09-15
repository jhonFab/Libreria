<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CitaController extends Controller
{      
    public function index()
    {
        $cit = DB::table('citas')->get();
        return view('citas.index', compact('cit'));
    }
    public function create()
    {
        return view('citas.create');
    }

    public function store(Request $request)
    {
        DB::table('citas')->insert(
            [
                "id"=>$request->input('id'),
                "titulo"=>$request->input('titulo'),
                "autor"=>$request->input('autor'),
                "editorial"=>$request->input('editorial'),
                "calificacion"=>$request->input('calificacion'),
                "resena"=>$request->input('resena')
            ]
            );
            return redirect()->route('citas.index');
    }
    public function show($id)
    {
        $cit = DB::table('citas')->where('id',$id)->first();
        return view('citas.show', compact('cit'));
    }
    public function edit($id)
    {
        $cit = DB::table('citas')->where('id',$id)->first();
        return view('citas.edit', compact('cit'));
    }
    public function update(Request $request, $id)
    {
        DB::table('citas')->where('id',$id)->update(
            [
                "id"=>$request->input('id'),
                "titulo"=>$request->input('titulo'),
                "autor"=>$request->input('autor'),
                "editorial"=>$request->input('editorial'),
                "calificacion"=>$request->input('calificacion'),
                "resena"=>$request->input('resena')
            ]
            );
            return redirect()->route('citas.index');
    }
    public function destroy($id)
    {
        $cit = DB::table('citas')->where('id',$id)->delete();
        return redirect()->route('citas.index');
    }
}