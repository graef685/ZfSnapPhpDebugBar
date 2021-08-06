<?php

use DebugBar\StandardDebugBar;

if (!function_exists('debugbar_log')) {
    /**
     * @param string $message
     * @param string $type
     */
    function debugbar_log($message, $type = 'debug')
    {
        $standardDebugbar = StandardDebugBar::get_instance();

        $standardDebugbar["messages"]->addMessage($message, $type);
    }
}
