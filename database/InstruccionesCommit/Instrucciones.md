

<!-- title -->
<h1 align="center">Curso - Múltiples apps realtime con Laravel</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Creando una API que funcione en tiempo real__
<!-- end commit name -->

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

<!-- official documentation -->
[Documentación oficial | `Laravel 6.*` ](https://laravel.com/docs/6.x)
<!-- end official documentation -->

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

<!-- commit instructions -->
#### Instrucciones Commit
- Creación del controlador
  > php artisan make:controller Api\\UserController -r -m User
- Creación del evento
  > php artisan make:event UserCreated
- Creación del evento
  > php artisan make:event UserUpdated
- Creación del evento
  > php artisan make:event UserDeleted
<!-- end commit instructions -->

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

<!-- notes -->
#### Notas:
<!-- end notes -->

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

<!-- information -->
#### Información:
- Más información en `routes\api.php`
- Más información en `app\Events\UserCreated.php`
- Más información en `app\Events\UserUpdated.php`
- Más información en `app\Events\UserDeleted.php`
<!-- end information -->