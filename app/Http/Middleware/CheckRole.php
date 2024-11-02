<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if (!Auth::check() || Auth::user()->Role !== $role) { // si pas authentifié ou rôle différent de admin
            // Rediriger ou retourner une réponse d'erreur si l'utilisateur n'a pas le rôle requis
            return redirect()->route('show_accueil')->withErrors(['message' => 'Accès non autorisé.']);
        }

        return $next($request);
    }
}
