@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <div class="row justify-content-center mt-4">
            <div class="col-8">
                <div class="card  border-0">
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
                        <form action='{{ route('user.store') }}' method='post'>
                            @csrf
                            @method('put')
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">name</span>
                                <input type="text" class="form-control" name='name' value=''
                                    aria-describedby="basic-addon1">
                            </div>

                            <div>
                                <label>Role</label>
                                <select name='equipe_id' class="form-control">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-flex justify-content-center">
                                
                                <button type='submit'>Create</button> {{-- create_blade_anchor --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
