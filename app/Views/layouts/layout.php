<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <?= $this->renderSection('css') ?>
    <title>CI4</title>
</head>

<body>
    <style>
        .hero {
            background-image: url('https://picsum.photos/1920/1080');
            background-size: cover;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero h1 {
            font-size: 72px;
            color: #fff;
            text-shadow: 2px 2px 4px #000;
        }

        .footer {
            background-color: #1e90ff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .footer p {
            margin: 0;
        }
    </style>
    <section class="hero">
        <h1>Selamat Datang di Form Gudang Barang</h1>
    </section>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Tugas PSI | <cite title="Source Title">Perancangan Sistem Informasi</cite>
                </figcaption></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/product') ?>">Product</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="container py-3">
        <?php if (session('success')) : ?>

            <div class="alert alert-success" role="alert">
                <?= session('success') ?>
            </div>

        <?php endif ?>

        <?= $this->renderSection('content') ?>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(".alert").remove()
            })
        }, 2500)
    </script>
    <br>

    <footer class="footer py-3">
        <p>Hak Cipta &copy; 2023 - Halaman Gudang Barang</p>
    </footer>
</body>

</html>