@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <div class="bg-pink mt-2">
            <h3 class='mb-2 fs-3 text-light text-center'>User</h3>
        </div>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <table class='table'>
            <thead>
                <tr>
					<th scope='col'>name</th>
					<th scope='col'>email</th>
					<th scope='col'>role</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->role->name }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('user.destroy', $user->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class='btn btn-danger' type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('user.edit', $user->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('user.show', $user->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <a class='btn btn-success' href='{{ route('user.create') }}' role='button'>Create</a>
        </div>
    </div>
    <embed src="{{ asset('/img/user.mp3') }}" loop="false" autostart="true" width="2" height="0">
@endsection
