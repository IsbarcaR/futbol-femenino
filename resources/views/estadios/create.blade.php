@extends('layouts.app')
@section('title', "Guía de equipos")
@section('content')
<form action="{{ route('estadios.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
    @csrf
    <div class="mb-4">
        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="titulos" class="block text-sm font-medium text-gray-700 mb-1">Ciudad:</label>
        <input type="text" name="ciudad" id="ciudad" required
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="estadio_id" class="block text-sm font-medium text-gray-700 mb-1">Capacidad:</label>
        <input type="number" name="capacidad" id="capacidad" required>
         
    </div>
    <div class="mb-4">
        <label for="estadio_id" class="block text-sm font-medium text-gray-700 mb-1">Equipo Principal:</label>
        <select type="text" name="equipo_principal" id="equipo_principalequipo_principal" required>
            @foreach ($equipos as $equipo)
                <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
            @endforeach
        </select>
    </div>


    <button type="submit"
        class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-lg shadow hover:bg-blue-600 focus:ring focus:ring-blue-300">
        Crear estadio
    </button>
</form>
@endsection 