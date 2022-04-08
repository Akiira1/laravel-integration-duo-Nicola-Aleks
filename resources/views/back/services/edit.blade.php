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
			<div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Icon</label>
                <select class="form-select" id="inputGroupSelect01">
                  <option selected></option>
                    @foreach ($service as $service)
                    <option  value="{{ $service->id }}">1</option>
                    @endforeach
                </select>
              </div>
			<div>
			<div>
				<label for=''>title</label>
				<input type='text' name='title' value='{{ $service->title }}'>
			<div>
                <div ></div>
			<div>
				<label for=''>description</label>
				<input type='text' name='description' value='{{ $service->description }}'>
			<div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection

{{-- <option style="background-image:url('{{ asset('img/' . 'service-icon-01.png') }}'); value=""></option> --}}

