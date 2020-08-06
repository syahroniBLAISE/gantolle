<div class="btn-group" role="group" aria-label="Basic example">
  <a href="<?= base_url('artikel/tambahArtikel'); ?>"><button type="button" class="btn btn-secondary" >Baru</button></a>
  <a href="<?= base_url('artikel/editArtikel'); ?>/<?= $artikel['id']; ?>"><button type="button" class="btn btn-secondary">Edit</button></a>
  <a href="<?= base_url('artikel/deleteArtikel'); ?>"><button type="button" class="btn btn-secondary">Delete</button></a>
</div>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading"><?= $artikel['judul'];  ?></h4>
 <?= $artikel['artikel'];  ?>
</div>