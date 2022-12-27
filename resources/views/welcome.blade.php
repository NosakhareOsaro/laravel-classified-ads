<x-main-layout>
    <x-slot name="header">
        <x-main-header></x-main-header>
    </x-slot>
    <section>
        <x-main-hero></x-main-hero>
    </section>
    <section>
        <x-main-section>
            @foreach ($categories as $category)
                <div class="p-4 xl:w-1/3 md:w-1/2">
                    <div class="p-6 bg-gray-200 border border-gray-200 rounded-lg">
                        <div
                            class="inline-flex items-center justify-center w-10 h-10 mb-4 text-indigo-500 bg-indigo-100 rounded-full">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="mb-2 text-lg font-medium text-gray-900 title-font">{{ $category->name }}</h2>
                        <p class="text-base leading-relaxed">100 Ads.</p>
                    </div>
                </div>
            @endforeach
        </x-main-section>
        <x-main-featured>
            @foreach ($featured_ads as $ad)
                <div class="flex flex-col items-center p-4 text-center md:w-1/3">
                    <div
                        class="inline-flex items-center justify-center flex-shrink-0 w-20 h-20 mb-5 text-indigo-500 bg-indigo-100 rounded-full">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="mb-3 text-lg font-medium text-gray-900 title-font">{{ $ad->title }}</h2>
                        <p class="text-base leading-relaxed">{{ $ad->description }}</p>
                        <a class="inline-flex items-center mt-3 text-indigo-500">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </x-main-featured>
    </section>
    <x-main-footer></x-main-footer>
</x-main-layout>