<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="<?php echo URLROOT; ?>" class="btn btn-secondary mb-3">
        <i class="bi bi-arrow-left"></i> Volver
      </a>

      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3><?php echo $data['item']['title']; ?></h3>
          <span class="badge bg-primary">ID: <?php echo $data['item']['id']; ?></span>
        </div>

        <div class="card-body">
          <p><?php echo $data['item']['description']; ?></p>
          <hr>
          <small class="text-muted">Creado el: <?php echo $data['item']['created_at']; ?></small>
        </div>
      </div>

    </div>
  </div>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>