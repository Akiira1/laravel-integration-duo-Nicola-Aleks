@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <div class="row justify-content-center mt-4">
            <div class="col-8">
                <div class="card border border-0">
                    <div class="card-body">
                        <h5 class="card-title text-center">Users</h5>
                        @if ($errors->any())
                            <div class='alert alert-danger'>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action='{{ route('user.update', $user->id) }}' method='post'>
                            @csrf
                            @method('put')
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">name</span>
                                <input type="text" class="form-control" name='name' value='{{ $user->name }}'
                                    aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">post</span>
                                <input type="text" class="form-control" name='post' value='{{ $user->role_id }}'
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
