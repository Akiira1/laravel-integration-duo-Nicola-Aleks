@extends('back.layouts.app')
@section('content')

    <div class='container'>
        <h1 class='mb-5 fs-1'>Titles</h1>
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
                    <th class="noBorder" scope='col'>#</th>
					<th class="noBorder" scope='col'>title</th>
					<th class="noBorder" scope='col'>subtitle</th>
                    <th class="noBorder" scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($titles as $title)
                    <tr>
                        <th scope='row'>{{ $title->id }}</th>
						<td class="px-2 py-2">{{ $title->title }}</td>
						<td class="px-2 py-2">{{ $title->subtitle }}</td>
                        <td class="px-2 py-2">
                            <div class='d-flex'>
                                <a class='btn btn-primary' href='{{ route('title.edit', $title->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('title.show', $title->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <embed src="{{ asset('/img/title.mp3') }}" loop="false" autostart="true" width="2" height="0">
@endsection
