<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index(){

        $estudiantes = Estudiante::all();

        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create(){
        return view('estudiantes.form'); 
    }

    public function store(Request $request){
        // Lógica para almacenar un nuevo estudiante
        // $request->validate([
        //     'nombre' => 'required|string|max:255',
        //     'email' => 'required|email|unique:estudiantes,email',
        // ]);

        $usuario = new Estudiante();
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->cedula = $request->cedula;
        $usuario->save();

        return redirect()->route('estudiantes')->with('success', 'Estudiante creado exitosamente.');
    }
}
