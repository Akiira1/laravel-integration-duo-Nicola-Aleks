@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <div class="row justify-content-center mt-4">
            <div class="col-8">
                <div class="card border border-0">
                    <div class="card-body">
                        <h5 class="card-title text-center">Title</h5>
                        <p class="m-4">* You can use [  ] to apply color to the text</p>
                        @if ($errors->any())
                            <div class='alert alert-danger'>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        <form action='{{ route('title.update', $title->id) }}' method='post'>
                            @csrf
                            @method('put')
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">title</span>
                                <input type="text" class="form-control" name='title' value='{{ $title->title }}'
                                    aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">subtitle</span>
                                <input type="text" class="form-control" name='subtitle' value='{{ $title->subtitle }}'
                                    aria-describedby="basic-addon1">
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
