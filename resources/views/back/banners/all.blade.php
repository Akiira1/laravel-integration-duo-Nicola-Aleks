@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Banner</h1>
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
        <a class='btn btn-success' href='{{ route('banner.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>button</th>
					<th scope='col'>image</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($banners as $banner)
                    <tr>
                        <th scope='row'>{{ $banner->id }}</th>
						<td>{{ $banner->button }}</td>
						<td>{{ $banner->image }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('banner.destroy', $banner->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('banner.edit', $banner->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('banner.show', $banner->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <embed src="{{ asset('/img/title.mp3') }}" loop="false" autostart="true" width="2" height="0">
@endsection
