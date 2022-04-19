@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <div class="row justify-content-center mt-4">
            <div class="col-8">
                <div class="card border border-0">
                    <div class="card-body">
                        <h5 class="card-title text-center">Map</h5>
                        @if ($errors->any())
                            <div class='alert alert-danger'>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action='{{ route('map.update', $map->id) }}' method='post'>
                            @csrf

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Address</span>
                                <input type="text" id="name" name="name" class="form-control" value="{{ $map->name }}">
                              </div>

                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Phone</span>
                                <input type="text" id="phone" name="phone" class="form-control"
                                value="{{ $map->phone }}">
                              </div>

                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Mobile</span>
                                <input type="text" id="mobile" name="mobile" class="form-control"
                                value="{{ $map->mobile }}">
                              </div>
                            
                           <div class="d-flex justify-content-center">
                            <button class="btn btn-primary"type='submit'>Update</button>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
