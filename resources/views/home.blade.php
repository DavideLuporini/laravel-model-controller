@extends('layout.main')

<div class="align-self-start">

    @section('title', 'Home')
</div>

<div class="container h-100 d-flex justify-content-center align-items-center">
    <section class="text-center h-100">
        <div class="container h-100">
            <div class="row d-flex align-content-center h-100">
                <div class="col">
                    @section('content')
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
