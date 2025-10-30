@extends('layouts.app')

@section('title', 'Мероприятия')

@section('content')
    <p>Здесь список мероприятий...</p>
    <ul>
        @foreach($events as $event)
            <li>{{ $event['title'] }}</li>
            <li>{{ $event['date'] }}</li>
        @endforeach
    </ul>
@endsection