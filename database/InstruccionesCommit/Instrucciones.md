

<!-- title -->
<h1 align="center">Curso - Múltiples apps realtime con Laravel</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Creando tu primer sistema de notificaciones en tiempo real__
<!-- end commit name -->

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

<!-- official documentation -->
[Documentación oficial | `Laravel 6.*` ](https://laravel.com/docs/6.x)
<!-- end official documentation -->

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

<!-- commit instructions -->
#### Instrucciones Commit
- Creación del evento
  > php artisan make:event UserSessionChanged
- Creación del evento
  > php artisan make:listener BroadcastUserLoginNotification
- Creación del evento
  > php artisan make:listener BroadcastUserLogoutNotification
- Compilar archivos de Javascript después de hacer todos los cambios
  > npm run dev
<!-- end commit instructions -->

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

<!-- notes -->
#### Notas:
<!-- end notes -->

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

<!-- information -->
#### Información:
- Más información en `app\Events\UserSessionChanged.php`
- Más información en `app\Listeners\BroadcastUserLoginNotification.php`
- Más información en `app\Listeners\BroadcastUserLogoutNotification.php`
- Más información en `app\Providers\EventServiceProvider.php`
- Más información en `resources\js\app.js`
- Más información en `routes\channels.php`
<!-- end information -->