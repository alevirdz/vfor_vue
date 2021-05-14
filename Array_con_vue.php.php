<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
  <title>VUE</title>
</head>
<body>
  <div id="header"> </div>
  <div id="app">

  <section class="section">
    <div class="container">
        <div class="notification is-primary">
          <strong>{{titulo}}</strong>
          <p>{{descripcion}}</p>
        </div>
      <p class="subtitle">
        Uso de v-for <strong>Vue</strong>!
      </p>
    
    <table class="table table is-striped">
      <thead>
        <tr>
          <th>Nombres de usuarios</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="usuario of usuarios">
          <!-- V-for Arreglo de usuarios -->
          <th>{{usuario}}</th>
        </tr>
      </tbody>
    </table>

    <p class="subtitle">
        Uso de v-for <strong>Vue</strong>!
      </p>
    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
      <thead>
        <tr>
          <th>Nombres de Ciudades</th>
          <th>Habitantes</th>
          <th>Año</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="ubicacion of ciudadades">
          <!-- V-for Arreglo de usuarios -->
          <th>{{ubicacion.Ciudad}}</th>
           <!-- V-for Arreglo con objetos ciudadades , habitantes y año de la actualizacion-->
          <td>{{ubicacion.Habitantes}}</td>
          <td>{{ubicacion.Año}}</td>
        </tr>
      </tbody>
    </table>


    </div>
  </section>

  </div>




<!-- CDN VERSION 2.5.17  VUE-->
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<!-- Archivo que contiene los arreglos -->
<script src="./array.js"></script>
</body>
</html>

<script>