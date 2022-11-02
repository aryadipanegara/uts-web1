<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Layout Web dengan Grid System & Container</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center p-0">
            <img src="coba.png" class="img-fluid" alt="Responsive image">
             </div>
         </div>

         <div class="row">
            <div class="col-md-3" style="background-color:grey;">
                <center><h2>Peserta UTS</h2></center>
                <p>Nama : Muhammad Arya Dipanegara Gunawan</p>
                <p>Nim  : 312110396</a></p>
                <p>Kelas    :TI.21.A2 <TI class="21 A2"></TI></a></p>
            </div>
            <div class="col-md-9" style="background-color:grey;">
            <center><h2>tabel ATK</h2></center>
            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga Satuan</th>
      <th scope="col">Jumlah</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Buku Tulis</td>
      <td>20.000</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Novel</td>
      <td>80.000</td>
      <td>2</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Album</td>
      <td>500.000</td>
      <td>1</td>
    </tr>
  </tbody>
</table>
            </div>
         </div>
        <div class="row" style="background-color:Grey;">
            <div class="col-md-12 text-center">
                <font color="White"><h5>Copyright 2022-ARGUN-RELAXED</h5></font>

            </div>
        </div>
    </div>
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="assets/jquery.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>