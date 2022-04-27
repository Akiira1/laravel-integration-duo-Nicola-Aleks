@extends('back.layouts.app')

@section('content')
        <div class="d-flex justify-content-center mt-5 pt-3">
                <h1 class="text-dark card fw-bold fs-1 border-0 ">You can't do this</h1>
        </div>
        <div class="d-flex justify-content-center">
                <img class='mt-3 border-2 border-dark' src="{{ asset('img/error.jpg') }}" style="width:600px;">
        </div>
@endsection
