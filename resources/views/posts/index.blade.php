@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold">My Posts</h1>
    <a href="{{ route('posts.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Create New Post</a>
    <table class="min-w-full bg-white border border-gray-300 mt-4">
        <thead>
            <tr>
                <th class="border-b py-2">Title</th>
                <th class="border-b py-2">Actions</th>
                <th class="border-b py-2">Date</th>
                <th class="border-b py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td class="border-b py-2">{{ $post->title }}</td>
                <td class="border-b py-2">{{ $post->content }}</td>
                <td class="border-b py-2">{{ $post->created_at }}</td>
                <td class="border-b py-2">
                    <a href="{{ route('posts.edit', $post) }}" class="text-blue-500">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
