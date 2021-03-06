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
    {{-- update All link to exclude filters --}}
    <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}" :active='request()->routeIs("home")'> All </x-dropdown-item>

    @foreach ($categories as $category)

    {{-- http_build_query : ['name'=>'joe'] :: name=joe --}}
    {{-- we used except('category') so we can get all other filters queries and don't duplicate category request --}}
    {{-- we added 'page' to exception because we don't ask for filtering in a certain page--}}

    <x-dropdown-item name="category" href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
        :active='request()->is("categories/.{$category->slug} ")'>
        {{ ucwords($category->name) }}
    </x-dropdown-item>
    @endforeach

</x-dropdown>