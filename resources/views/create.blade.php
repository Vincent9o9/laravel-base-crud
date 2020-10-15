@extends('layouts.app')
@section('content')
    <form action="{{route('clients.store')}}" method="post">
    @csrf
    @method('POST')
    <label for="name">Nome</label>
    <input type="text" name="name" placeholder="Nome" id="name" Value="{{ old('name') }}">
    <label for="content">Cognome</label>
    <input type="text" name="lastname" placeholder="Cognome" id="lastname" Value="{{ old('lastname') }}">
    <label for="content">Eta</label>
    <input type="text" name="eta" placeholder="Età" id="lastname" id="eta" Value="{{ old('eta') }}">
    <input type="submit" value="Invia">
    </form>
@endsection
