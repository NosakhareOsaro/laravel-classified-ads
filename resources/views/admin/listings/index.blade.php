<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('All Listings') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        @if (session('message'))
            <div class="p-2 m-2 text-lg text-center text-gray-100 bg-indigo-600">{{ session('message') }}</div>
        @endif
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="flex justify-end">
                        <a href="{{ route('listings.create') }}"
                            class="px-4 py-2 m-2 bg-green-500 rounded-md hover:bg-green-300 text-gray-50">New
                            Listing</a>
                    </div>
                </div>
            </div>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Slug
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Image
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($listings as $listing)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                {{ $listing->title }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                {{ $listing->slug }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <img class="w-12 h-12 rounded-md"
                                                    src="{{ Storage::url($listing->featured_image) }}">
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                            <a href="{{ route('listings.edit', $listing->id) }}"
                                                class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            <form method="POST"
                                                action="{{ route('listings.destroy', $listing->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <a class="text-red-500 hover:text-red-900"
                                                    href="{{ route('listings.destroy', $listing->id) }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                    Delete
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>