<?php
include 'fungsi.php';

$query = "SELECT * FROM posting";
$data = mysqli_query(db(),$query);

?>
<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid bg-info">
            <a class="navbar-brand" href="#">
                <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Fesnuk
            </a>
        </div>
    </nav>
    <!-- Navbar -->
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <?php
            while($data_posting = mysqli_fetch_assoc($data)){
                echo '
                <div class="card my-5 shadow-lg ``">
    <div class="card-body">
    <h1 class="card-text">'.$data_posting["content"].'</h1>
    <h3 class="card-subtitle mb-2 text-body-secondary">By '.$data_posting["id_user"].'</h3>
    <h6 class="card-title">Created '.$data_posting["date"].'</h6>
    <sub>Like '.$data_posting["laik"].'</sub>
    <sub>Comment '.$data_posting["comment"].'</sub>
    </div>
    </div>
    ';
    }
    ?>
    </div>
            <div class="col-2"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>