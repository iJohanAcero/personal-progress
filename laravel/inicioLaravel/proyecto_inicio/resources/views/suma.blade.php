@extends('layouts.app')

@section('content')

    <h1> Sumar dos numeros </h1>
    <form action="/suma" method="POST">
        @csrf
        <label for="num1">Numero 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        <label for="num2">Numero 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <button type="submit">Sumar</button>
    </form>
    <br>
    @if(isset($res))
        <h2>Resultado: {{ $res }}</h2>
    @endif

@endsection