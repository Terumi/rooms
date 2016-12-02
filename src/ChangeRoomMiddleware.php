<?php

namespace ffy\rooms;

use Closure;

class ChangeRoomMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        echo "asdasdasdasdasd";
        return $next($request);
    }
}
