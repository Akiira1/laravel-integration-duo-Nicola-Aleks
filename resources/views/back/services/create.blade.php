@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <div class="row justify-content-center mt-4">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Service</h5>

                        @if ($errors->any())
                            <div class='alert alert-danger'>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action='{{ route('service.store') }}' method='post' enctype='multipart/form-data'>
                            @csrf

                            <div class="row justify-content-center my-4">
                                @foreach ($services as $item)
                                    @if ($item->id <= 4)
                                    <div class='col-2'>
                                        <img style='width: 50px; height: 50px;' src="{{ '/img/' . $item->icone }}" alt="">
                                            <input class="form-check-input" type="radio" id="checkboxNoLabel"
                                                value="{{ $item->icone }}" name='icone' aria-label="...">
                                    </div>
                                    @endif
                                @endforeach
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">title</span>
                                <input type='text' name='title' value='' aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">description</span>
                                <input type='text' name='description' value='' aria-describedby="basic-addon1">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success" type='submit'>Create</button> {{-- create_blade_anchor --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
