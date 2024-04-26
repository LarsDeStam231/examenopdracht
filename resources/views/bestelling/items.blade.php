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
                        <h1>Items</h1>
                            <div class="row">
                                @foreach($items as $item)
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                            <div class="item-container" data-item-id="{{ $item->id }}">
                                            <h5 class="card-title">{{ $item->itemnaam }}</h5>
                                                <p class="card-text">Prijs: {{ $item->itemprijs }}</p>
                                                <!-- Voeg hier andere itemgegevens toe -->
                                            </div>
                                                
                                                <!-- Andere details van het item, indien nodig -->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <script>
                                    document.querySelectorAll('.item-container').forEach(item => {
                                        item.addEventListener('click', () => {
                                            // Voeg hier de logica toe om het item te selecteren
                                            item.classList.toggle('selected'); // Voeg bijvoorbeeld een 'selected' klasse toe
                                            if (item.classList.contains('selected')) {
                                                // Voer hier de logica uit voor wanneer het item is geselecteerd
                                                console.log('Item is geselecteerd:', item.dataset.itemId);
                                            } else {
                                                // Voer hier de logica uit voor wanneer het item niet is geselecteerd
                                                console.log('Item is niet geselecteerd:', item.dataset.itemId);
                                            }
                                        });
                                    });
                                </script>
                                <form method="POST" action="{{ route('bestelling.store') }}">
                                    @csrf
                                        @foreach($selectedItems as $item)
                                            <input type="hidden" name="selected_items[]" value="{{ $item }}">
                                        @endforeach
                                    <button class="category-button" type="submit">Bestelling Plaatsen</button>
                                </form>
                            </div>               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>