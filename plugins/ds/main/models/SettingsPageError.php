<?php

namespace DS\Main\Models;

/**
 * SettingsPage404 Model
 */
class SettingsPageError extends SettingsPages
{
    public $settingsCode = 'ds_main_settingsPageError';

    public $attachOne = [
        'icon' => 'System\Models\File'
    ];
}
