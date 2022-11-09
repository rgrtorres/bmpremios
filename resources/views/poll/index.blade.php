@extends('template.main')
@section('content')
    <?php
    use Illuminate\Support\Str;
    ?>

    <h1 class="title text-center">Indicados {{ date('Y') }}</h1>
    <h3 class="title text-center">Clique nas categorias e vote no seu favorito!</h3>

    <div class="container">
        @if ($data['totalCategories'] < 1)
            <div class="alert alert-danger m-5">Nenhuma categoria registrada no momento!</div>
        @else
            <div class="row mt-5">
                @foreach ($data['categories'] as $category)
                    <div class="col text-center">
                        <a href="/poll/{{ $category->id }}/{{ Str::slug($category->name_poll_category, '-') }}">
                            <div class="card d-flex justify-content-center align-items-center">
                                <div class="title">{{ $category->name_poll_category }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
