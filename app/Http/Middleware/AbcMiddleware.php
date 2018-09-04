<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class AbcMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   Log::info("log entriess:  ");
        return $next($request);
    }
}
