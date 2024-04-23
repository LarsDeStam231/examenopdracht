<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class ReservationController extends Controller
{
    // Methode om het formulier voor het maken van een reservering weer te geven
    public function create()
    {
        return view('reservations.create');
    }

    // Methode om een reservering op te slaan
    public function store(Request $request)
    {
        // Verkrijg de gebruikers-ID van de ingelogde gebruiker
        $userId = Auth::id();

        // Maak de reservering en voeg de gebruikers-ID toe
        $reservation = new Reservation();
        $reservation->user_id = $userId;
        $reservation->reservation_date = $request->reservation_date;
        $reservation->reservation_time = $request->reservation_time;
        $reservation->reservation_date = $request->reservation_date;
        $reservation->reservation_time = $request->reservation_time;
        $reservation->number_of_people = $request->number_of_people;
        $reservation->allergies = $request->allergies;
        $reservation->phone_number = $request->phone_number;
        // Voeg andere reserveringsgegevens toe
        $reservation->save();

        // Rest van de logica voor het maken van een reservering
        return redirect()->route('dashboard')->with('success',  'Je reservering is geslaagd! Bekijk hem in je overzicht.');
    }

    

    public function overzicht()
{
    $user = auth()->user();
    if ($user->rolename === 'admin') {
        $reservations = Reservation::all();
    } else {
        $reservations = $user->reservations;
    }

    return view('reservations.overzicht', compact('reservations'));
}
}
