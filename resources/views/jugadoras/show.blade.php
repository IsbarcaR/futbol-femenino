@extends('layouts.app')
@section('title', " Guía de Equipos" )
@section('content')
<x-jugadora
   :nombre="$jugadora['nombre']"
   :equipo="$jugadora['equipo']"
   :posicion="$jugadora['posicion']"

/>
<p class="mt-4 text-center">
   <a href="/jugadoras" class="text-blue-700 hover:underline">Volver</a>
</p>
@endsection 
