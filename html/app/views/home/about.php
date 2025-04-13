<?php require APPROOT . '/views/includes/header.php'; ?>

<h1><?php echo $data['title']; ?></h1>
<p class="lead">
  Esta es una aplicación construida con PHP utilizando el patrón de diseño MVC sin frameworks externos. <br>
  Basada en el proyecto final que entregué en el grado de DAW. <br>
  Puedes usarla de manera gratuita y modificarla a tu gusto. <br>
  Ten en cuenta las librerias de terceros que se han utilizado en el proyecto. <br>
</p>
<p>
  Versión: <strong><?php echo APP_VERSION; ?></strong>
</p>

<?php require APPROOT . '/views/includes/footer.php'; ?>