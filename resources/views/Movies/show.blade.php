@extends('layout.main')

@section('title', 'Movies')

@section('content')
<div class="container mt-5">
    <div class="row">
        <h1>{{ $movies ->title}}</h1>
        <h1>{{ $movies ->vote}}</h1>
    </div>
</div>
@endsection