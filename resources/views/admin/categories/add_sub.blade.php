<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            New Sub Category For {{ $category->name }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="flex justify-start">
                        <a href="{{ route('admin.categories.index') }}"
                            class="px-4 py-2 m-2 bg-green-500 rounded-md hover:bg-green-300 text-gray-50">Back</a>
                    </div>
                </div>
            </div>
            <div class="p-2 m-2 overflow-hidden bg-gray-200 sm:rounded-lg">
                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Create Sub Category</h3>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="{{ route('admin.add_sub.store', $category->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3 sm:col-span-2">
                                                <label for="name" class="block text-sm font-medium text-gray-700">
                                                    Name
                                                </label>
                                                <div class="flex mt-1 rounded-md shadow-sm">
                                                    <input type="text" name="name" id="name"
                                                        class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm"
                                                        placeholder="Name">
                                                    @error('name') <span
                                                            class="error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">
                                                Image
                                            </label>
                                            <div class="flex items-center mt-1">
                                                <input type="file" id="image" name="image"
                                                    class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm" />
                                                @error('image') <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="px-4 py-3 bg-gray-50 sm:px-6">
                                            <button type="submit"
                                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>