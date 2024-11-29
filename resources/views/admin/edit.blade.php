@extends('admin.layout')

@section('title', 'Редактировать ипотеку')

@section('content')
    <h1>Редактировать ипотеку: {{ $mortgage->title }}</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('mortgages.update', $mortgage->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Название:</label>
        <input type="text" name="title" value="{{ $mortgage->title }}" required>

        <label for="percent">Процент:</label>
        <input type="number" name="percent" max="40" value="{{ $mortgage->percent }}" required>

        <label for="min_first_payment">Мин. взнос:</label>
        <input type="number" name="min_first_payment" max="98" value="{{ $mortgage->min_first_payment }}" required>

        <label for="max_price">Макс. цена:</label>
        <input type="number" step="0.01" name="max_price" value="{{ $mortgage->max_price }}" required>

        <label for="min_price">Мин. цена:</label>
        <input type="number" step="0.01" name="min_price" value="{{ $mortgage->min_price }}" required>

        <label for="min_term">Мин. срок:</label>
        <input type="number" name="min_term" value="{{ $mortgage->min_term }}" required>

        <label for="max_term">Макс. срок:</label>
        <input type="number" name="max_term" value="{{ $mortgage->max_term }}" required>

        <label for="description">Описание:</label>
        <textarea name="description">{{ $mortgage->description }}</textarea>

        <label for="is_active">Активна:</label>
        <input type="checkbox" name="is_active" {{ $mortgage->is_active ? 'checked' : '' }}>

        <button type="submit">Обновить</button>
    </form>
@endsection
