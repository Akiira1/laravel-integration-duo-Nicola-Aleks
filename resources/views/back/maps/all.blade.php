@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <div class="bg-pink mt-2">
            <h3 class='mb-2 fs-3 text-light text-center'>Map</h3>
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
					<th scope='col'>address</th>
                    <th scope='col'>phone</th>
                    <th scope='col'>number</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($maps as $map)
                    <tr>
						<td>{{ $map->name }}</td>
						<td>{{ $map->phone }}</td>
						<td>{{ $map->mobile }}</td>
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
    <embed src="{{ asset('/img/map.mp3') }}" loop="false" autostart="true" width="2" height="0">
@endsection
