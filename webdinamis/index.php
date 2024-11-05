<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    
    <!-- CSS Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS Datatables -->
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
</head>
<body class="text-bg-dark">
    <header>
        <h1 class="text-center p-3">Membuat Website Dinamis</h1>
    </header>
    
    <!-- Menu -->
    <?php include "includes/navbar.php"; ?>
    <!-- ./Menu -->
    
    <!-- Konten -->
    <div class="container mt-3">
        <?php include "konten.php"; ?>
    </div>
    <!-- ./Konten -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#9FA6B2" fill-opacity="1" d="M0,128L65.5,32L130.9,128L196.4,160L261.8,32L327.3,320L392.7,224L458.2,96L523.6,64L589.1,192L654.5,160L720,192L785.5,128L850.9,0L916.4,192L981.8,32L1047.3,256L1112.7,96L1178.2,192L1243.6,64L1309.1,0L1374.5,256L1440,288L1440,320L1374.5,320L1309.1,320L1243.6,320L1178.2,320L1112.7,320L1047.3,320L981.8,320L916.4,320L850.9,320L785.5,320L720,320L654.5,320L589.1,320L523.6,320L458.2,320L392.7,320L327.3,320L261.8,320L196.4,320L130.9,320L65.5,320L0,320Z"></path></svg>
    
    <footer>
        <div class="text-bg-secondary p-3 text-center">
            Pemrograman Web 1 @ <?= date("Y"); ?>
        </div>
    </footer>

    <!-- JS Scripts -->
    <script src="assets/js/jquery-3.7.1.js"></script>
    <script src="assets/datatables/dataTables.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script>
        new DataTable('#example');
    </script>
</body>
</html>