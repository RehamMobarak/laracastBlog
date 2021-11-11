<x-layout>
    @foreach ($posts as $post )
    <h1>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h1>
    <h4>
    By "{{ $post->author->name }}" in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </h4>
    <p>
        {{ $post->excerpt }}
    </p>
    <hr>
    @endforeach
</x-layout>