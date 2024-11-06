@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    

    @if (session('success'))
    <div id="flash-message" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6 transition-opacity">
        <span>{{ session('success') }}</span>
        <button type="button" onclick="closeFlashMessage()" class="absolute top-0 bottom-0 right-0 px-4 py-3 text-green-700">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>

    <div class="text-center md:text-left my-4">
        <a href="{{ route('posts.create') }}" class="bg-red-600 text-white px-4 py-2 rounded">Create New Post</a>
    </div>

    
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border-b p-4 text-left">Title</th>
                    <th class="border-b p-4 text-left">Content</th>
                    <th class="border-b p-4 text-left">Date</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
<tr 
    class="border-b cursor-pointer hover:bg-gray-100"
    onclick="openModal('{{ $post->id }}')"
>
    <td class="p-4">{{ $post->title }}</td>
    <td class="p-4">{{ \Illuminate\Support\Str::limit($post->content, 50) }}</td>
    <td class="p-4">{{ $post->created_at->format('d M Y') }}</td>
</tr>


<div 
    id="modal-{{ $post->id }}" 
    class="fixed z-10 inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden"
    onclick="closeModal('{{ $post->id }}')"
>
    <div 
        class="bg-white w-full max-w-lg mx-auto p-6 rounded-lg shadow-lg relative"
        onclick="event.stopPropagation()"
    >
        
        <h2 class="text-2xl font-bold mb-2 text-center text-gray-800">{{ $post->title }}</h2>
        <p class="text-sm text-gray-500 text-center mb-4">{{ $post->created_at->format('d M Y') }}</p>
        
        
        <p class="text-gray-700 mb-6">{{ $post->content }}</p>
        
        
        <div class="flex justify-between space-x-4">
            
            <button 
                class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-4 py-2 rounded transition-colors duration-200 w-full"
                onclick="closeModal('{{ $post->id }}')">
                Cancel
            </button>

            
            <a href="{{ route('posts.edit', $post) }}" 
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded transition-colors duration-200 w-full text-center">
                Edit
            </a>

            
            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="w-full">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded transition-colors duration-200 w-full">
                    Delete
                </button>
            </form>
        </div>

        
        <button class="absolute top-2 right-2 text-gray-400 hover:text-gray-600" onclick="closeModal('{{ $post->id }}')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
@endforeach

            </tbody>
        </table>
    </div>
</div>

@vite('resources/js/flashMessage.js') 
@vite('resources/js/modal.js') 
@endsection
