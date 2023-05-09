<?= $this->extend('layouts/layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <figure>
    <h1 class="mt-4">Tambahkan Data </h1>
    <blockquote class="blockquote">
      <p>masukan data barang yang ingin ditambahkan</p>
    </blockquote>
    <figcaption class="blockquote-footer">
      Berikut <cite title="Source Title">Beberapa barang yang tersedia</cite>
    </figcaption>
  </figure>

  <div class="row">
    <div class="col">
      <form action="<?= base_url('/product/insert') ?>" method="post">

        <div class="form-group">
          <label for="productName">Nama Product</label>
          <input type="text" name="productName" id="productName" class="form-control <?= ($validation->hasError('productName')) ? 'is-invalid' : "" ?> ">
          <?php if ($validation->getError('productName')) : ?>
            <div class="small text-danger">
              <?= $validation->getError('productName') ?>
            </div>
          <?php endif ?>
        </div>

        <div class="form-group">
          <label for="productCode">Kode Product</label>
          <input type="text" name="productCode" id="productCode" class="form-control" value="<?= $kodeproduk ?>" readonly>
        </div>

        <div class="form-group">
          <label for="productStock">Stock Product</label>
          <input type="number" name="productStock" id="productStock" class="form-control">
        </div>

        <div class="form-group">
          <label for="productPrice">Harga Product</label>
          <input type="number" name="productPrice" id="productPrice" class="form-control">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">SAVE</button>

      </form>
    </div>
  </div>

  <?= $this->endSection(); ?>