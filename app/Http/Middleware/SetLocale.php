<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Http;
use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private $locales = ['de', 'en'];
    public function handle(Request $request, Closure $next, $locale)
    {
        if (array_search($locale, $this->locales) === false) {
            return redirect('/');
        }

        \App::setLocale($locale);

        return $next($request);
    }
}
