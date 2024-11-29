@extends('admin.layout')

@section('title', 'Добавить ипотеку')

@section('content')
    <h1>Добавить новую ипотеку</h1>

    <form action="{{ route('mortgages.store') }}" method="POST">
        @csrf
        <label for="title">Название:</label>
        <input type="text" name="title" required>

        <label for="percent">Процент:</label>
        <input type="number" name="percent" max="40" required>

        <label for="min_first_payment">Мин. взнос:</label>
        <input type="number" name="min_first_payment" max="98" required>

        <label for="max_price">Макс. цена:</label>
        <input type="number" name="max_price" required>

        <label for="min_price">Мин. цена:</label>
        <input type="number" name="min_price" required>

        <label for="min_term">Мин. срок:</label>
        <input type="number" name="min_term" required>

        <label for="max_term">Макс. срок:</label>
        <input type="number" name="max_term" required>

        <label for="description">Описание:</label>
        <textarea name="description"></textarea>

        <label for="is_active">Активна:</label>
        <input type="checkbox" name="is_active">

        <button type="submit">Сохранить</button>
    </form>
@endsection
