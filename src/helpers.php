<?php

/**
 * Cache the debug state for the current session
 *
 * @param \Corazzi\LaravelDebugSwitch\DebugState $debugState
 */
function cacheDebugState(\Corazzi\LaravelDebugSwitch\DebugState $debugState)
{
    cache([
        debugSwitchCacheKey() => $debugState->current(),
    ], config('debug-switch.lifetime'));
}

/**
 * Return the cache key with the current session ID
 *
 * @return string
 */
function debugSwitchCacheKey() : string
{
    return 'debug_switch_state_' . session()->getId();
}