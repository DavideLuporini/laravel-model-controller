@extends('layout.main')

@section('title', 'Movies')

@section('content')
<div class="container mt-5">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-2 ">
            <div class="border border-danger p-3 rounded">

                <a href="{{route('movies.show' , ['id' => $movie -> id ]) }}" >
                    <p>id: {{ $movie -> id }}</p>
                    <p>title: {{ $movie -> title }}</p>
                    <p>date: {{ $movie -> date }}</p>
                    <p>vote: {{ $movie -> vote }}</p>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection