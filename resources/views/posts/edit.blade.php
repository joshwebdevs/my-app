@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6 text-center md:text-left">Edit Post</h1>

    <div class="bg-white shadow-md rounded-lg p-6 max-w-lg mx-auto">
        <form action="{{ route('posts.update', $post) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Title Input -->
            <div>
                <label for="title" class="block text-sm font-semibold text-gray-600 mb-1">Title</label>
                <input type="text" name="title" value="{{ $post->title }}" 
                       class="border-gray-300 rounded-lg w-full px-4 py-2 focus:ring focus:ring-blue-200 focus:border-blue-500" 
                       required>
            </div>

            <!-- Content Input -->
            <div>
                <label for="content" class="block text-sm font-semibold text-gray-600 mb-1">Content</label>
                <textarea name="content" rows="5" 
                          class="border-gray-300 rounded-lg w-full px-4 py-2 focus:ring focus:ring-blue-200 focus:border-blue-500" 
                          required>{{ $post->content }}</textarea>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-between space-x-4">
                <!-- Update Button -->
                <button type="submit" 
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg transition duration-200">
                    Update
                </button>

                <!-- Cancel Button -->
                <a href="{{ url()->previous() }}" 
                   class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-semibold px-4 py-2 rounded-lg transition duration-200 text-center">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
