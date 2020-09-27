<?php

namespace App\ImpulsoLike\Localization;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class Localization extends LocalizationConfig
{

    use LocalizationCore;

    public function setLocale($request)
    {

        /* Establecemos valores de config */
        $cookie = static::config('cookie');

        /* Detectamos si intenta cambiar idioma */
        $lang = ($request->method() == 'GET' && $request->filled($cookie))
                ? $request->only($cookie)[$cookie]
                : false;

        if (!static::validLang($lang)) $lang = false;

        if ($lang) {

            /* Si intento cambiar idioma guardamos el nuevo idioma */
            $minutes = static::config('lifetime') *  1440;
            Cookie::queue(Cookie::make($cookie,$lang,$minutes));

        } else {

            /* Buscamos el idioma en la Cookie */
            $lang = Cookie::get($cookie,config('app.locale'));
            if (!static::validLang($lang)) $lang = config('app.locale');

        }

        /* Establecemos el idioma en la App */
        App::setLocale($lang);

    }

}
