<aside class="h-[75px] bg-red-600 shadow-xl mt-7">

    <div class="flex flex-warp">
        <img src="assets/image/logo_happistudio 3.png" alt="" class="w-[130px] ml-20 absolute top-0 shadow-lg ">
        <div class="flex items-center justify-center flex-1 space-x-10">
            <a href="/" class="text-white font-bold hover:text-black mt-5">BERANDA</a>
            <a href="/#about" class="text-white font-bold hover:text-black mt-5">ABOUT</a>
            <a href="/pricelist" class="flex items-center text-white font-bold hover:text-black mt-5">
                PRICELIST
            </a>
        </div>
        <div class="flex justify-end">
            <p class="text-white font-bold mt-5 mr-6">
                @if (Auth::user())
                    Hi, {{ Auth::user()->name }}
                @endif
            </p>
            {{-- <details class="dropdown">
  <summary class="m-1 btn bg-red-500">open or close</summary>
  <ul class="p-2 bg-red-500 shadow menu dropdown-content z-[1] rounded-box w-52">
    <li><a>Item 1</a></li>
    <li><a>Item 2</a></li>
  </ul>
</details> --}}
            {{-- <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div> --}}

        </div>

    </div>
</aside>
