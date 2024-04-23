<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drank;
use App\Models\Subdrank;
use App\Models\Item;

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
        return view('bestelling.items', ['items' => $items]);
    }

    public function addToOrder(Request $request, $itemId)
    {
        // Logica om het geselecteerde item aan de bestelling toe te voegen en terug te keren naar de startpagina voor bestellen met een succesmelding
    }

    public function createOrder()
    {
        // Logica om de bestelling aan te maken en alle opgeslagen items in de database te zetten
    }
}
