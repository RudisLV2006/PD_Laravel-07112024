<x-app-layout>
    <a href="/posts">All posts</a>
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>
    <p>{{ $post->published_at }}</p>
</x-app-layout>
