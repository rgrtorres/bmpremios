@extends('template.main')
@section('content')
    <h1 class="title text-center">{{ $title }}</h1>
    <div class="container">
        {!! nl2br($content) !!}
    </div>
@endsection
