<?php

namespace App\ImpulsoLike\Localization;

use App\ImpulsoLike\GlobalConfig;

class LocalizationConfig extends GlobalConfig
{

    const CONFIG_FILE        = 'impulsolike_localization';
    const DEFAULT_CONFIG    = [
        'cookie'    => 'lang',
        'lifetime'    => 90,
        'langs'        => 'en,es',
    ];

}
