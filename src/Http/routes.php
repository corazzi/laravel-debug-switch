<?php

Route::prefix('debug-switch')->group(function ($router) {
    $router->any('toggle', 'Corazzi\LaravelDebugSwitch\Http\Controllers\DebugController@toggle');
});