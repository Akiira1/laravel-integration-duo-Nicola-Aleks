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
        <form action='{{ route('map.update', $map->id) }}' method='post'>
            @csrf
            <div class="form-group">
                <input type="text" id="name" name="name" class="form-control" value="{{ $map->name }}">
                <input type="text" id="phone" name="phone" class="form-control" value="{{ $map->phone }}">
                <input type="text" id="mobile" name="mobile" class="form-control" value="{{ $map->mobile }}">
            </div>
            <button type='submit'>Update</button>
        </form>
    </div>

@endsection
