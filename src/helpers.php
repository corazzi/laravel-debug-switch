<?php

/**
 * Cache the debug state for the current session
 *
 * @param \Corazzi\LaravelDebugSwitch\DebugState $debugState
 * @return void
 */
function cacheDebugState(\Corazzi\LaravelDebugSwitch\DebugState $debugState)
{
    cache([
        debugSwitchCacheKey() => $debugState->current(),
    ], 30);
}

/**
 * Return the cache key with the current session ID
 *
 * @return string
 */
function debugSwitchCacheKey() : string
{
    return 'debug_switch_state_' . debugSwitchSessionKey();
}

/** Get or set a session key for the debug cache
 *
 * @return string
 */
function debugSwitchSessionKey() : string
{
    if (request()->session()->has('debug_switch_session_key')) {
        return request()->session()->get('debug_switch_session_key');
    }

    request()->session()->put('debug_switch_session_key', $key = str_random(60));

    return $key;
}