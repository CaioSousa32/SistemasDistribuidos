@extends('layouts.app')

@section('content')
    <h2>Ver Item</h2>
    <div class="item-details">
        <p><strong>ID:</strong> {{ $item->id }}</p>
        <p><strong>Nome:</strong> {{ $item->name }}</p>
    </div>
    <a href="{{ route('items.index') }}" class="button">Voltar a Lista</a>
    <a href="{{ route('items.edit', $item->id) }}" class="button">Editar Item</a>
    <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="button">Apagar Item</button>
    </form>
@endsection
