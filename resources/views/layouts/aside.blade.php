<aside class="flex justify-between items-center px-5 py-3 bg-red-600" >

    <div>
        <img src="assets/image/logo_happistudio 3.png" alt="" class="w-[130px] ml-20 absolute top-0 shadow-lg ">
    </div>

    {{-- <div class="flex items-center justify-center flex-1 space-x-10"> --}}
        <div class="flex items-center space-x-5">
            <a href="/" class="text-white font-bold hover:text-black mt-5">BERANDA</a>
            <a href="/#about" class="text-white font-bold hover:text-black mt-5">ABOUT</a>
            <a href="/pricelist" class="flex items-center text-white font-bold hover:text-black mt-5">PRICELIST</a>
        </div>



        <div class="flex justify-end items-center space-x-5">

                <p class="text-white font-bold mt-5 mr-6 cursor-pointer" id="userDropdownTrigger">
                    @if (Auth::user())
                        Hi, {{ Auth::user()->name }}
                </p>

                <div class="relative">
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

                @else
                    <div class="flex items-center space-x-3">
                        <a href="/login">
                            <p class="mt-5 font-bold text-white hover:text-black">Login</p>
                        </a>
                        <p class="mt-5 font-bold text-white">|</p>
                        <a href="/register">
                            <p class="mt-5 font-bold text-white hover:text-black">Daftar</p>
                        </a>
                    </div>
                @endif



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
