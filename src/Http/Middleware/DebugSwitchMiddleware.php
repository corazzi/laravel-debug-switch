<?php
namespace Corazzi\LaravelDebugSwitch\Http\Middleware;

use Closure;
use Corazzi\LaravelDebugSwitch\DebugState;

class DebugSwitchMiddleware
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
        if (cache()->has(debugSwitchCacheKey())) {
            config([
                'app.debug' => cache()->get(
                    debugSwitchCacheKey()
                )
            ]);
        }

        return $next($request);
    }
}