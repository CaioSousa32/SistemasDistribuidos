@extends('layouts.app')

@section('content')
    <h2>Lista de Itens</h2>
    <a href="{{ route('items.create') }}" class="button add-item-button">Criar Novo Item</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Botões</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route('items.show', $item->id) }}" class="button">Ver</a>
                        <a href="{{ route('items.edit', $item->id) }}" class="button">Editar</a>
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
