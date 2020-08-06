<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

<!-- Menu Tambah/ Edit/ Delete -->
    <div class="btn-group" role="group" aria-label="Basic example">
      <a href="<?= base_url('artikel/tambahArtikel'); ?>"><button type="button" class="btn btn-secondary" >Baru</button></a>
      <!-- <a href="<?= base_url('artikel/editArtikel'); ?>"><button type="button" class="btn btn-secondary">Edit</button></a>
      <a href="<?= base_url('artikel/deleteArtikel'); ?>"><button type="button" class="btn btn-secondary">Delete</button></a> -->
    </div>
<!-- Menu Tambah/ Edit/ Delete -->

<!-- Daftar Artikel -->
    <div class="list-group">
      <button type="button" class="list-group-item list-group-item-action active">
        Daftar Artikel
      </button>
      <?php 
        $no = 0;
        $ds = 1;

        while($no < count($artikel)){
        ?>


      <a href="<?= base_url('Artikel/lihatArtikel'); ?>/<?= $artikel[$no]['id'];  ?>">
        <button type="button" class="list-group-item list-group-item-action">  
            <?= $artikel[$no]['judul'];  ?>
        </button>
      </a>
      <?php $no++; $ds++; }?>
    </div>
<!-- Daftar Artikel -->


</div>

