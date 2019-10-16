<?php

namespace App\Http\Middleware;

use Closure;

class Checkstatus
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
        echo "testing Middleware";
        if($request->status==0)
        {
            return redirect("home");
        }
        return $next($request);
    }
}
