@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <div class="bg-pink mt-2">
            <h3 class='mb-2 fs-3 text-light text-center'>Banner</h3>
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
					<th scope='col'>button</th>
					<th scope='col'>image</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($banners as $banner)
                    <tr>
						<td>{{ $banner->button }}</td>
						<td><img style='width: 150px; height: 150px;' src="{{ '/img/' . $banner->image }}" alt="">
                        </td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                
                                <a class='btn btn-primary' href='{{ route('banner.edit', $banner->id) }}' role='button'>Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <embed src="{{ asset('/img/banner.mp3') }}" loop="false" autostart="true" width="2" height="0">
@endsection
