<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Menukaart') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="container">
                            <h1>Maak een keuze:</h1>
                            <div class="button-container">
                                <button class="category-button" onclick="window.location='{{ route('bestelling.dranken') }}'">Dranken</button>
                                <button class="category-button" onclick="window.location='{{ route('bestelling.hapjes') }}'">Hapjes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>