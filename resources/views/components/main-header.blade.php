<header class="text-gray-600 body-font">
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
            <a href="{{-- route('all-listings') --}}" class="mr-5 hover:text-gray-900">All Ads</a>
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
</header>