@extends('layouts.app')
@section('title', " Guía de Equipos" )
@section('content')
<x-estadio
   :nombre="$estadio['nombre']"
   :ciudad="$estadio['ciudad']"
   :capacidad="$estadio['capacidad']"
   :equipoprincipal="$estadio['equipo_principal']"

/>
<p class="mt-4 text-center">
   <a href="/estadios" class="text-blue-700 hover:underline">Volver</a>
</p>
@endsection 
