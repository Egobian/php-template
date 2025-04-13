<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="jumbotron bg-light p-5 rounded">
  <h1 class="display-4"><?php echo $data['title']; ?></h1>
  <p class="lead">Esta es una plantilla MVC simple en PHP con Bootstrap y jQuery</p>
  <hr class="my-4">
  <p>Comienza a desarrollar tu aplicación ahora mismo</p>
  <a class="btn btn-primary btn-lg" href="<?php echo URLROOT; ?>/home/about" role="button">Saber más</a>
</div>

<div class="row mt-5">

  <div class="col-md-12">
    <h3>Elementos de muestra:</h3>
    <form action="<?php echo URLROOT; ?>/home/search" method="post" class="mb-4">
      <div class="input-group">
        <input type="text" name="query" class="form-control" placeholder="Buscar elementos...">
        <button class="btn btn-primary" type="submit">Buscar</button>
      </div>
    </form>

    <div class="list-group">
      <?php foreach ($data['items'] as $item) : ?>
        <a href="<?php echo URLROOT; ?>/home/item/<?php echo $item['id']; ?>" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1"><?php echo $item['title']; ?></h5>
            <small>Fecha: <?php echo $item['created_at']; ?></small>
          </div>
          <p class="mb-1"><?php echo $item['description']; ?></p>
        </a>
      <?php endforeach; ?>
    </div>

  </div>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>