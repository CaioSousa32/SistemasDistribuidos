@extends('layouts.app')

@section('content')
    <h2>Criar Novo Item</h2>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>

        <button type="submit" class="button">Criar</button>
    </form>
    <a href="{{ route('items.index') }}" class="button">Voltar a Lista</a>
@endsection
