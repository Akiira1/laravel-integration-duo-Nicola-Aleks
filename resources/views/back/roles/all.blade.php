@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Role</h1>
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
                    <th scope='col'>Action</th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
						<td>{{ $role->name }}</td>
                        <td> 
                            <div class='d-flex'>
								<a class='btn btn-primary' href='{{ route('role.show', $role->id) }}' role='button'>Read</a>
								<form action='{{ route('role.destroy', $role->id) }}' method='post'>
									@csrf
									<button class=btn btn-danger type=submit>Delete</button>
								</form>
                            </div> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
