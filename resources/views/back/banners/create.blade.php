@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <div class="row justify-content-center mt-4">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Banner</h5>
                        @if ($errors->any())
                            <div class='alert alert-danger'>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action='{{ route('banner.store') }}' method='post'>
                            @csrf

                            <div class="d-flex justify-content-center">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">button</span>
                                    <input type='text' name='button' aria-describedby="basic-addon1">
                                </div>
    
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">image</span>
                                    <input type='text' name='image' aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary" type='submit'>Create</button> {{-- create_blade_anchor --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
