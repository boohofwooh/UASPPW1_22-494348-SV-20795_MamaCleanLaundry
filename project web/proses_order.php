<?php
include('./koneksi.php');

$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
$service = $_POST['service'];
$nama_item = $_POST['nama_item'];
$banyak_item = $_POST['banyak_item'];
$berat_item = $_POST['berat_item'];
$metode_pembayaran = $_POST['metode_pembayaran'];

try {
  $price = 0;
  if ($service == 'regular') {
    $price = 4000;
  } else if ($service == 'quick') {
    $price = 10000;
  } else if ($service == 'ironing') {
    $price = 3000;
  }

  $totalBanyak = count($nama_item);
  $totalBerat = array_sum($berat_item);
  $totalPrice = $totalBerat * $price;

  $hasil = mysqli_query($mysqli, "INSERT INTO laundry_order (nama, no_telepon, service_laundry, total_banyak_item, total_berat, total_harga, metode_pembayaran) VALUES('$nama', '$no_telepon', '$service', '$totalBanyak', '$totalBerat', '$totalPrice', '$metode_pembayaran')");

  $orderId = mysqli_insert_id($mysqli);

  for ($i = 0; $i < count($nama_item); $i++) {
    mysqli_query($mysqli, "INSERT INTO laundry_order_item (id_orderlaundry, nama_item, banyak_item, berat_item) VALUES('$orderId', '$nama_item[$i]', '$banyak_item[$i]', '$berat_item[$i]')");
  }

  if ($hasil) {
    mysqli_close($mysqli);
    header("Location: history_order.php");
    exit;
  } else {
    echo "Data insertion failed!";
    header("Location: index.php");
    exit;
  }
} catch (Exception $e) {
  echo "Error" . $e;
}
