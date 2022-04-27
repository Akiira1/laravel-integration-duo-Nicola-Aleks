@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <div class="bg-pink mt-2">
            <h3 class='mb-2 fs-3 text-light text-center'>Testimonial</h3>
        </div>
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
                    <th scope='col'>post</th>
                    <th scope='col'>description</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->post }}</td>
                        <td>{{ $testimonial->description }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                @can('delete', $testimonial)
                                    <form action='{{ route('testimonial.destroy', $testimonial->id) }}' method='post'>
                                        @method('delete')
                                        @csrf
                                        <input type="hidden" name="id" value="{{ encrypt($testimonial->id) }}">
                                        <button class='btn btn-danger' type=submit>Delete</button>
                                    </form>
                                @endcan

                                @can('update', $testimonial)
                                    <a class='btn btn-primary' href='{{ route('testimonial.edit', $testimonial->id) }}'
                                        role='button'>Edit
                                    </a>
                                @endcan

                                <a class='btn btn-primary' href='{{ route('testimonial.show', $testimonial->id) }}'
                                    role='button'>Read
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mx-3">
            @can('create', $testimonial)
            <a class='btn btn-success' href='{{ route('testimonial.create') }}' role='button'>Create</a>
            @endcan
        </div>
    </div>
    <embed src="{{ asset('/img/testi.mp3') }}" loop="false" autostart="true" width="2" height="0">
@endsection
