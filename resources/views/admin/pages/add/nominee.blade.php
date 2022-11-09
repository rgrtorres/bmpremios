@extends('admin.template.main')
@section('content')
    <form action="{{ route('admin.add.nominess.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table class="table">
            <thead>
                <tr>
                    <th>Candidato</th>
                    <th>Categoria</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><input type="text" name="nominee" class="form-control" placeholder="Candidato"></td>
                    <td>
                        <select name="category" class="form-select">
                            @foreach ($data['categories'] as $category)
                                <option value="{{ $category['id'] }}">{{ $category['name_poll_category'] }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="form-select" name="status_poll_nominee">
                            <option value="active">Active
                            </option>
                            <option value="inactive">
                                Inactive</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>

        <hr>

        <div>
            <h5>Foto do candidato</h5>
            <input type="file" name="image" id="image" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Inserir</button>
    </form>
@endsection
