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
                    <div class="card-header">{{ __('Create Reservation') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('reservations.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="reservation_date">{{ __('Reservation Date') }}</label>
                                <input id="reservation_date" type="date" class="form-control" name="reservation_date" required>
                            </div>

                            <div class="form-group">
                                <label for="reservation_time">{{ __('Reservation Time') }}</label>
                                <input id="reservation_time" type="time" class="form-control" name="reservation_time" required>
                            </div>

                            <div class="form-group">
                                <label for="number_of_people">{{ __('Number of People') }}</label>
                                <input id="number_of_people" type="number" class="form-control" name="number_of_people" required>
                            </div>

                            <div class="form-group">
                                <label for="allergies">{{ __('Allergies') }}</label>
                                <textarea id="allergies" class="form-control" name="allergies"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="phone_number">{{ __('Phone Number') }}</label>
                                <input id="phone_number" type="text" class="form-control" name="phone_number" required>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                {{ __('Create Reservation') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>