<?= $this->extend('layouts/layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <figure>
    <h1 class="mt-4">Edit Data</h1>
    <blockquote class="blockquote">
      <p>Edit Data Gudang Barang</p>
    </blockquote>
    <figcaption class="blockquote-footer">
      Berikut <cite title="Source Title">Beberapa barang yang tersedia</cite>
    </figcaption>
  </figure>

  <div class="row">
    <div class="col">
      <form action="<?= base_url('/product/update') ?>" method="post">
        <input type="hidden" name="id_product" value="<?= $product->id_product ?>">
        <div class="form-group">
          <label for="productName">Nama Product</label>

          <input type="text" name="productName" id="productName" class="form-control <?= ($validation->hasError('productName')) ? 'is-invalid' : "" ?> " value="<?= $product->productName ?>">
          <?php if ($validation->getError('productName')) : ?>
            <div class="small text-danger">
              <?= $validation->getError('productName') ?>
            </div>
          <?php endif ?>
        </div>

        <div class="form-group">
          <label for="productCode">Kode Product</label>
          <input type="text" name="productCode" id="productCode" class="form-control" value="<?= $product->productCode ?>" readonly>
        </div>

        <div class="form-group">
          <label for="productStock">Stock Product</label>
          <input type="number" name="productStock" id="productStock" class="form-control" value="<?= $product->productStock ?>">
        </div>

        <div class="form-group">
          <label for="productPrice">Harga Product</label>
          <input type="number" name="productPrice" id="productPrice" class="form-control" value="<?= $product->productPrice ?>">
        </div>


        <button type="submit" class="btn btn-primary">SAVE</button>


      </form>
    </div>
  </div>


  <?= $this->endSection(); ?>