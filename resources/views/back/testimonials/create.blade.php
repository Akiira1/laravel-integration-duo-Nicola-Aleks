@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Testimonial</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('testimonial.store') }}' method='post'>
            @csrf
			<div>
				<label for=''>name</label>
				<input type='text' name='name'>
			<div>
			<div>
				<label for=''>post</label>
				<input type='text' name='post'>
			<div>
			<div>
				<label for=''>description</label>
				<input type='text' name='description'>
			<div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}}
        </form>
    </div>
@endsection
