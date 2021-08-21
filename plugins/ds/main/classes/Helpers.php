<?php

namespace DS\Main\Classes;

use App;
use Session;

/**
 * Provides helper base properties and methods.
 *
 * @package wbry\base
 * @author Diamond Systems
 */
class Helpers
{
    /**
     * List all plugins Models
     * @return array
     */
    public static function listGlobalModels()
    {
        return SearchClasses::instance()->listGlobalModels();
    }

    /**
     * List all plugins Controllers
     * @return array
     */
    public static function listGlobalControllers()
    {
        return SearchClasses::instance()->listGlobalControllers();
    }

    /**
     * Set automatic locale
     *
     * Useful in Ajax requests when locale is not yet defined.
     */
    public static function setLocale()
    {
        $appLocal = App::getLocale();

        if (Session::has('locale'))
            $locale = Session::get('locale');
        else
        {
            $locale = (string)request()->getPreferredLanguage();
            if ($position = strpos($locale, '_'))
                $locale = substr($locale, 0, $position);

            if ($appLocal === $locale)
                return;
            elseif (! preg_match("/^[a-z]{2,}$/i", $locale))
            {
                if (class_exists('\Locale'))
                    $locale = \Locale::getPrimaryLanguage(\Locale::getDefault());
                else
                    return;

                if ($appLocal === $locale)
                    return;
            }

            Session::put('locale', $locale);
        }

        if ($appLocal !== $locale)
            App::setLocale($locale);
    }

    public static function checkMail(string $emil)
    {
        return preg_match("/^(.+?)@(.+?)\.(.+?)$/i", $emil);
    }
}