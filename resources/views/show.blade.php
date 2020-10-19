@extends('layouts.app')
@section('content')
    <ul>
        <li>{{ $client->nome }}</li>
        <li>{{ $client->cognome }}</li>
        <li>{{ $client->eta }}</li>
    </ul>
@endsection
