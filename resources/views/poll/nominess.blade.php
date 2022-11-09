@extends('template.main')
@section('content')
    <h1 class="title text-center">{{ $data['nameCategory'] }}</h1>
    <h3 class="title text-center">Vote em quem merece ganhar.</h3>

    @if ($data['totalNominess'] < 1)
        <div class="alert alert-danger m-5">Nenhum candidato nessa categoria!</div>
    @else
        <form action="/poll/vote/" method="POST">
            @csrf

            <input type="hidden" name="id_poll_category" value="{{ $data['category'] }}">

            <div class="grid-nominee mt-5">
                @foreach ($data['nominess'] as $nominee)
                    <label class="card-nominee">
                        <input name="id_poll_nominee" class="radio" type="radio" value="{{ $nominee->id }}">


                        <span class="nominee-details">
                            <div class="container d-flex justify-content-center">
                                <div>
                                    <div class="nominee-picture">
                                        <div
                                            style="background-image: url('/img/uploads/{{$nominee->picture_poll_nominee}}'); height: 200px; width: 150px; background-size: cover; border-radius: 10px;">
                                        </div>
                                    </div>

                                    <div class="nominee-name">
                                        {{ $nominee->name_poll_nominee }}
                                    </div>
                                </div>
                            </div>
                        </span>
                    </label>
                @endforeach
            </div>

            <div class="d-flex justify-content-center m-3">
                <button type="submit" class="btn btn-success">Vote agora!</button>
            </div>
        </form>
    @endif
@endsection
