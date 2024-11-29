@extends('admin.layout')

@section('title', 'Список ипотек')

@section('content')
    <h1>Список ипотек</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <ul>
        @foreach($mortgages as $mortgage)
            <li>
                <a href="{{route('mortgages.show', $mortgage->id) }}">{{ $mortgage->title }}</a> |
                <a href="{{ route('mortgages.edit', $mortgage->id) }}">Редактировать</a>
                <form action="{{ route('mortgages.destroy', $mortgage->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
