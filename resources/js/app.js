
require('./bootstrap');

/* 
  Echo.Channel('notification');
    Echo es una instancia de Laravel Echo
    Channel es que es un canal público
    'notification' es el nombre del evento
      Se declara en app\Events\UserSessionChanged.php
    listen('UserSessionChanged') Escucha el evento app\Events\UserSessionChanged.php
      No es necesario importar nada ya que laravel asume que viene de namespace App\Events;
    (e) es el evento que se recibe
    (e) => {} Función anónima de tipo flecha o arrow usado en Javascript
      Obtiene todo lo que sea público en el evento app\Events\UserSessionChanged.php
        public $message;
        public $type;
  const notificationElement = document.getElementById('notification');
    Almacena en una constante lo que obtiene del elemento <div id="notification" class="alert mx-3 invisible">
    desde la vista resources\views\layouts\app.blade.php
  notificationElement.innerText = e.message;
    Muestra el mensaje en el elemento html
  notificationElement.classList.remove('invisible');
    Remueve la clase invisible del elemento html <div id="notification" class="alert mx-3 invisible">
  notificationElement.classList.add('alert-' + e.type);
    Agrega la clase al elemento html <div id="notification" class="alert mx-3 invisible"> dependiendo el tipo (success o danger)
*/
// Echo.channel('notifications')
//     .listen('UserSessionChanged', (e) => {
//       const notificationElement = document.getElementById('notification');
//       notificationElement.innerText = e.message;
//       notificationElement.classList.remove('invisible');
//       notificationElement.classList.remove('alert-success');
//       notificationElement.classList.remove('alert-danger');

//       notificationElement.classList.add('alert-' + e.type);
//     });


/* 
  private
    Usa un canal privado
*/
Echo.private('notifications')
    .listen('UserSessionChanged', (e) => {
      const notificationElement = document.getElementById('notification');
      notificationElement.innerText = e.message;
      notificationElement.classList.remove('invisible');
      notificationElement.classList.remove('alert-success');
      notificationElement.classList.remove('alert-danger');

      notificationElement.classList.add('alert-' + e.type);
    });