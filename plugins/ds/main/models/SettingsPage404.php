<?php

namespace DS\Main\Models;

/**
 * SettingsPage404 Model
 */
class SettingsPage404 extends SettingsPages
{
    public $settingsCode = 'ds_main_settingsPage404';

    public $attachOne = [
        'icon' => 'System\Models\File'
    ];
}
