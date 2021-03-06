@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Map</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>name</th>
					<th scope='col'>phone</th>
					<th scope='col'>mobile</th>
                    <th scope='col'>Action</th> {{-- show_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $map->id }}</th>
						<td>{{ $map->name }}</td>
						<td>{{ $map->phone }}</td>
						<td>{{ $map->mobile }}</td>
                    <td> {{-- show_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('map.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
