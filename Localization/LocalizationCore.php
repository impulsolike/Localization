<?php

namespace App\ImpulsoLike\Localization;

use Illuminate\Support\Facades\Request;

trait LocalizationCore
{

    public static function url($lang = false)
    {
        $url = Request::url();
        $fullUrl = Request::fullUrl();
        $cookie = static::config('cookie');

        if (preg_match('/' . $cookie . '(=[a-z]+)?/i',$fullUrl))

            return preg_replace('/' . $cookie . '(=[a-z]+)?/i',$cookie . '=' . $lang,$fullUrl);

        else if ($url == $fullUrl)

            return $url . '?' . $cookie . '=' . $lang;

        else

            return $fullUrl . '&' . $cookie . '=' . $lang;

    }

    public static function is($lang = false)
    {
        return ($lang == config('app.locale')) ? true : false;
    }

    public static function get()
    {
        return str_replace('_', '-',config('app.locale'));
    }

    public static function langs()
    {
        $langs = static::config('langs');

        return $langs ? explode(',',$langs) : [];
    }

    public static function validLang($lang = false)
    {
        return $lang ? in_array($lang,static::langs()) : false;
    }

}
