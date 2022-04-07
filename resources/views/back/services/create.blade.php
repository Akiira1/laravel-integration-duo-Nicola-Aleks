@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Service</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('service.store') }}' method='post'>
            @csrf
			<div>
				<label for=''>icone</label>
				<input type='text' name='icone'>
			<div>
			<div>
				<label for=''>title</label>
				<input type='text' name='title'>
			<div>
			<div>
				<label for=''>description</label>
				<input type='text' name='description'>
			<div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}}
        </form>
    </div>
@endsection
