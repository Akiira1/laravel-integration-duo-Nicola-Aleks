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
        {{-- <form action='{{ route('map.update' , $map->id) }}' method='post'>
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
			<div> --}}
                <form action='{{ route('map.update' , $map->id) }}' method='post'>
                    @csrf
        <div class="form-group">
            <label for="address_address">Address</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $map->name }}">
            <input type="text" id="address-input" name="address_address" value="{{ $map->address_address }}" class="form-control map-input">
            <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
            <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
            <input type="text" id="phone" name="phone" class="form-control" value="{{ $map->phone }}">
            <input type="text" id="mobile" name="mobile" class="form-control" value="{{ $map->mobile }}">
        </div>
        <div id="address-map-container" style="width:100%;height:400px; ">
            <div style="width: 100%; height: 100%" id="address-map"></div>
        </div>
        <button type='submit'>Update</button>
        {{-- </form> --}}
        </div>
        </form>
    </div>

@section('scripts')
    @parent
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize"
        async defer></script>
    <script src="/js/mapInput.js"></script>
@stop
@endsection

