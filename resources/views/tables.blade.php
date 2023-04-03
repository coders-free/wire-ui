<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tables
        </h2>
    </x-slot>

    <x-container class="py-12">

        @livewire('user-table')

    </x-container>

</x-app-layout>