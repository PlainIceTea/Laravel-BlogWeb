<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


        <article class="py-8 max-w-screen-md ">
            <h1 class="text-3xl mb-1 tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h1>
            <h2 class="text-base text-gray-300 ">{{ $post->user->name }} | 1 Desember 2024</h2>
            <p class="my-4 font-light">{{ $post['body'] }}</p>

            <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to post </a>
        </article>





</x-layout>
