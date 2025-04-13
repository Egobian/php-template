<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="<?php echo URLROOT; ?>" class="btn btn-secondary mb-3">
        <i class="bi bi-arrow-left"></i> Volver
      </a>

      <h2>Resultados de búsqueda para: "<?php echo $data['query']; ?>"</h2>

      <?php if (empty($data['results'])) : ?>
        <div class="alert alert-info mt-4">
          No se encontraron elementos que coincidan con su búsqueda.
        </div>
      <?php else : ?>
        <p>Se encontraron <?php echo count($data['results']); ?> elementos:</p>

        <div class="list-group mt-3">
          <?php foreach ($data['results'] as $item) : ?>
            <a href="<?php echo URLROOT; ?>/home/item/<?php echo $item['id']; ?>" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><?php echo $item['title']; ?></h5>
                <small>Fecha: <?php echo $item['created_at']; ?></small>
              </div>
              <p class="mb-1"><?php echo $item['description']; ?></p>
            </a>
          <?php endforeach; ?>
        </div>

      <?php endif; ?>
    </div>
  </div>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>