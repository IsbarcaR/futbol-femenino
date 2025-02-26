@extends('layouts.app')
@section('title', " Guía de Equipos" )
@section('content')
<x-equipo
   :nombre="$equipo['nombre']"
   :estadio="$estadio"
   :titulos="$equipo['titulos']"
   :escudo="$equipo['escudo'] ?? ''" 
/>
{{-- -->esto de debajo hace lo mismo que lo de arriba  --}}

{{-- <div class="equipo border rounded-lg shadow-md p-4 bg-white">
   <h2 class="text-xl font-bold text-blue-800">{{ $equipo['nombre'] }}</h2>
   <p><strong>Estadio:</strong> {{ $equipo['estadio'] }}</p>
   <p><strong>Títulos:</strong> {{ $equipo['titulos'] }}</p>
</div> --}} 




<p class="mt-4 text-center">
   <a href="/equipos" class="text-blue-700 hover:underline">Volver</a>
</p>
@endsection 