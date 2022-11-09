@extends('admin.template.main')
@section('content')
    <a href="{{ route('admin.categories.add') }}"><button class="btn btn-primary">Inserir</button></a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th>Status</th>
                <th>Ação</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data['categories'] as $category)
                <tr>
                    <td>{{ $category['id'] }}</td>
                    <td>{{ $category['name_poll_category'] }}</td>
                    <td>{{ $category['status_poll_category'] }}</td>
                    <td><a href="{{ route('admin.category.edit', $category['id']) }}/">Editar</a> / <a
                            href="{{ route('admin.category.delete', $category['id']) }}">Apagar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
