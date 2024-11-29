@extends('public.layout')

@section('title', 'Все ипотеки')

@section('content')
    <h1>Все активные ипотеки</h1>

    @foreach ($mortgages as $mortgage)
        <div>
            <h3>{{ $mortgage->title }}</h3>
            <a href="{{ route('show', $mortgage->id)}}">Подробнее</a>
        </div>
    @endforeach
@endsection
