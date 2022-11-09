@extends('admin.template.main')
@section('content')
    <form action="{{ route('admin.category.update') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $data['id'] }}">
        <table>
            <thead>
                <tr>
                    <th>Categoria</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><input type="text" name="category" class="form-control" value="{{ $data['category'] }}" /></td>
                    <td>
                        <select class="form-select" name="status_poll_category">
                            <option value="active" {{ $data['status_poll_category'] == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $data['status_poll_category'] == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary mt-2">Salvar</button>
    </form>
@endsection
