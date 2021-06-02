<?php

namespace DS\Main;

use Backend;
use System\Classes\PluginBase;

/**
 * Main Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Main',
            'description' => 'Plugin for site settings',
            'author'      => 'DS',
            'icon'        => 'icon-leaf'
        ];
    }
}
