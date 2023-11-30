<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('beranda')" :active="request()->routeIs('beranda')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
    

    <!-- Responsive Navigation Menu -->
            <x-responsive-nav-link :href="route('beranda')" :active="request()->routeIs('beranda')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
       <x-nav-foot>
            <h2>INI ADALAH NAVfoot</h2>
       </x-nav-foot>
</nav>
