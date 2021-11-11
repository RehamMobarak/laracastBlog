<x-layout>
   <h1>{{ $post->title }}</h1>
   <small>{{ $post->user->name }}</small>
   <p>{{ $post->body }}</p>
</x-layout>