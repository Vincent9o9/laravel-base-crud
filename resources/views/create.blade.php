@extends('layouts.app')
@section('content')
    {{-- <form action="{{route('clients.store')}}" method="post"> --}}
    <form action="{{(!empty($client)) ? route('clients.update', $client->id) : route('clients.store')}}" method="post">
    @csrf
    @if(!empty($client))
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $client->id }}">
    @else
        @method('POST')
    @endif
    <label for="title">Nome</label>
    <input type="text" name="name" placeholder="Nome" id="name" value="{{ (!empty($client)) ? $client->nome : old('name') }}">
    <label for="content">Cognome</label>
    <input type="text" name="lastname" placeholder="Cognome" id="lastname" value="{{ (!empty($client)) ? $client->cognome : old('lastname') }}">
    <label for="content">Età</label>
    <input type="text" name="eta" placeholder="Età" id="eta" value="{{ (!empty($client)) ? $client->eta : old('eta') }}">
    <input type="submit" value="Invia">
    </form>
@endsection
