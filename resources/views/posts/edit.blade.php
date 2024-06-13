@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-4">Edit Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" 
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content</label>
            
            <textarea name="content" id="content" class="shadow appearance-none border rounded w-full py-2 px-3
             text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('content', $post->content) }}</textarea>
        </div>
        <a href="{{ route('posts.index') }}" class="bg-lime-600 hover:bg-lime-800 text-white font-light py-2 px-4 rounded mr-4">
            Go back
        </a>
        <button type="submit" class="bg-lime-700 hover:bg-lime-800 text-white font-bold py-2 px-4 rounded">
            Update Post
        </button>
    </form>
</div>
@endsection

