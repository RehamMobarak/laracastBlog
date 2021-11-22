{{-- <div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div> --}}
<x-dropdown>
    {{-- button trigger --}}
    <x-slot name="trigger">
        <button class=" py-2 pl-3 pr-9 text-sm font-semibold flex lg:inline-flex w-full lg:w-32 text-left">

            {{ isset($currentCategory ) ? ucwords( $currentCategory->name) : "Categories"}}

            {{-- arrow icon --}}
            <x-icon name="down-arrow" class=" absolute pointer-events-none" style="right: 12px;" />
        </button>
    </x-slot>

    {{-- links --}}
    <x-dropdown-item href="/" :active='request()->routeIs("home")'> All </x-dropdown-item>

    @foreach ($categories as $category)
    <x-dropdown-item name="category" href="/?category={{ $category->slug }}"
        :active='request()->is("categories/.{$category->slug} ")'>
        {{ ucwords($category->name) }}
    </x-dropdown-item>
    @endforeach

</x-dropdown>