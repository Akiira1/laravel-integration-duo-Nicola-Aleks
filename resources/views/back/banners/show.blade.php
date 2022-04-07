@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Banner</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>button</th>
					<th scope='col'>image</th>
                    <th scope='col'>Action</th> {{-- show_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $banner->id }}</th>
						<td>{{ $banner->button }}</td>
						<td>{{ $banner->image }}</td>
                    <td> {{-- show_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('banner.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
