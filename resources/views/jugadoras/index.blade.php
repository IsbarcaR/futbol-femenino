@extends('layouts.app')
@section('title', "Guía de jugadoras")
@section('content')

<h1 class="text-3xl font-bold text-blue-800 mb-6">Guía de Jugadoras</h1>

<table class="w-full border-collapse border border-gray-300">
    <thead class="bg-gray-200">
        <tr>
            <th class="border border-gray-300 p-2">Nombre</th>
            <th class="border border-gray-300 p-2">Equipo</th>
            <th class="border border-gray-300 p-2">Posicion</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($jugadoras as $key => $jugadora)
            <tr class="hover:bg-gray-100">
                <td class="border border-gray-300 p-2">
                    <a href="{{ route('jugadoras.show', $key) }}" class="text-blue-700 hover:underline">
                      {{ $jugadora['nombre'] }}
                    </a>
                </td>
                <td class="border border-gray-300 p-2">{{ $jugadora['equipo'] }}</td>
                <td class="border border-gray-300 p-2">{{ $jugadora['posicion'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection