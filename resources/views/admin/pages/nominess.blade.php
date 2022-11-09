@extends('admin.template.main')
@section('content')
    <a href="{{ route('admin.nominess.add') }}"><button class="btn btn-primary">Inserir</button></a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Candidato</th>
                <th>Categoria</th>
                <th>Status</th>
                <th>Ação</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data['nominess'] as $nominee)
                <tr>
                    <td>{{ $nominee['id'] }}</td>
                    <td>{{ $nominee['name_poll_nominee'] }}</td>
                    <td>{{ $nominee['category']->name_poll_category }}</td>
                    <td>{{ $nominee['status_poll_nominee'] }}</td>
                    <td><a href="{{ route('admin.nominess.edit', $nominee['id']) }}/">Editar</a>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
