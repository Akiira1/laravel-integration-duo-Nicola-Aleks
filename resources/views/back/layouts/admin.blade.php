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
    <button class="btn m-0 p-0">
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
 <embed src="{{ asset('/img/dash.mp3') }}" loop="false" autostart="true" width="2" height="0">
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('/img/1.jpg') }}" class="card-img-top border border-0 mt-3 rounded-3" alt="...">
            <div class="card-body d-flex justify-content-center">
                    <audio id="myAudio">
                        <source src="{{ asset('/img/fart-03.mp3') }}" type="audio/mpeg">
                      </audio>
                      <button class="btn btn-primary" onclick="playAudio()" type="button">1</button>
                      <script>
                      var x = document.getElementById("myAudio"); 
                      function playAudio() { 
                        x.play(); 
                      } 
                      </script>
                    <audio id="myAudio1">
                        <source src="{{ asset('/img/fart-01.mp3') }}" type="audio/mpeg">
                      </audio>
                      <button class="btn btn-primary" onclick="playAudio1()" type="button">2</button>
                      <script>
                      var y = document.getElementById("myAudio1"); 
                      function playAudio1() { 
                        y.play(); 
                      } 
                      </script>

                    <audio id="myAudio2">
                        <source src="{{ asset('/img/fart-08.mp3') }}" type="audio/mpeg">
                      </audio>
                      <button class="btn btn-primary" onclick="playAudio2()" type="button">3</button>
                      <script>
                      var a = document.getElementById("myAudio2"); 
                      function playAudio2() { 
                        a.play(); 
                      } 
                      </script>
                      <audio id="myAudio3">
                        <source src="{{ asset('/img/fart-04.mp3') }}" type="audio/mpeg">
                      </audio>
                      <button class="btn btn-primary" onclick="playAudio3()" type="button">4</button>
                      <script>
                      var b = document.getElementById("myAudio3"); 
                      function playAudio3() { 
                        b.play(); 
                      } 
                      </script>
                      <audio id="myAudio4">
                        <source src="{{ asset('/img/fart-05.mp3') }}" type="audio/mpeg">
                      </audio>
                      <button class="btn btn-primary" onclick="playAudio4()" type="button">5</button>
                      <script>
                      var c = document.getElementById("myAudio4"); 
                      function playAudio4() { 
                        c.play(); 
                      } 
                      </script>

                       <audio id="myAudio5">
                        <source src="{{ asset('/img/fart-06.mp3') }}" type="audio/mpeg">
                      </audio>
                      <button class="btn btn-primary" onclick="playAudio5()" type="button">6</button>
                      <script>
                      var d = document.getElementById("myAudio5"); 
                      function playAudio5() { 
                        d.play(); 
                      } 
                      </script>
            </div>
          </div>
    </div>
</div>
@endsection
