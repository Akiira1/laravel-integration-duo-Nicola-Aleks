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
        <form action='{{ route('testimonial.update' , $testimonial->id) }}' method='post'>
            @csrf
            @method('put')
			<div>
				<label for=''>name</label>
				<input type='text' name='name' value='{{ $testimonial->name }}'>
			<div>
			<div>
				<label for=''>post</label>
				<input type='text' name='post' value='{{ $testimonial->post }}'>
			<div>
			<div>
				<label for=''>description</label>
				<input type='text' name='description' value='{{ $testimonial->description }}'>
			<div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
