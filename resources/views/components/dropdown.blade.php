@props(['trigger'])
<div x-data="{show:false}">
    {{-- trigger --}}
    <div @click='show = !show' @click.away="show = false">
        {{ $trigger }}
    </div>

    {{-- links --}}
    <div x-show="show" class="absolute py-2 bg-gray-100 mt-2 rounded-xl w-full z-50" style="display: none">

        {{ $slot }}

    </div>

</div>