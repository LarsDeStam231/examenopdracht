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
                        <h1>Hapjes</h1>
                            <ul>
                            @foreach($subdranken as $subdrank)
                                <li>
                                    <form method="GET" action="{{ route('bestelling.items', ['subdrank' => $subdrank->id]) }}">
                                    <button type="submit">{{ $subdrank->subdranknaam }}</button>
                                    </form>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>