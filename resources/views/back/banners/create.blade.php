@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Banner</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('banner.store') }}' method='post'>
            @csrf
			<div>
				<label for=''>button</label>
				<input type='text' name='button'>
			<div>
			<div>
				<label for=''>image</label>
				<input type='text' name='image'>
			<div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}}
        </form>
    </div>
@endsection
