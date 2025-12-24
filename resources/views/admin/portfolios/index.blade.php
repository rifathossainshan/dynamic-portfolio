<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Portfolios') }}
            </h2>
            <a href="{{ route('admin.portfolios.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Add New Portfolio
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                            role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b text-left">Image</th>
                                    <th class="py-2 px-4 border-b text-left">Title</th>
                                    <th class="py-2 px-4 border-b text-left">Category</th>
                                    <th class="py-2 px-4 border-b text-left">Featured</th>
                                    <th class="py-2 px-4 border-b text-left">Order</th>
                                    <th class="py-2 px-4 border-b text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($portfolios as $portfolio)
                                    <tr>
                                        <td class="py-2 px-4 border-b">
                                            @if($portfolio->image_path)
                                                <img src="{{ asset('storage/' . $portfolio->image_path) }}"
                                                    alt="{{ $portfolio->title }}" class="w-16 h-16 object-cover rounded">
                                            @else
                                                <span class="text-gray-400">No image</span>
                                            @endif
                                        </td>
                                        <td class="py-2 px-4 border-b">{{ $portfolio->title }}</td>
                                        <td class="py-2 px-4 border-b">{{ $portfolio->category }}</td>
                                        <td class="py-2 px-4 border-b">
                                            @if($portfolio->featured)
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Yes</span>
                                            @else
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">No</span>
                                            @endif
                                        </td>
                                        <td class="py-2 px-4 border-b">{{ $portfolio->order }}</td>
                                        <td class="py-2 px-4 border-b">
                                            <div class="flex items-center space-x-2">
                                                <a href="{{ route('admin.portfolios.edit', $portfolio) }}"
                                                    class="text-blue-600 hover:text-blue-900">Edit</a>
                                                <form action="{{ route('admin.portfolios.destroy', $portfolio) }}"
                                                    method="POST" onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="text-red-600 hover:text-red-900">Delete</button>
                                                </form>
                                            </div>
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
</x-app-layout>