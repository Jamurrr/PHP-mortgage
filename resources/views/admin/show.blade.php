@extends('admin.layout')

@section('title')
 Ипотека - {{ $mortgage?->title }}
@endsection

@section('content')
    <h1>{{ $mortgage?->title }}</h1>

    <p>Процентная ставка: {{ $mortgage?->percent }}%</p>
    <p>Минимальный взнос: {{ $mortgage?->min_first_payment }}%</p>
    <p>Стоимость: от {{ $mortgage?->min_price }} до {{ $mortgage?->max_price }} руб.</p>
    <p>Срок: от {{ $mortgage?->min_term }} до {{ $mortgage?->max_term }} лет</p>
    <p>Описание: {{ $mortgage?->description }}</p>

    <a href="{{ route('mortgages.edit', $mortgage->id) }}">Редактировать</a>
@endsection
