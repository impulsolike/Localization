<?php

namespace App\ImpulsoLike\Localization;

use Illuminate\Support\ServiceProvider;

class LocalizationProvider extends ServiceProvider
{

    public function register()
    {
        require_once app_path('/ImpulsoLike/Localization/LocalizationFacade.php');
    }

}
