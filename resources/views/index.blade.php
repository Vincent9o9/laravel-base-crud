@extends('layouts.app')
@section('content')
    @foreach ($data as $client)
        <ul>
            <li>{{ $client->nome }}</li>
            <li>{{ $client->cognome }}</li>
            <li>{{ $client->eta }}</li>
        </ul>
    @endforeach
@endsection
