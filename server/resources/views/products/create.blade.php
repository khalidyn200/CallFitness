<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('title') }}" required>
                        </div>

                        <div class="mt-4">
                            <label for="short_description" class="block text-sm font-medium text-gray-700">Short Description</label>
                            <textarea name="short_description" id="short_description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('short_description') }}</textarea>
                        </div>

                        <div class="mt-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description') }}</textarea>
                        </div>

                        <div class="mt-4">
                            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                            <input type="number" name="price" id="price" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('price') }}" required>
                        </div>

                        <div class="mt-4">
                            <label for="pictures" class="block text-sm font-medium text-gray-700">Pictures</label>
                            <input type="file" name="pictures" id="pictures" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="mt-4">
                            <label for="categorie_id" class="block text-sm font-medium text-gray-700">Category</label>
                            <select name="categorie_id" id="categorie_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->nom_categorie }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
