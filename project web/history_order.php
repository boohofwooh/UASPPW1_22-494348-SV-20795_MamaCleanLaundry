<?php include('./koneksi.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <title>MamaClean Laundry</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>

  <div class="my-5 py-5">
    <h1 class="text-center mb-5">Order List</h1>

    <div class="row container">
      <?php $query = mysqli_query($mysqli, "SELECT * FROM laundry_order ORDER BY id_orderlaundry"); ?>

      <?php while ($order = mysqli_fetch_assoc($query)) : ?>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Laundry Order <?= $order['id_orderlaundry'] ?></h5>

              <div class="d-flex align-items-center justify-content-between mt-4">
                <p class="text-dark">Name</p>
                <p class="text-dark"><?= $order['nama'] ?></p>
              </div>

              <div class="d-flex align-items-center justify-content-between mt-2">
                <p class="text-dark">Telephone number</p>
                <p class="text-dark"><?= $order['no_telepon'] ?></p>
              </div>

              <div class="d-flex align-items-center justify-content-between mt-2">
                <p class="text-dark">Laundry Service</p>
                <p class="text-primary text-uppercase"><b><?= $order['service_laundry'] ?></b></p>
              </div>

              <div class="d-flex align-items-center justify-content-between mt-2">
                <p class="text-dark">Payment method</p>
                <p class="text-success text-uppercase"><b><?= $order['metode_pembayaran'] ?></b></p>
              </div>

              <hr />

              <?php $orderId =  $order['id_orderlaundry'] ?>
              <?php $queryItem = mysqli_query($mysqli, "SELECT * FROM laundry_order_item WHERE id_orderlaundry = '$orderId'") ?>

              <div class="row">
                <div class="col-lg-6">
                  <p class="text-dark"><b>Item's name</b></p>
                </div>
                <div class="col-lg-3">
                  <p class="text-dark"><b>Amount</b></p>
                </div>
                <div class="col-lg-3">
                  <p class="text-dark"><b>Weight</b></p>
                </div>
              </div>
              <?php while ($orderItem = mysqli_fetch_assoc($queryItem)) : ?>
                <div class="row mt-2">
                  <div class="col-lg-6">
                    <p class="text-dark"><?= $orderItem['nama_item'] ?></p>
                  </div>
                  <div class="col-lg-3">
                    <p class="text-dark"><?= $orderItem['banyak_item'] ?> Item</p>
                  </div>
                  <div class="col-lg-3">
                    <p class="text-dark"><?= $orderItem['berat_item'] ?> kg</p>
                  </div>
                </div>
              <?php endwhile ?>


              <hr />

              <div class="d-flex align-items-center justify-content-between mt-2">
                <p class="text-dark">Total Item</p>
                <p class="text-dark text-uppercase"><?= $order['total_banyak_item'] ?> Item</p>
              </div>

              <div class="d-flex align-items-center justify-content-between mt-2">
                <p class="text-dark">Total Weight</p>
                <p class="text-dark text-uppercase"><?= $order['total_berat'] ?> kg</p>
              </div>

              <hr />

              <div class="d-flex align-items-center justify-content-between mt-2">
                <p class="text-dark">Total Price</p>
                <p class="text-danger"><b>Rp <?= number_format($order['total_harga']) ?></b></p>
              </div>


            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>