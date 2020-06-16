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
            <li class="nav-item">
              <a class="nav-link" href="index.php">Beranda</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ganjilgenap.php">Ganjil Genap</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bintang.php">Bintang</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link " href="kalkulator.php">Kalkulator<span class="sr-only">(current)</a>
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
            <h2 class="featurette-heading">Kalkulator</h2><br>
           

            <!-- Membuat Form -->
            <form action="" method="POST">
            <div class="col-sm-5">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="lead">Bilangan 1</label>
                <input type="text" class="form-control" type="text" name="bilangan1" required="">
              </div>
              <div class="col-md-6 mb-3">
                <label class="lead">Bilangan 2</label>
                <input type="text" class="form-control" type="text" name="bilangan2" required="">
              </div>
            </div>
            </div>

            <input class="btn btn-outline-primary" type="submit" name="submit" value="Hitung">
            <input class="btn btn-outline-secondary" type="reset" name="submit" value="Reset"> <br> <br> 
            </form>  
              
            <?php 
                if (isset($_POST['submit'])) { //Mengecek nilai yang dikirim dari form
                $bil1 = $_POST['bilangan1']; //Membuat variabel bil1 dan nilainya berasal dari form inputan
                $bil2 = $_POST['bilangan2']; //Membuat variabel bil2 dan nilainya berasal dari form inputan


                  echo "↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ <br>";
                  echo "Bilangan 1 = ". $bil1."<br>";
                  echo "Bilangan 2 = ". $bil2."<br>";
                  tambah($bil1,$bil2); echo "<br>"; //Memanggil fungsi tambah
                  kurang($bil1,$bil2); echo "<br>"; //Memanggil fungsi kurang
                  kali($bil1,$bil2); echo "<br>"; //Memanggil fungsi kali
                  bagi($bil1,$bil2); //Memanggil fungsi bagii
                }
    
            // Membuat fungsi tambah
            function tambah($bil1,$bil2){
            echo "Hasil Penjumlahan : ".$tambah = $bil1 + $bil2; //Menampilkan hasil penjumlahan
            }
      
            // Membuat fungsi kurang
            function kurang($bil1,$bil2){
            echo "Hasil Pengurangan : ".$kurang = $bil1 - $bil2; //Menampilkan hasil pengurangan
            }
      
            // Membuat fungsi kali
            function kali($bil1,$bil2){
            echo "Hasil Perkalian : ".$kali = $bil1 * $bil2; //Menampilkan hasil perkalian
            }
    
            // Membuat fungsi bagi
            function bagi($bil1,$bil2){
            echo "Hasil Pembagian : ".$bagi = $bil1 / $bil2; //Menampilkan hasil pembagian
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
