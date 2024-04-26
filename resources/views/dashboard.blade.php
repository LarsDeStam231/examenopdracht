<x-app-layout> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Hallo gebruiker") }}
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Link naar de reservatiepagina -->
                    <button class="category-button" onclick="window.location='{{ route('reservations.create') }}'">Reserveren</button><br>
                    <button class="category-button" onclick="window.location='{{ route('reservations.overzicht') }}'">overzicht</button>
                    <br>
                    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
