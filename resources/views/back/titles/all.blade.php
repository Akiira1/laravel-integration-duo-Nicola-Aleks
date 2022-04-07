@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Title</h1>
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
        <a class='btn btn-success' href='{{ route('title.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>title</th>
					<th scope='col'>subtitle</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($titles as $title)
                    <tr>
                        <th scope='row'>{{ $title->id }}</th>
						<td>{{ $title->title }}</td>
						<td>{{ $title->subtitle }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('title.destroy', $title->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('title.edit', $title->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('title.show', $title->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
