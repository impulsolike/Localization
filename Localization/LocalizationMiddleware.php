<?php

namespace App\ImpulsoLike\Localization;

use Closure;

class LocalizationMiddleware extends Localization
{

    public function handle($request, Closure $next)
    {

        $this->setLocale($request);

        return $next($request);

    }

}
