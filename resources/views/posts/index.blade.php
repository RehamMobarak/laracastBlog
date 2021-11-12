<x-layout>
    {{-- @foreach ($posts as $post )
    <h1>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h1>
    <h4>
        By "<a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>" in <a
            href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </h4>
    <p>
        {{ $post->excerpt }}
    </p>
    <hr>
    @endforeach --}}

    @include('_posts-header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <!-- first post -->
        <x-post-featured-card :post="$posts[0]"/>
        <!-- -------------------------------------------------------------- -->
        <!-- second row of posts (2 posts)-->

        <div class="lg:grid lg:grid-cols-2">
            <!-- row of two cols/posts -->
            <x-post-cards-middle />
            <x-post-cards-middle />
        </div>

        <!-- -------------------------------------------------------------- -->
        <!-- third row of posts (3 posts)-->

        <div class="lg:grid lg:grid-cols-3">
            <!-- row of 3 cols/posts -->
            <x-post-card />
            <x-post-card />
            <x-post-card />
        </div>
    </main>

</x-layout>