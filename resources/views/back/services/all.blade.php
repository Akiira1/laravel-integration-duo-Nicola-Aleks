@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <div class="bg-pink mt-2">
            <h3 class='mb-2 fs-3 text-light text-center'>Service</h3>
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
					<th scope='col'>icone</th>
					<th scope='col'>title</th>
					<th scope='col'>description</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
						<td><img src="{{"/img/" . $service->icone }}" alt=""></td>
						<td>{{ $service->title }}</td>
						<td>{{ $service->description }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                @can('delete', $service)
                                <form action='{{ route('service.destroy', $service->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class='btn btn-danger' type=submit>Delete</button>
                                </form>
                                @endcan
                                @can('update', $service)
                                <a class='btn btn-primary' href='{{ route('service.edit', $service->id) }}' role='button'>Edit</a>
                                @endcan
                                <a class='btn btn-primary' href='{{ route('service.show', $service->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mx-3">
            @can('create', $service)
            <a class='btn btn-success' href='{{ route('service.create') }}' role='button'>Create</a>
            @endcan
        </div>
    </div>
    <embed src="{{ asset('/img/service.mp3') }}" loop="false" autostart="true" width="2" height="0">
@endsection
