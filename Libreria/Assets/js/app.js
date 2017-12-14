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
