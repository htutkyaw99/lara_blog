@extends('blog.master')

@section('content')
    <div class="max-w-screen-xl mx-auto mt-3">
        <a href="/"
            class="mb-3 inline-flex items-center px-3 py-2 text-sm font-medium 
            hover:text-blue-500
            text-center text-black outline-none border-b-2 border-b-black w-fit">
            Back
        </a>
        <div
            class="w-full max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ $post->title }}
                </h5>
            </a>
            <p class="mt-3 font-normal text-gray-700 dark:text-gray-400">
                {{ $post->content }}
            </p>
        </div>
        <div class="mt-3 flex gap-3">
            <a href="/{{ $post->id }}/edit"
                class="mb-3 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-fit">
                Edit
            </a>
            <form action="/{{ $post->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="mb-3 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white
                    bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300
                    dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-yellow-800 w-fit">
                    Delete
                </button>
            </form>
        </div>
    </div>
@endsection
