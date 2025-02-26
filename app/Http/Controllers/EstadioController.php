<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Estadio;
use Illuminate\Http\Request;

class EstadioController extends Controller
{
 
    public function index(){
      $estadios= Estadio::all();
        
        return view('estadios.index', compact('estadios'));
    }
    public function show($id){
      $estadio=Estadio::find($id);
        return view('estadios.show', compact('estadio'));
    }
    public function create(){
      $equipos= Equipo::all();
      return view('estadios.create',compact('equipos'));
    }
    public function store(Request $request){
      $validated=$request->validate([
        'nombre'=> 'required|unique:estadios',
        'ciudad'=> 'required',
        'capacidad'=>'required|min:0',
        'equipo_principal'=>'required'
      ]);
      Estadio::create($validated);
      return redirect()->route('estadios.index');
    }
    public function edit() {
      return view('estadios.edit');
    }
    public function destroy($id) {
      $estadio=Estadio::find($id);
      $estadio->delete();
      return redirect()->route('estadios.index');
    }
}