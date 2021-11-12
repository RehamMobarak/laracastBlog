{{-- Kind of like how we're explicit with what variables we pass to a view in Laravel. Props are just data that we want
to pass through to that component so that we can use it within the component. So we can read/use it whenever we like
within that component. --}}
@props(['post'])

<article
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <!-- flex (is added to equally distribute the 2 main divs (img | post body)) -->
    <div class="py-6 px-5 lg:flex">
        <!-- image -->
        <div class="flex-1 lg:mr-8">
            <img src="./images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <!-- text -->
        <!-- flex  flex-col (is added to align the footer to end on the same line with img on the left) -->
        <div class="flex-1 flex flex-col justify-between">
            <!-- tags buttons above the title -->

            <header class="mt-8 lg:mt-0">
                <!-- space-x-2 (set a space between items -btns- on the line) -->

                <div class="space-x-2">
                    <a href="/categories/{{ $post->category->slug }} "
                        class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                        style="font-size: 10px">{{ $post->category->name }}</a>
                </div>
                <!-- head title & date -->

                <div class="mt-4">
                    <!-- head title -->

                    <h1 class="text-3xl">
                        {{ $post->title }}
                    </h1>

                    <!-- date -->

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <!-- content -->

            <div class="text-sm mt-2">
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>

            <!-- lary img and read more -->

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="./images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <small> <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                            </small>
                        </h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </div>

                <!-- read more -->

                <div class="hidden lg:block">
                    <a href="/posts/{{ $post->slug }}"
                        class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">Read
                        More</a>
                </div>
            </footer>
        </div>
    </div>
</article>