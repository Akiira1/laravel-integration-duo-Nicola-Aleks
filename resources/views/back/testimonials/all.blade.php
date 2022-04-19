@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Testimonial</h1>
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
        <a class='btn btn-success' href='{{ route('testimonial.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>name</th>
					<th scope='col'>post</th>
					<th scope='col'>description</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <th scope='row'>{{ $testimonial->id }}</th>
						<td>{{ $testimonial->name }}</td>
						<td>{{ $testimonial->post }}</td>
						<td>{{ $testimonial->description }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('testimonial.destroy', $testimonial->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class='btn btn-danger' type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('testimonial.edit', $testimonial->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('testimonial.show', $testimonial->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <embed src="{{ asset('/img/testi.mp3') }}" loop="false" autostart="true" width="2" height="0">
@endsection
