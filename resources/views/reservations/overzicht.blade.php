<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservation Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold mb-4">Reservations</h1>
                    
                    @if(auth()->user()->role === 'admin')
                        @foreach($reservations as $reservation)
                            <li>
                               <ul>
                                    <li><strong>Naam:</strong> {{ $reservation->user->name }}</li>
                                    <li><strong>Datum van reservering:</strong> {{ $reservation->reservation_date }}</li>
                                    <li><strong>Tijd van reservering:</strong> {{ $reservation->reservation_time }}</li>
                                    <li><strong>Aantal personen:</strong> {{ $reservation->number_of_people }}</li>
                                    <li><strong>Allergieën:</strong> {{ $reservation->allergies }}</li>
                                    <li><strong>Telefoonnummer:</strong> {{ $reservation->phone_number }}</li>                                   
                                </ul>
                                    <form method="GET" action="{{ route('bestelling.makeorder') }}">
                                        <button type="submit" class="btn btn-primary">Plaats een bestelling</button>
                                    </form>
                            </li>
                        @endforeach
                    @else
                        @foreach($reservations as $reservation)
                            <li>
                                <ul>
                                    <li><strong>Naam:</strong> {{ $reservation->user->name }}</li>
                                    <li><strong>Datum van reservering:</strong> {{ $reservation->reservation_date }}</li>
                                    <li><strong>Tijd van reservering:</strong> {{ $reservation->reservation_time }}</li>
                                    <li><strong>Aantal personen:</strong> {{ $reservation->number_of_people }}</li>
                                    <li><strong>Allergieën:</strong> {{ $reservation->allergies }}</li>
                                    <li><strong>Telefoonnummer:</strong> {{ $reservation->phone_number }}</li>
                                </ul>
                            </li>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
