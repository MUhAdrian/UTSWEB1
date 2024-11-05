<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UTS WEB</title>
  <!-- CSS Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- CSS Datatables -->
  <link href="assets/datatables/dataTables.bootstrap5.css" rel="stylesheet">
</head>

<!--style button home-->

<head>
  <style>
    .button-container {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1500;
    }

    .btn-toolbar {
      display: flex;
      justify-content: flex-end;
    }

    footer {
      z-index: 1000;
      /* Nilai z-index lebih rendah dari button-container */
      position: relative;
    }
  </style>

  <!--profile homm-->
  <style>
    profile-container {
      padding: 15px;
      display: flex;
      align-items: flex-start;
    }

    .profile-left-section {
      display: flex;
      align-items: center;
      flex-shrink: 0;
    }

    .profile-image {
      width: 100px;
      height: 100px;
      object-fit: cover;
      margin-right: 15px;
    }

    .profile-text {
      margin-left: 10px;
    }

    .text-container {
      background-color: #f8f9fa;
      border-radius: 10px;
      padding: 15px;
      margin-left: 20px;
      flex-grow: 1;
    }

    @media (min-width: 768px) {
      .profile-image {
        width: 150px;
        height: 150px;
      }
    }

    @media (max-width: 767px) {
      .profile-container {
        flex-direction: column;
      }

      .text-container {
        margin-left: 0;
        margin-top: 20px;
      }
    }
  </style>
</head>

<head>
  <style>
    .carousel-item img {
      width: 100%;
      height: auto;
      /* Responsif secara vertikal */
    }

    @media (min-width: 768px) {
      .carousel-item img {
        height: 400px;
        /* Atur tinggi khusus untuk layar lebih besar */
      }
    }
  </style>
</head>

<body>
  <header>
    <h1 class="text-center p-3">Membuat website dinamis</h1>
  </header>
  <!-- menu -->
  <?php include "includes/navbar.php" ?>
  <!-- ./menu -->

  <!-- konten -->
  <div class="container mt-3">
    <?php include "konten.php" ?>
  </div>
  <!-- ./konten -->
  <footer>
    <div class="fixed-bottom text-bg-dark p-2 text-center mt-3">
      Pemrograman Web 1 @ <?= date("Y") ?>
    </div>
  </footer>
  <script src="assets/jquery/jquery-3.7.1.js"></script>
  <script src="assets/datatables/dataTables.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script>
    new DataTable('#example');
  </script>
</body>

</html>