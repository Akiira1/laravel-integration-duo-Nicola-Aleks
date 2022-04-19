@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Service</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>icone</th>
					<th scope='col'>title</th>
					<th scope='col'>description</th>
                    <th scope='col'>Action</th> {{-- show_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $service->id }}</th>
                    <td><img src="{{"/img/" . $service->icone }}" alt=""></td>
						<td>{{ $service->title }}</td>
						<td>{{ $service->description }}</td>
                    <td> {{-- show_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('service.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
