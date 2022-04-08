<style>
    .min-h-screen{
<<<<<<< HEAD
        background: rgb(246,191,159);
        background: linear-gradient(0deg, rgba(246,191,159,1) 10%, rgba(219,138,222,1) 100%);
        back
=======
        background-image: url('../../img/giphy.gif');
        background-size: cover;
        background-position: center;
>>>>>>> 3bd93506554f171315c61f0124c74303a73c218f
    }
    .bg{
        background-color: rgba(219, 103, 8, 0.562);
    }
</style>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
    <embed src="{{ asset('/img/decompte.mp3') }}" loop="false" autostart="true" width="2" height="0">
</div>
