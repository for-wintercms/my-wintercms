<?php

namespace DS\Main\Models;

/**
 * SettingsPageError Model
 */
class SettingsPageError extends SettingsPages
{
    public $settingsCode = 'ds_main_settingsPageError';

    public $attachOne = [
        'icon' => 'System\Models\File'
    ];
}
