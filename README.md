Salma Nur Azizah 22/494348/SV/20795
# Mama Clean Laundry
Mama Clean Laundry adalah 
sebuah website laundry untuk mempromosikan jasa laundry. Website ini ditujukan untuk 
klien yang menjual jasa laundry yang 
nantinya website ini bisa digunakan oleh pegawai laundry untuk menginputkan 
orderan customer dan untuk customer laundry yang ingin menggunakan 
jasa laundry dengan 3 pilihan layanan. Tujuan dari pembuatan 
website ini adalah untuk mempermudah pegawai laundry dalam mencatat orderan 
laundry dan sebagai media promosi ke customer tentang jasa laundry yang digunakan 
oleh customer.

# Requirement
1. Desain rapi mengikuti kaidah atau prinsip desain
<img width="947" alt="image" src="https://github.com/boohofwooh/UASPPW1_22-494348-SV-20795_MamaCleanLaundry/assets/104630049/8035729e-9a4e-43f8-8d1f-66a3b66db13c">

Color palette untuk desain web yang digunakan cenderung bernuansa putih dan biru untuk menunjukkan kesan segar dan bersih, 
sehingga menciptakan kontras yang jelas dan enak dipandang. 
Background pada navbar dibuat transparan, agar lebih menyatu dengan background section pertama. Z-index pada navbar berfungsi agar elemen pada navbar dan section pertama 
tidak saling bertabrakan, sehingga menghasilkan hasil yang lebih rapi. Transisi ditambahkan supaya website terlihat lebih menarik 
dengan fungsi ease selama 0.5s untuk membuat transisi terlihat halus, sehingga prinsip ritme dan kesatuan dalam desain terlihat kuat.
```ruby
.header-area {
  background-color: transparent;
  border-bottom: 1px solid rgba(42,42,42,0.2);
  position: absolute;
  left: 0px;
  right: 0px;
  z-index: 100;
  height: 100px;
  -webkit-transition: all .5s ease 0s;
  -moz-transition: all .5s ease 0s;
  -o-transition: all .5s ease 0s;
  transition: all .5s ease 0s;
}
```
<img width="948" alt="image" src="https://github.com/boohofwooh/UASPPW1_22-494348-SV-20795_MamaCleanLaundry/assets/104630049/ede5cf3b-bdca-417b-b2be-e231ffa4ba55">

Prinsip keseimbangan pada desain diterapkan menggunakan library bootstrap col-lg-4 untuk membuat container memiliki lebar yang sama. Penambahan hover berupa pergantian image 
membuat website menjadi terlihat aktif dan bergerak.

```ruby
HTML
<div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>MamaQuick</h4>
            <p>Say goodbye to spending endless hours on laundry and hello to a quick and efficient laundry service that guarantees freshly cleaned clothes in just one day!</p>
            <div class="text-button">
              <a href="#pricing">More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
</div>

CSS
    .second-service .icon {
  background-image: url(../images/clock.png);
  background-size: cover;
}

.second-service:hover .icon {
  background-image: url(../images/clock1.png);
}
```
2. Website responsive, dapat diakses melalui device: Mobile, Tablet dan Laptop


<img width="474" alt="image" src="https://github.com/boohofwooh/UASPPW1_22-494348-SV-20795_MamaCleanLaundry/assets/104630049/da269075-065c-40b6-af44-2028b8f9ab83">   <img width="474" alt="image" src="https://github.com/boohofwooh/UASPPW1_22-494348-SV-20795_MamaCleanLaundry/assets/104630049/8f430076-922f-4548-9649-5c512a035e83">   <img width="948" alt="image" src="https://github.com/boohofwooh/UASPPW1_22-494348-SV-20795_MamaCleanLaundry/assets/104630049/cbb51c5f-f59b-42c0-a83a-b1ac4bf8f43f">

Website sudah responsif dengan menggunakan query CSS @media yang mengubah tampilan pada perangkat dengan lebar maksimum 991 piksel (misalnya, 
perangkat mobile atau tablet dalam orientasi potrait). Media queries sangat berguna dalam menciptakan tampilan responsif, 
di mana halaman web dapat menyesuaikan diri dengan baik pada berbagai perangkat dan ukuran layar yang berbeda. 
Dengan mengatur nilai overflow-x menjadi "hidden", bagian konten yang melebihi lebar 
layar tidak akan muncul dengan mengaktifkan pengguliran horizontal.

```ruby
@media (max-width: 991px) {
  html, body {
    overflow-x: hidden;
  }
  .mobile-top-fix {
    margin-top: 30px;
    margin-bottom: 0px;
  }
  .mobile-bottom-fix {
    margin-bottom: 30px;
  }
  .mobile-bottom-fix-big {
    margin-bottom: 60px;
  }
}
```

3. Direct feedback ke pengguna website

<img width="960" alt="image" src="https://github.com/boohofwooh/UASPPW1_22-494348-SV-20795_MamaCleanLaundry/assets/104630049/4f107944-73de-4ce5-8280-e950b028892c">

Direct feedbcak berupa form yang ditampilkan melalui modal. Form ini akan muncul ketika button order ditekan. User dapat memasukkan data orderan laundry
melalui form tersebut. Form ini menggunakan JavaScript yang memungkinkan user untuk menginputkan data, lalu dari data tersebut dihitung secara otomatis. Ketika elemen dengan id 
'add-item-order' atau button + pada item diklik, kode ini menambahkan form input baru yaitu name, amount, dan weight. Inputan yang berupa angka akan dihitung 
secara otomatis, misalnya weight, menggunakan function recalculateBerat(), fungsi ini bertujuan untuk menghitung total berat dari input yang memiliki kelas "berat-input". 
Pertama-tama, fungsi ini mendeklarasikan variabel "sum" dengan nilai awal 0. Kemudian, menggunakan "each" jQuery, fungsi ini melakukan perulangan untuk 
setiap elemen yang memiliki kelas "berat-input". Di dalam setiap perulangan, fungsi tersebut mengambil nilai dari elemen input dengan menggunakan "val()" dan 
mengonversinya ke tipe data float menggunakan "parseFloat()". Jika nilai tersebut tidak bukan angka (not a number), maka nilai tersebut ditambahkan ke variabel "sum". 
Setelah perulangan selesai, nilai dari "sum" ditampilkan di elemen dengan id "berat-value" menggunakan "text()". 
Kemudian fungsi "updateTotalHarga()" dipanggil untuk menghitung ulang total harga berdasarkan nilai berat yang baru dihitung. Pada form ini, 
total harga dari orderan laundry akan dihitung berdasarkan berat dan harga layanan 
per kilonya.

```ruby
 $(document).ready(function() {
      $('#add-item-order').click(function() {
        const inputField = `
      <div class="row mb-3">
        <div class="col-lg-6">
          <label for="">Name</label>
          <input type="text" name="nama_item[]" class="form-control" required>
        </div>

        <div class="col-lg-3">
          <label for="">Amount</label>
          <input type="number" name="banyak_item[]" class="form-control banyak-input" required>
        </div>

        <div class="col-lg-3">
          <label for="">Weight</label>
          <input type="number" name="berat_item[]" class="form-control berat-input" required>
        </div>
      </div>
    `;
        $('#item-container').append(inputField);
        $('.berat-input').on('input', recalculateBerat);
      });

      $(document).on('input', '.berat-input', recalculateBerat);

      function recalculateBerat() {
        let sum = 0;
        $('.berat-input').each(function() {
          let value = parseFloat($(this).val());
          if (!isNaN(value)) {
            sum += value;
          }
        });
        $('#berat-value').text(sum);
        updateTotalHarga();
      }

      $('input[name="service"]').on('change', function() {
        const selectedService = $('input[name="service"]:checked').val();
        let price = 0;

        if (selectedService === 'regular') {
          price = 4000;
        } else if (selectedService === 'quick') {
          price = 10000;
        } else if (selectedService === 'ironing') {
          price = 3000;
        }

        $('#service-harga').text(price);

        updateTotalHarga();
      });

      function updateTotalHarga() {
        const servicePrice = parseInt($('#service-harga').text());
        const beratValue = parseFloat($('#berat-value').text());
        const totalHarga = servicePrice * beratValue;
        const formattedTotalHarga = totalHarga.toLocaleString('id-ID', {
          style: 'currency',
          currency: 'IDR'
        });
        $('#total-harga-value').text(formattedTotalHarga);
      }

      updateTotalHarga();
    });
    function confirmSubmit() {
    if (confirm("Are you sure you want to submit?")) {
      return true;
    } else {
      return false;
    }
  }
  ```
<img width="960" alt="image" src="https://github.com/boohofwooh/UASPPW1_22-494348-SV-20795_MamaCleanLaundry/assets/104630049/29d15b8c-6489-49ae-b368-8d5e9b606a2c">

Sebelum order dikirimkan ke dalam database, akan muncul alert untuk memastikan apakah 
data yang diinputkan oleh user sudah benar dan tidak ada perubahan atau belum menggunakan function. Jika user memilih OK, akan muncul data orderan yang telah diinputkan, 
sedangkan jika user memilih cancel, user akan kembali ke form pada modal.

```ruby
function confirmSubmit() {
    if (confirm("Are you sure you want to submit?")) {
      return true;
    } else {
      return false;
    }
  }
  ```
4. Konten dinamis dari database.

<img width="948" alt="image" src="https://github.com/boohofwooh/UASPPW1_22-494348-SV-20795_MamaCleanLaundry/assets/104630049/2a7197b2-481f-4d72-993b-f349ce7b286d">

Setelah klik OK pada alert, maka akan secara otomatis muncul data dari orderan yang sudah dimasukkan. Data yang telah diinputkan tersebut juga akan 
masuk ke dalam database.

```ruby
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
      ```





