@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Role</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>name</th>
                    <th scope='col'>Action</th> {{-- show_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $role->id }}</th>
						<td>{{ $role->name }}</td>
                    <td> {{-- show_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('role.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
