@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl md:text-3xl font-bold text-center md:text-left mb-8">Create New Post</h1>
    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-8">
        <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
            @csrf
            <!-- Title Field -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input type="text" name="title" id="title" 
                       class="border border-gray-300 rounded w-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                       placeholder="Enter the title" required>
            </div>

            <!-- Content Field -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                <textarea name="content" id="content" rows="5"
                          class="border border-gray-300 rounded w-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                          placeholder="Write your post content here" required></textarea>
            </div>

            <!-- Buttons -->
            <div class="flex justify-center md:justify-end space-x-4">
                <a href="{{ route('dashboard') }}" 
                   class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-semibold px-6 py-2 rounded transition-colors duration-200">
                    Cancel
                </a>
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded transition-colors duration-200">
                    Create Post
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
