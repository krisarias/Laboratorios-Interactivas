@extends('layouts.app')

@section('content')

<div class="container mx-auto m-4">
    <h1 class="text-3xl font-bold mb-4">Comments from this post</h1>
    
    <div class="flex flex-wrap -mx-2">
    @foreach ($comments as $comment)
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 px-2 mb-4">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <p class="text-gray-800">{{ $comment->content }}</p>
                <div class="flex justify-end mt-4">
                    <a href="{{ route('comments.edit', $comment) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-2 rounded mr-2">Edit</a>
                    <form action="{{ route('comments.destroy', $comment) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete it?')" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-rose-500 hover:bg-rose-600 text-white  py-1 px-2 rounded">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8">

    
    @if ($errors->any())
        <div class="text-black">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <input type="hidden" name="post_id" value="{{ request()->route('post') }}">
        <div class="mb-4">
            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Comment:</label>
            <textarea name="content" id="content" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-lime-700 hover:bg-lime-800 text-white py-1 px-2 rounded">Add Comment</button>
        </div>
        <a href="{{ route('posts.index') }}" class="bg-lime-600 hover:bg-lime-800 text-white font-light py-2 px-4 rounded mr-4">
        Go back
        </a>
    </form>
    
</div>

    
</div>

@endsection
