@extends('back.layouts.app')
@section('content')
    <div class='container'>
            <div class="row justify-content-center mt-4">
                <div class="col-8">
                    <div class="card border border-0">
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
                            <form action='{{ route('banner.update', $banner->id) }}' method='post' enctype='multipart/form-data'>
                                @csrf
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">button</span>
                                    <input type="text" class="form-control" name='button' value='{{ $banner->button }}'
                                        aria-describedby="basic-addon1">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" name='image' type="file" id="formFile">
                               </div>
                                <div>
                                    <div class="d-flex justify-content-center">
                                        <button class='btn btn-primary' type='submit'>Update</button>
                                        {{-- update_blade_anchor --}}
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
