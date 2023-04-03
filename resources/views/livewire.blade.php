<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Livewire
        </h2>
    </x-slot>

    <x-container class="py-12">

        <x-card>


            @livewire('forms')

        </x-card>

    </x-container>

</x-app-layout>