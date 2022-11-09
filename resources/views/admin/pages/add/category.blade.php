@extends('admin.template.main')
@section('content')
    <form action="{{ route('admin.add.category.store') }}" method="POST">
        @csrf
        <table class="table">
            <thead>
                <tr>
                    <th>Categoria</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><input type="text" name="category" class="form-control" placeholder="Categoria"></td>
                    <td>
                        <select class="form-select" name="status_poll_category">
                            <option value="active">Active
                            </option>
                            <option value="inactive">
                                Inactive</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>

        <button type="submit" class="btn btn-primary">Inserir</button>
    </form>
@endsection
