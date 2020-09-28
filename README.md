# Localization
### by ImpulsoLike

## Requisitos
1. PHP 7.x
1. Laravel 7.x
2. Base de ImpulsoLike 2.x disponible en https://github.com/impulsolike/ImpulsoLike


## Instalación

1. Copia el directorio `Localization` y su contenido dentro de la ruta `app/ImpulsoLike/`
2. Agrega `\App\ImpulsoLike\Localization\LocalizationMiddleware::class,` en el array `$middlewareGroups['web']` de tu archivo `App/Http/Kernel.php`
3. Agrega `App\ImpulsoLike\Localization\LocalizationProvider::class,` en el array `providers` de tu archivo de configuración `config/app.php`
4. Agrega `'Localization' => App\ImpulsoLike\Localization\LocalizationFacade::class,` en el array `aliases` de tu archivo de configuración `config/app.php`
5. Copia el archivo `config/impulsolike_localization.php` dentro de la ruta `config/`

## Implementación
1. Crea una ruta para cargar la vista que se encuentra en el directorio `resources/views/localization.blade.php`

