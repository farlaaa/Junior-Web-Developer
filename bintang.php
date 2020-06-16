<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pelatihan BPPTIK</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="index.php">Pelatihan BPPTIK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ganjilgenap.php">Ganjil Genap</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="bintang.php">Bintang<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="kalkulator.php">Kalkulator</a>
            </li>
          </ul>
        </div>
        <!-- Menyisipkan file date.php untuk menampilkan tanggal -->
        <div class="navbar-brand" style="color: white"><?php include 'date.php'; ?></div> 
      </nav>
    </header>


      <!-- Content -->
      <img class="featurette-image img-fluid mx-auto" src="assets/img/background.jpg" alt="Generic placeholder image">


        <hr class="featurette-divider">

        <div class="row featurette" style="margin-top:30px;">
          <div class="col-md-12">
            <center>
              <h2 class="featurette-heading">Bintang</h2> <br>
            

            <!-- Membuat Form -->
            <form action="" method="POST">
            <div class="col-sm-3">
            <div class="row">
              <div class="col-md-12 mb-3">
                <label class="lead">Jumlah Tinggi Bintang</label>
                <input type="text" class="form-control" type="text" name="Bintang" required="">
              </div>
            </div>
            </div>
            <input class="btn btn-outline-primary" type="submit" name="submit" value="Tampilkan"> <br> <br> 
            </form>

            <?php 
              if (isset($_POST['submit'])) { //Mengecek nilai yang dikirim dari form
              $bintang = $_POST['Bintang']; //Membuat variabel bintang dan nilainya berasal dari form inputan

              
              echo "↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ <br>";
              echo "Jumlah tinggi bintang : ".$bintang."<br>";
              // Membuat variabel dan menampilkan perulangan secara increment
              for ($i=1;$i<=$bintang;$i++) { 
                for ($j=1;$j<=$i;$j++){
                  echo "*"; //Menampilkan bintang
                }
              echo "<br>";
              }
              }
            ?>
            </center>
          </div>
        </div>

        <hr class="featurette-divider">
        <!-- /End Content -->

      <!-- FOOTER -->
      <footer class="container">
        <p>&copy; Junior Web Developer 2020 - Farla Praditha</p>
      </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/popper/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/holder.js"></script>
  </body>
</html>
