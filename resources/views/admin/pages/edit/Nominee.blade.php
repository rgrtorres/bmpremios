@extends('admin.template.main')
@section('content')
    <form action="{{ route('admin.nominess.update') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $data['id'] }}">
        <table>
            <thead>
                <tr>
                    <th>Candidato</th>
                    <th>Categoria</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><input type="text" name="name_poll_nominee" class="form-control" value="{{ $data['name_poll_nominee'] }}" /></td>
                    <td>
                        <select name="id_category" class="form-control">
                            @foreach ($data['categories'] as $category)
                                <option value="{{$category['id']}}" {{ $category['id'] == $data['id_category'] ? 'selected' : '' }}>{{$category['name_poll_category']}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="form-select" name="status_poll_nominee">
                            <option value="active" {{ $data['status_poll_nominee'] == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $data['status_poll_nominee'] == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary mt-2">Salvar</button>
    </form>
@endsection
