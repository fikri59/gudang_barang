<?= $this->extend('layouts/layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <figure>
    <h1 class="mt-4">Data Barang </h1>
    <blockquote class="blockquote">
      <p>list barang yang tersedia di gudang</p>
    </blockquote>
    <figcaption class="blockquote-footer">
      Berikut <cite title="Source Title">Beberapa barang yang tersedia</cite>
    </figcaption>
  </figure>

  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title">List Product</h4>
          <a href="<?= base_url('/product/create') ?>" class="btn btn-primary btn-sm">Create Data</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table-sm table table-hover" id="myTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Product Name</th>
                  <th>Product Code</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Options</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($products as $index => $product) : ?>
                  <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= ucwords($product->productName) ?></td>
                    <td><?= strtoupper($product->productCode) ?></td>
                    <td><?= number_format($product->productPrice) ?></td>
                    <td><?= number_format($product->productStock) ?></td>
                    <td>
                      <a href="<?= base_url('/product/' . $product->id_product . '/edit') ?>" class="btn btn-info btn-sm">Edit</a>
                      <a href="<?= base_url('/product/' . $product->id_product . '/delete') ?>" class="btn btn-danger btn-sm" onclick="return confirm('Product ini akan terhapus, lanjutkan ?')">Delete</a>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?= $this->endSection(); ?>