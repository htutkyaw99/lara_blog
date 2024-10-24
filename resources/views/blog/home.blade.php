@extends('blog.master')

@section('content')
    <div class="max-w-screen-xl min-h-[650px] mx-auto mt-3 flex flex-col">
        <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3 ">
            @foreach ($posts as $post)
                <div
                    class="mx-auto w-full max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col space-y-3">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $post->title }}
                        </h5>
                    </a>
                    <p class="font-normal text-gray-700 dark:text-gray-400">
                        Author : {{ $post->user->name }}
                    </p>
                    <a href="/{{ $post->id }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-fit">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="mt-auto">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
