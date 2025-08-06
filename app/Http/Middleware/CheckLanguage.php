<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //tempat untuk mengecek bahasa yang dipilih
        $locale = session()->get('locale', config('app.locale'));
        //dd($locale); // Debugging line to check the locale
        app()->setLocale($locale);

        return $next($request);
    }
}
