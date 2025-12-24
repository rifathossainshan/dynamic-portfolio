<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Portfolio Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <h3 class="text-lg font-bold">Title</h3>
                        <p>{{ $portfolio->title }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-bold">Category</h3>
                        <p>{{ $portfolio->category }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-bold">Description</h3>
                        <p>{{ $portfolio->description }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-bold">Image</h3>
                        @if($portfolio->image_path)
                            <img src="{{ asset('storage/' . $portfolio->image_path) }}" alt="{{ $portfolio->title }}"
                                class="w-64 h-auto rounded">
                        @else
                            <p class="text-gray-500">No image available.</p>
                        @endif
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-bold">Featured</h3>
                        <p>{{ $portfolio->featured ? 'Yes' : 'No' }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-bold">Order</h3>
                        <p>{{ $portfolio->order }}</p>
                    </div>

                    <div class="flex items-center space-x-4">
                        <a href="{{ route('admin.portfolios.edit', $portfolio) }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit
                        </a>
                        <a href="{{ route('admin.portfolios.index') }}"
                            class="text-gray-600 hover:text-gray-900 font-bold">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>