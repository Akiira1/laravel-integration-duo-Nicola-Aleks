@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>User</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('user.store') }}' method='post'>
            @csrf
			<div>
				<label for=''>name</label>
				<input type='text' name='name'>
			<div>
			<div>
				<label for=''>role_id</label>
				<input type='text' name='role_id'>
			<div>

            <button type='submit'>Create</button> {{-- create_blade_anchor --}}
        </form>
    </div>
@endsection
