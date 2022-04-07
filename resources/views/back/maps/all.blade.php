@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Map</h1>
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
                    <th scope='col'>#</th>
					<th scope='col'>link</th>
					<th scope='col'>name</th>
					<th scope='col'>number</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($maps as $map)
                    <tr>
                        <th scope='row'>{{ $map->id }}</th>
						<td>{{ $map->link }}</td>
						<td>{{ $map->name }}</td>
						<td>{{ $map->number }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
								<a class='btn btn-primary' href='{{ route('map.show', $map->id) }}' role='button'>Read</a>
								<a class='btn btn-primary' href='{{ route('map.edit', $map->id) }}' role='button'>Edit</a>
                            </div> {{-- all_button_anchor --}} 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
