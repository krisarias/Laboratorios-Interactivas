@extends('layouts.app')

@section('content')
<div class="container mx-auto " style="font-family: 'Times New Roman', serif;">
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-3xl font-bold mb-4 mr-4">❖Current articles:</h1>
        <div class="flex items-center space-x-4 mb-2">
            <a href="{{ route('posts.create') }}" class="bg-lime-700 hover:bg-lime-800 text-white py-2 px-4 rounded inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil mr-2"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                Publish article
            </a>

            <a href="{{ url('/api/posts/all') }}" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded inline-flex items-center">
                View API with all posts
            </a>

            <a href="{{ url('/api/posts/2') }}" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded inline-flex items-center">
                View API with post id = 2
            </a>
        </div>



    </div>
    @foreach ($posts as $post)
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-screen-xl mx-auto">
            <h2 class="text-xl font-bold">{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <div class="flex justify-end">
                <a href="{{ route('posts.edit', $post) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white  py-1 px-1 rounded mt-2 inline-block">Edit</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline-block ml-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-rose-500 hover:bg-rose-600 text-white  py-1 px-1 rounded mt-2">Delete</button>
                </form>
                <a href="{{ route('posts.comments', $post) }}" class="bg-lime-700 hover:bg-lime-800 text-white  py-1 px-2 rounded mt-2 inline-block ml-2">Comments</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
