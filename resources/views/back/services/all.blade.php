@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Service</h1>
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
        <a class='btn btn-success' href='{{ route('service.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>icone</th>
					<th scope='col'>title</th>
					<th scope='col'>description</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <th scope='row'>{{ $service->id }}</th>
						<td><img src="{{"/img/" . $service->icone }}" alt=""></td>
						<td>{{ $service->title }}</td>
						<td>{{ $service->description }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('service.destroy', $service->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class='btn btn-danger' type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('service.edit', $service->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('service.show', $service->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <embed src="{{ asset('/img/service.mp3') }}" loop="false" autostart="true" width="2" height="0">
@endsection
