<?php

Route::prefix('debug-switch')
    ->middleware(config('debug-switch.middleware'))
    ->group(function ($router) {

    $router->any('toggle', 'Corazzi\LaravelDebugSwitch\Http\Controllers\DebugController@toggle');

});