<x-main-layout>
    <x-slot name="header">
        <x-main-header></x-main-header>
    </x-slot>
    <section>
        <x-main-hero></x-main-hero>
    </section>
    <section class="p-2 m-2" id="list-listings">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    @foreach ($listings as $listing)
                        <div class="w-full p-4 lg:w-1/4 md:w-1/2">
                            <a class="relative block h-48 overflow-hidden rounded">
                                <img alt="ecommerce" class="block object-cover object-center w-full h-full"
                                    src="https://dummyimage.com/420x260">
                            </a>
                            <div class="mt-4">
                                <h3 class="mb-1 text-xs tracking-widest text-gray-500 title-font">
                                    {{ $listing->category->name }}</h3>
                                <h2 class="text-lg font-medium text-gray-900 title-font">{{ $listing->title }}</h2>
                                <p class="mt-1">$16.00</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </section>
    <x-main-footer></x-main-footer>

</x-main-layout>