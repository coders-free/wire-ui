<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-container>
            
            @php
                $type = 'error';
            @endphp


            <x-alert :type="$type">

                <x-slot name="title" >
                    Prueba
                </x-slot>

                Something seriously bad happened.

            </x-alert>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam beatae voluptatem aspernatur inventore, asperiores sunt quia doloribus maxime saepe voluptas aperiam, vel dolorem. Ullam numquam quam perspiciatis nihil harum quis.</p>

        </x-container>
    </div>
</x-app-layout>
