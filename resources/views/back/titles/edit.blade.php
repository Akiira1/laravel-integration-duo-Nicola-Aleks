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
        <form action='{{ route('title.update' , $title->id) }}' method='post'>
            @csrf
            @method('put')
			<div>
				<label for=''>title</label>
				<input type='text' name='title' value='{{ $title->title }}'>
			<div>
			<div>
				<label for=''>subtitle</label>
				<input type='text' name='subtitle' value='{{ $title->subtitle }}'>
			<div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
