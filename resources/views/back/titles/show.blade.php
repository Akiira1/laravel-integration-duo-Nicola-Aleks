@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Title</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>title</th>
					<th scope='col'>subtitle</th>
                    <th scope='col'>Action</th> {{-- show_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $title->id }}</th>
						<td>{{ $title->title }}</td>
						<td>{{ $title->subtitle }}</td>
                    <td> {{-- show_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('title.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
