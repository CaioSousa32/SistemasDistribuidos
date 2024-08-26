@extends('layouts.app') <!-- Estendendo o layout principal -->

@section('content')
    <h2>Editar Item</h2>
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="{{ $item->name }}" required>

        <button type="submit" class="button">Editar</button>
    </form>
    <a href="{{ route('items.index') }}" class="button">Voltar a Lista</a>
@endsection
