@extends('back.layouts.app')
@section('content')
<style>
    .pos1 {
        position: relative;
    }
    .pos2 {
        position: absolute;
        top: 50%;
        right: 0%;
        
    }
    .postion-absolute{
        right: 0;
    }
    .btn{
        border-radius: 3px;
        background: rgb(246,191,159);
        background: linear-gradient(0deg, rgba(246,191,159,1) 10%, rgba(219,138,222,1) 100%);
    
    }
</style>
<div class="pos1">
   <div class="pos2">
    <button class="btn">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </button>
   </div>
</div>
@endsection