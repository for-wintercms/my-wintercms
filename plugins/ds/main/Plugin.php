<?php

namespace DS\Main;

use Backend;
use DS\Main\Models\SettingsPages;
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

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
        // $this->registerConsoleCommand('ds:addadmin', 'DS\Main\Console\AddAdmin');
    }

    public function registerPermissions()
    {
        $categoryPages = 'Pages';

        return [
            'ds.main.access_pages' => [
                'label' => 'Manage the all pages',
                'tab' => $categoryPages
            ],
            'ds.main.access_page_404' => [
                'label' => 'Manage the 404 page',
                'tab' => $categoryPages
            ],
            'ds.main.access_page_error' => [
                'label' => 'Manage the error page',
                'tab' => $categoryPages
            ]
        ];
    }

    public function registerSettings()
    {
        return [
            'settings_page_404' => [
                'label'       => '404',
                'description' => '404 page.',
                'category'    => SettingsPages::SETTINGS_CATEGORY_PAGES,
                'icon'        => 'icon-times-rectangle-o',
                'class'       => 'DS\Main\Models\SettingsPage404',
                'order'       => 500,
                'keywords'    => 'settings, pages, 404',
                'permissions' => ['ds.main.access_pages', 'ds.main.access_page_404'],
            ],
            'settings_page_error' => [
                'label'       => 'Error',
                'description' => 'Error page.',
                'category'    => SettingsPages::SETTINGS_CATEGORY_PAGES,
                'icon'        => 'icon-warning',
                'class'       => 'DS\Main\Models\SettingsPageError',
                'order'       => 501,
                'keywords'    => 'settings, pages, error',
                'permissions' => ['ds.main.access_pages', 'ds.main.access_page_error'],
            ]
        ];
    }
}
