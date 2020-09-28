<?php

namespace App\ImpulsoLike\Localization;

use App\ImpulsoLike\General\GeneralConfig;

class LocalizationConfig extends GeneralConfig
{

    const CONFIG_FILE        = 'impulsolike_localization';
    const DEFAULT_CONFIG    = [
        'cookie'    => 'lang',
        'lifetime'    => 90,
        'langs'        => 'en,es',
    ];

}
