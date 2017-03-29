<?php
namespace Corazzi\LaravelDebugSwitch;

class DebugState
{
    /**
     * DebugState constructor.
     *
     * @param int|string $state
     */
    public function __construct($state = null)
    {
        $state = is_null($state) ? $this->current() : $state;

        $this->switch($state);
    }

    /**
     * Get the current debug state
     *
     * @return bool
     */
    public function current() : bool
    {
        return config('app.debug');
    }

    /**
     * Turn the debug state on or off
     *
     * @param bool|string $state
     *
     * @return \Corazzi\LaravelDebugSwitch\DebugState
     */
    public function switch($state) : DebugState
    {
        config([
            'app.debug' => $state == 'on' || $state == 1
        ]);

        return $this;
    }

    /**
     * Toggle the debug config value
     *
     * @return \Corazzi\LaravelDebugSwitch\DebugState
     */
    public function toggle() : DebugState
    {
        return $this->switch(
            ! $this->current()
        );
    }
}