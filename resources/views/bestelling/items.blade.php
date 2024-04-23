<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Maak je Reservering') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('bestelling maken') }}</div>
                    <div class="card-body">
                        <div class="container">
                        <h1>Items</h1>
                            <div class="row">
                                @foreach($items as $item)
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                            <div class="item-container">
                                            <h5 class="card-title">{{ $item->itemnaam }}</h5>
                                                <p class="card-text">Prijs: {{ $item->itemprijs }}</p>
                                                <!-- Voeg hier andere itemgegevens toe -->
                                            </div>
                                                
                                                <!-- Andere details van het item, indien nodig -->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <form method="POST" action="{{ route('bestelling.store') }}">
                                    @csrf
                                    <!-- Voeg hier de geselecteerde items toe als verborgen velden -->
                                    <button type="submit">Bestelling Plaatsen</button>
                                </form>
                            </div>               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>