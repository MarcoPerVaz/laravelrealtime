

<!-- title -->
<h1 align="center">Curso - Múltiples apps realtime con Laravel</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Creando un juego en tiempo real__
<!-- end commit name -->

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

<!-- official documentation -->
[Documentación oficial | `Laravel 6.*` ](https://laravel.com/docs/6.x)
<!-- end official documentation -->

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

<!-- commit instructions -->
#### Instrucciones Commit
- Creación del evento
  > php artisan make:event RemainingTimeChanged
- Creación del evento
  > php artisan make:event WinnerNumberGenerated
-Creación del comando
  > php artisan make:command GameExecutor
<!-- end commit instructions -->

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

<!-- notes -->
#### Notas:
<!-- end notes -->

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

<!-- information -->
#### Información:
- Más información en `app\Events\RemainingTimeChanged.php`
- Más información en `app\Events\WinnerNumberGenerated.php`
- Más información en `app\Console\Commands\GameExecutor.php`
<!-- end information -->