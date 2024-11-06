<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome'); // Landing page
});

// Routes that require authentication
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        // Fetch posts for the authenticated user
        $posts = App\Models\Post::where('user_id', auth()->id())->get();
        return view('dashboard', compact('posts')); // Pass posts to the dashboard view
    })->name('dashboard');

    // Resource routes for posts
    Route::resource('posts', PostController::class);
});
