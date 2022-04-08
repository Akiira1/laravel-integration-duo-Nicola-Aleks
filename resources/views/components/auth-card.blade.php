<style>
    .min-h-screen{
        background: rgb(246,191,159);
        background: linear-gradient(0deg, rgba(246,191,159,1) 10%, rgba(219,138,222,1) 100%);
    }
    .bg{
        background-color: rgba(219, 103, 8, 0.151);
    }
</style>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
