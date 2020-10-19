@extends('layouts.app')
@section('content')
    @foreach ($data as $client)
        <ul>
            <a href="{{ route('clients.show', $client->id) }}"><li>{{ $client->nome }}</li></a>
            <li>{{ $client->cognome }}</li>
            <li>{{ $client->eta }}</li>
            <li>
                <form action="{{ route('clients.destroy', $client->id )}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Cancella">
                </form>
            </li>
        </ul>
    @endforeach
@endsection
