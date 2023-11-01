<aside class="h-[75px] bg-red-600 shadow-xl mt-7">

    <div class="flex flex-warp">
        <img src="assets/image/logo_happistudio 3.png" alt="" class="w-[130px] ml-20 absolute top-0 shadow-lg ">
        <div class="flex items-center justify-center flex-1 space-x-10">
            <a href="/" class="text-white font-bold hover:text-black mt-5">BERANDA</a>
            <a href="#about" class="text-white font-bold hover:text-black mt-5">ABOUT</a>
            <a href="/pricelist" class="flex items-center text-white font-bold hover:text-black mt-5">
                PRICELIST
                <img src="assets/icon/arrow.png" alt=""
                    class=" w-6 h-6 filter brightness-0 invert transition-transform origin-center cursor-pointer hover:rotate-180 ml-2">
            </a>
        </div>
        <div class="flex justify-end">
            <p class="text-white font-bold mt-5 mr-6">
                @if (Auth::user())
                Hi, {{ Auth::user()->name }}
                @endif
            </p>
        </div>

    </div>
</aside>
