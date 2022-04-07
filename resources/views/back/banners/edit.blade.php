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
        <form action='{{ route('banner.update' , $banner->id) }}' method='post'>
            @csrf
            @method('put')
			<div>
				<label for=''>button</label>
				<input type='text' name='button' value='{{ $banner->button }}'>
			<div>
			<div>
				<label for=''>image</label>
				<input type='text' name='image' value='{{ $banner->image }}'>
			<div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
