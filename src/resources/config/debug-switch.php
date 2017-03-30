<?php
return [
    'session'             => [
        /**
         * How long the session should last in minutes until the debug value is reverted
         */
        'lifetime'   => 5,

        /**
         * If keep_alive is true, then the session timeout will refresh after every request
         * and only expire
         */
        'keep_alive' => true,
    ],

    /**
     * Reload the current request after toggling debugging using the switch icon
     */
    'reload_after_toggle' => false,

    /**
     * If you wish to style the debug switch icon yourself, you can assign it a custom class
     */
    'icon'                => [
        'class' => 'debug-switcher-icon',
    ],

    /**
     * If you want to set up some middleware to protect access to toggling the debug state,
     * which you really should do, define the middleware here. In order for the package
     * to work properly you MUST use the EncryptCookies and StartSession middlewares
     */
    'middleware'          => [
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Session\Middleware\StartSession::class,
    ],
];