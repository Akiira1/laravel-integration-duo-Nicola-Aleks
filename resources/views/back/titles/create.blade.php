@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Title</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('title.store') }}' method='post'>
            @csrf
			<div>
				<label for=''>title</label>
				<input type='text' name='title'>
			<div>
			<div>
				<label for=''>subtitle</label>
				<input type='text' name='subtitle'>
			<div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}}
        </form>
    </div>
@endsection
