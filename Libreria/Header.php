<?php


?>
<html>
<head>


</head>
<body id="app">
  <!-- Importamos Vue.js (Siempre al final) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.2/vue-resource.min.js"></script>

  <script src="Libreria/Assets/js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="./Libreria/Assets/js/app.js"></script>
  <script>

  var app = new Vue({
  el: '#app',
  data: {
    name: 'Vue.js'
  },
  // define methods under the `methods` object
  methods: {
    greet: function () {
      console.log('boton enviar entro ');
      // `this` inside methods points to the Vue instance
      alert('Hello ')
      // `event` is the native DOM event

    }
  }
  })
  </script>
    <link rel="stylesheet" href="Libreria/Assets/css/bootstrap.min.css" />
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <div class="navbar">
           <a class="nav-item nav-link active" href="./">Inicio <span class="sr-only">(current)</span></a>
           <a class="nav-item nav-link" href="./paciente.php">Paciente</a>
           <a class="nav-item nav-link" href="./lista.php">Lista de paciente</a>
           <a class="nav-item nav-link disabled" href="#">Disabled</a>
         </div>

    </nav>
