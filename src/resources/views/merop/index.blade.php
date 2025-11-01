@extends('layouts.app')

@section('title', 'Мероприятия')

@section('content')
    <div id="app">
        <example-component :events='@json($events)'></example-component>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/app.js')
@endpush