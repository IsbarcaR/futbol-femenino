@extends('layouts.app')
@section('title', "Guía de estadios")
@section('content')

<h1 class="text-3xl font-bold text-blue-800 mb-6">Guía de Estadios</h1>

<table class="w-full border-collapse border border-gray-300">
    <thead class="bg-gray-200">
        <tr>
            <th class="border border-gray-300 p-2">Nombre</th>
            <th class="border border-gray-300 p-2">Ciudad</th>
            <th class="border border-gray-300 p-2">Capacidad</th>
            <th class="border border-gray-300 p-2">Equipo Principal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estadios as $estadio)
            <tr class="hover:bg-gray-100">
                <td class="border border-gray-300 p-2">
                    <a href="{{ route('estadios.show', $estadio->id) }}" class="text-blue-700 hover:underline">
                      {{ $estadio['nombre'] }}
                    </a>
                </td>
                <td class="border border-gray-300 p-2">{{ $estadio['ciudad'] }}</td>
                <td class="border border-gray-300 p-2">{{ $estadio['capacidad'] }}</td>
                <td class="border border-gray-300 p-2">{{ $estadio['equipo_principal'] }}</td>
                <td class="border border-gray-300 p-2 text-center">
                    <a href="{{ route('estadios.edit', $estadio->id) }}" class="text-blue-700 hover:underline">📝</a>
                    <form action="{{ route('estadios.destroy', $estadio->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-700 hover:underline">❌</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<p>
    <a href="{{ route('estadios.create') }}" class="bg-blue-700 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full">Crear equipo</a>
</p>
@endsection