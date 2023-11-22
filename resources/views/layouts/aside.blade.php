<aside class="relative w-[1500x] h-[75px] bg-red-600 shadow-xl mt-7">

    <div class="flex flex-warp">
        <img src="assets/image/logo_happistudio 3.png" alt="" class="w-[130px] ml-20 absolute top-0 shadow-lg ">
        <div class="flex items-center justify-center flex-1 space-x-10">
            <a href="/" class="text-white font-bold hover:text-black mt-5">BERANDA</a>
            <a href="/#about" class="text-white font-bold hover:text-black mt-5">ABOUT</a>
            <a href="/pricelist" class="flex items-center text-white font-bold hover:text-black mt-5">
                PRICELIST
            </a>
        </div>

        <div class="flex justify-end items-center">
            <div class="relative">
                <p class="text-white font-bold mt-5 mr-6 cursor-pointer" id="userDropdownTrigger">
                    @if (Auth::user())
                        Hi, {{ Auth::user()->name }}
                    @endif
                </p>

                <!-- Dropdown Menu -->
                <div class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-lg hidden"
                    id="userDropdownMenu">

                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Toggle Dropdown on Click
            document.getElementById('userDropdownTrigger').addEventListener('click', function() {
                document.getElementById('userDropdownMenu').classList.toggle('hidden');
            });

            // Close Dropdown on Click Outside
            document.addEventListener('click', function(event) {
                const dropdownMenu = document.getElementById('userDropdownMenu');
                const dropdownTrigger = document.getElementById('userDropdownTrigger');

                if (!dropdownTrigger.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        </script>


    </div>
</aside>
