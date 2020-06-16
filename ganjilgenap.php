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
            <li class="nav-item active">
              <a class="nav-link" href="ganjilgenap.php">Ganjil Genap<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="bintang.php">Bintang</a>
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
            <center><h2 class="featurette-heading">Deretan Ganjil dan Genap</h2>
            <p class="lead">Dari angka 1 s/d 100</p>
            
            <?php 
              
              echo "Bilangan Ganjil : ";
              for($i=1; $i<=100; $i++) { //Membuat variabel i dengan nilai 1, lalu membuat perulangan secara increment sampai dengan nilai 100
                if($i%2==1) //Jika sisa hasil bagi antara nilai i dengan 2 = 1 maka itu merupakan bilangan ganjil
                {
                  echo $i." "; //Menampilkan bilangan ganjil
                }
              }

              echo "<br>";

              echo "Bilangan Genap : ";
              for($j=1; $j<=100; $j++) { //Membuat variabel j dengan nilai 1, lalu membuat perulangan secara increment sampai dengan nilai 100
                if($j%2==0) //Jika sisa hasil bagi antara nilai i dengan 2 = 0 maka itu merupakan bilangan genap
                {
                  echo $j." "; //Menampilkan bilangan genap
                }
              }
              ?></center>
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
