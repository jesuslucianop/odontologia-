<?php
include "Libreria/conexion.php";
include "Libreria/header.php";

?>
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
<div id="app">
  <button v-on:click="greet()">greet</button>
  <button v-on:click="say('what')">Say what</button>
</div>
<div class="container" >

<h1>Registrar Paciente</h1>
<div class="row">
  <div class="col col-md-6" >

<div class="form-group input-group">
  <span class="input-group-addon">Nombres</span>
  <input type="text" id="nombrepaciente" name="nombrepaciente" v-model="nombre" class="form-control" />
</div>
<div class="form-group input-group">
  <span class="input-group-addon">Apellidos</span>
  <input type="text" id="nombrepaciente" name="nombrepaciente" class="form-control" />
</div>
<div class="form-group input-group">
  <span class="input-group-addon">Sexo</span>
  <select name="" id="" class="select">
<option value="">seleccion el sexo Del paciente</option>
<option value="">M</option>
<option value="">F</option>

  </select>
</div>
<div class="form-group input-group">
  <span class="input-group-addon">Fecha de Nacimiento</span>
  <input type="text" id="nombrepaciente" name="nombrepaciente" class="form-control" />
</div>


  </div>
  <div class="col col-md-6">
    <div class="form-group input-group">
      <span class="input-group-addon">Telefono Residencial</span>
      <input type="text" id="nombrepaciente" name="nombrepaciente" class="form-control"/>
    </div>
    <div class="form-group input-group">
      <span class="input-group-addon">Telefono Movil</span>
      <input type="text" id="nombrepaciente" name="nombrepaciente" class="form-control"/>
    </div>
    <div class="form-group input-group">
      <span class="input-group-addon">Enfermedades Del Paciente</span>
  <textarea class="form-control" name="" id=""></textarea>
    </div>
    <div class="form-group input-group">
      <span class="input-group-addon">Alergias Del Paciente</span>
  <textarea class="form-control" name="" id=""></textarea>
    </div>
  </div>
  <button v-on:click="enviar" class="btn btn-primary">Enviar</button>

</div>
</div>

<?php

include "Libreria/footer.php";
?>
