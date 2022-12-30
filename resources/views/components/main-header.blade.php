{{-- <header class="text-gray-600 body-font">
    <div class="container flex flex-col flex-wrap items-center p-5 mx-auto md:flex-row">
        <a class="flex items-center mb-4 font-medium text-gray-900 title-font md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" class="w-10 h-10 p-2 text-white bg-indigo-500 rounded-full"
                viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Classified</span>
        </a>
        <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto">
            <a href="/" class="mr-5 hover:text-gray-900">Home</a>
            <a href="{{ route('all-listings') }}" class="mr-5 hover:text-gray-900">All Ads</a>
            @guest
                <a href="{{ route('login') }}" class="mr-5 hover:text-gray-900">login</a>
                <a href="{{ route('register') }}" class="mr-5 hover:text-gray-900">Register</a>
            @endguest
            @auth
                <a href="{{ route('dashboard') }}" class="mr-5 hover:text-gray-900">{{ auth()->user()->name }}</a>
            @endauth
        </nav>
        <a href="{{ route('listings.create') }}"
            class="inline-flex items-center px-3 py-1 mt-4 text-base font-semibold bg-green-500 border-0 rounded focus:outline-none hover:bg-green-200 text-gray-50 md:mt-0">Post
            New Ad
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</header>--}}
<header class="text-gray-700 bg-dark-600 body-font dark:text-gray-200 dark:bg-gray-800">
<div class="">
    <div x-data="{ open: false }"
        class="flex flex-col max-w-screen-xl px-4 py-2 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="flex flex-row items-center justify-between space-x-2">
           
                <a href="/" class="flex items-center mx-6 font-medium text-gray-900 title-font md:mb-0">
                    <img class="w-auto h-18" src="{{ asset('images/topnorsh-logo.png') }}" alt="Your Company">
                </a>
             <div class="flex flex-row">   
              <livewire:search />
            </div>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}"
            class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
            <a href="{{ route('listings.create') }}"
               class="inline-flex items-center px-3 py-1 mt-4 text-base font-semibold bg-green-500 border-0 rounded focus:outline-none hover:bg-green-700 text-gray-50 md:mt-0">Post
                New Ad
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
            <a class="{{ request()->routeIs('all-listings')?'bg-gray-200dark:bg-gray-700':'bg-transparent'}} px-4 py-2 mt-2 text-sm font-semibold rounded-lg dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="{{ route('all-listings') }}">All Ads</a>
           @guest
                <a class="{{ request()->routeIs('login')?'bg-gray-200dark:bg-gray-700':'bg-transparent' }} px-4 py-2 mt-2 text-sm font-semibold rounded-lg dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="{{  route('login') }}">login</a>
                <a class="{{ request()->routeIs('register')?'bg-gray-200dark:bg-gray-700':'bg-transparent' }} px-4 py-2 mt-2 text-sm font-semibold rounded-lg dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('register') }}">Register</a>
            @endguest
            @auth
            <a class="{{ request()->routeIs('dashboard')?'bg-gray-200dark:bg-gray-700':'bg-transparent' }} px-4 py-2 mt-2 text-sm font-semibold rounded-lg dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="{{ route('dashboard') }}">Dashboard</a>
    
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open"
                    class="{{-- request()->routeIs('genres.*')?'bg-gray-200dark:bg-gray-700':'bg-transparentdark:bg-transparent' --}} flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left rounded-lg dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span>{{ Auth::user()->name }}</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                        class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 z-10 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-24">
                    <div class="flex flex-wrap px-2 py-2 bg-white rounded-md shadow dark:bg-gray-800">
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('profile.show') }}">Profile</a>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            Logout
                        </a>
                    </form>
                       
                    </div>
                </div>
            </div>
            @endauth
    </div>

    </nav>
</div>
</div>
</header>