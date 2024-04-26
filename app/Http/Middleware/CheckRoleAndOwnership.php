<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Models\Reservation;
use App\Http\Kernel;

class CheckRoleAndOwnership
{
    public function handle(Request $request, Closure $next, ...$roles)
    {

        Log::info('Middleware wordt uitgevoerd.');

        $user = $request->user();
        
        // Controleren of de gebruiker is ingelogd
        if (! $user) {
            abort(401, 'Unauthorized.');
        }
        
        Log::info('deel 1 werkt.');

        // Controleren of de gebruiker de rol 'admin' heeft
        if ($user->hasRole('admin')) {
            return $next($request);
        } 

        Log::info('deel 2 werkt.');
        // Controleren of de gebruiker een van de toegestane rollen heeft
        if (! $user->hasAnyRole($roles)) {
            abort(403, 'Unauthorized.');
        }

        Log::info('deel 3 werkt.');

        if ($request->route('reservation') && $user->hasRole('gebruiker')) {
            if ($request->route('reservation')->user_id !== $user->id) {
                abort(403, 'Unauthorized.');
            }
        }

        Log::info('Middleware voltooid.');

        return $next($request);
    }
}