<?php

namespace DS\Main\Models;

use Model;

/**
 * Settings404 Model
 */
class SettingsPages extends Model
{
    const SETTINGS_CATEGORY_PAGES = 'Pages';

    /**
     * @var array Behaviors implemented by this model.
     */
    public $implement = [
        \System\Behaviors\SettingsModel::class
    ];

    public $settingsFields = 'fields.yaml';
}
