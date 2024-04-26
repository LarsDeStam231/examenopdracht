<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drank;
use App\Models\Subdrank;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class BestellingController extends Controller
{
        // Methode om de bestelpagina te tonen
        public function makeorder()
        {
            return view('bestelling.makeorder');
        }
    
        public function dranken()
    {
        // Haal alle subdranken op die bij de categorie "dranken" horen
        $subdranken = Subdrank::whereHas('drank', function ($query) {
            $query->where('drankkort', 'dr');
        })->get();

        // Geef de subdranken door aan de view
        return view('bestelling.dranken', compact('subdranken'));
    }

    public function hapjes()
    {
        // Haal alle subdranken op die bij de categorie "hapjes" horen
        $subdranken = Subdrank::whereHas('drank', function ($query) {
            $query->where('drankkort', 'ha');
        })->get();

        // Geef de subdranken door aan de view
        return view('bestelling.hapjes', compact('subdranken'));
    }

    public function showItems(Subdrank $subdrank)
    {
        $items = $subdrank->items;
        $selectedItems = [];
        return view('bestelling.items', ['items' => $items], ['selectedItems' => $selectedItems]);
    }

    public function addToOrder(Request $request, $itemId)
    {
        // Logica om het geselecteerde item aan de bestelling toe te voegen en terug te keren naar de startpagina voor bestellen met een succesmelding
    }

    public function createOrder()
    {
        // Logica om de bestelling aan te maken en alle opgeslagen items in de database te zetten
    }

    public function store(Request $request)
    {
        $user_id = Auth::id();

        $order = new Order();

        // Wijs de waarden toe aan de eigenschappen van het Order model
        $order->user_id = $request->user_id;
        $order->reservation_id = $request->reservation_id;
        $order->selected_items = $request->selected_items;

        // Sla het Order model op
        $order->save();

        return redirect()->route('bestelling.makeorder')->with('je bestelling is aangemaakt! voeg een nieuwe bestelling toe of ga terug naar het overzicht.');
    }
}
