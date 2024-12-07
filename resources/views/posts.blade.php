<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-200">
            <h1 class="text-3xl mb-1 tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h1>
            <h2 class="text-base text-gray-300 "> <a href="/authors/{{ $post->user->id }}" class="hover:underline">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->id }}" class="hover:underline">{{ $post->category->category }}</a> | {{ $post['created_at']->format('d F Y') }}</h2>
            <p class="my-4 font-light">{{ Str::limit($post['body'],150) }}</p>

            <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach




</x-layout>
