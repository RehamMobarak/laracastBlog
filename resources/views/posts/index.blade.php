<x-layout>
    @foreach ($posts as $post )
    <h1>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h1>
    <h4>
    By "{{ $post->author->name }}" in ({{ $post->category->name }})
    </h4>
    <p>
        {{ $post->excerpt }}
    </p>
    <hr>
    @endforeach
</x-layout>