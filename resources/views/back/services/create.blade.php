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
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Icon</label>
                                <input class="form-control" name='icone' type="file" id="formFile">
                           </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">title</span>
                                <input type='text' name='title' aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">description</span>
                                <input type='text' name='description' aria-describedby="basic-addon1">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success"type='submit'>Create</button>   {{--create_blade_anchor --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
