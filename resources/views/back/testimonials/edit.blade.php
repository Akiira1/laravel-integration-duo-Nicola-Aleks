@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <div class="row justify-content-center mt-4">
            <div class="col-8">
                <div class="card  border-0">
                    <div class="card-body">
                        <h5 class="card-title text-center">Testimonials</h5>
                        @if ($errors->any())
                            <div class='alert alert-danger'>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action='{{ route('testimonial.update', $testimonial->id) }}' method='post'>
                            @csrf
                            @method('put')
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">name</span>
                                <input type="text" class="form-control" name='name' value='{{ $testimonial->name }}'
                                    aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">post</span>
                                <input type="text" class="form-control" name='post' value='{{ $testimonial->post }}'
                                    aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">description</span>
                                <input type="text" class="form-control" name='description'
                                    value='{{ $testimonial->description }}' aria-describedby="basic-addon1">
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
