@extends('blog.master')

@section('content')
    <div
        class="w-full mx-auto mt-3 max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" action="/create" method="POST">
            @csrf
            <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Create Post</h5>
            <a href="/"
                class="mb-3 mx-auto inline-flex items-center px-3 py-2 text-sm font-medium 
        hover:text-blue-500
        text-center text-white outline-none border-b-2 border-b-white w-fit">
                Back
            </a>
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Title</label>
                <input type="text" name="title" id="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Sample Blog" required />
                @error('title')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="Content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Content
                </label>
                <textarea id="Content" rows="4" name="content"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your contents here..."></textarea>
                @error('content')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex items-start">
                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
                </button>
        </form>
    </div>
@endsection
