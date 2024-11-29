@extends('public.layout')

@section('title')
 Ипотека - {{ $mortgage?->title }}
@endsection

@section('content')
    <h1>{{ $mortgage->title }}</h1>

    <p>Процентная ставка: {{ $mortgage->percent }}%</p>
    <p>Мин. стоимость недвижимости: {{ $mortgage->min_price }} ₽</p>
    <p>Макс. стоимость недвижимости: {{ $mortgage->max_price }} ₽</p>
    <p>Мин. первоначальный взнос: {{ $mortgage->min_first_payment }}%</p>
    <p>Мин. срок: {{ $mortgage->min_term }} месяцев</p>
    <p>Макс. срок: {{ $mortgage->max_term }} месяцев</p>
    <p>Описание: {{ $mortgage->description }}</p>
@endsection
