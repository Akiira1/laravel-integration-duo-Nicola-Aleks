@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Map</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('map.update' , $map->id) }}' method='post'>
            @csrf
			<div>
				<label for=''>link</label>
				<input type='text' name='link' value='{{ $map->link }}'>
			<div>
			<div>
				<label for=''>name</label>
				<input type='text' name='name' value='{{ $map->name }}'>
			<div>
			<div>
				<label for=''>number</label>
				<input type='text' name='number' value='{{ $map->number }}'>
			<div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
