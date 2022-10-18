<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if (tenant('id') == 'aqua')
                AQUA Consulting S.r.L.
            @else
                Nilos S.r.L.
            @endif
            {{-- {{ __('Dashboard') }} --}}
        </h2>
    </x-slot>

</x-app-layout>
