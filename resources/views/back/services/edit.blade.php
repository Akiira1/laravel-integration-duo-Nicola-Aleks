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
        <form action='{{ route('service.update' , $service->id) }}' method='post'>
            @csrf
            @method('put')
			<div>
				<label for=''>icone</label>
				<input type='text' name='icone' value='{{ $service->icone }}'>
			<div>
			<div>
				<label for=''>title</label>
				<input type='text' name='title' value='{{ $service->title }}'>
			<div>
			<div>
				<label for=''>description</label>
				<input type='text' name='description' value='{{ $service->description }}'>
			<div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
