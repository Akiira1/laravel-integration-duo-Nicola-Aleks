@extends('back.layouts.app')
@section('content')
    <div class='container mt-4'>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card border border-0">
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
                        <form action='{{ route('service.update', $service->id) }}' method='post'>
                            @csrf
                            @method('put')
                            <div class="row justify-content-center my-4">
                                @foreach ($services as $item)
                                    @if ($item->id <= 4)
                                    <div class='col-2'>
                                        <img style='width: 50px; height: 50px;' src="{{ '/img/' . $item->icone }}" alt="">
                                        @if ($item->icone == $service->icone)
                                            <input class="form-check-input" type="radio" id="checkboxNoLabel"
                                                value="{{ $item->icone }}" aria-label="..." name='icone' checked>
                                        @else
                                            <input class="form-check-input" type="radio" id="checkboxNoLabel"
                                                value="{{ $item->icone }}" name='icone' aria-label="...">
                                        @endif
                                    </div>
                                    @endif
                                @endforeach
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Title</span>
                                <input type="text" class="form-control" aria-label="Username"
                                    aria-describedby="basic-addon1" name='title' value='{{ $service->title }}'>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">description</span>
                                <input type="text" class="form-control" aria-label="Username"
                                    aria-describedby="basic-addon1" name='description'
                                    value='{{ $service->description }}'>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary" type='submit'>Update</button> {{-- update_blade_anchor --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- <option style="background-image:url('{{ asset('img/' . 'service-icon-01.png') }}'); value=""></option> --}}
