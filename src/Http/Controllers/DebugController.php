<?php
namespace Corazzi\LaravelDebugSwitch\Http\Controllers;

use Carbon\Carbon;
use Corazzi\LaravelDebugSwitch\DebugState;
use Illuminate\Routing\Controller;

class DebugController extends Controller
{
    public function toggle()
    {
        $debugState = new DebugState;

        // Toggle the debug state
        //$debugState->toggle();

        // Store it in the cache so we can ensure it's still set on subsequent requests
        cacheDebugState($debugState);

        return [
            'debug' => $debugState->current(),
        ];
    }
}