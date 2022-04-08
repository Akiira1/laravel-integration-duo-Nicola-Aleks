<style>
    .min-h-screen{
        background-image: url('../../img/giphy.gif');
        background-size: cover;
        background-position: center;
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
