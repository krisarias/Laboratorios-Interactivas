@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Edit Comment</h1>

    <form method="POST" action="{{ route('comments.update', ['comment' => $comment->id]) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content</label>
            <textarea id="content" name="content" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ $comment->content }}</textarea>
        </div>

        <button type="submit" class="bg-lime-700 hover:bg-lime-800 text-white font-bold py-2 px-4 rounded">Update Comment</button>
    </form>
</div>
@endsection