<?php
include 'fungsi.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <div class="container vh-100">
    <div class="row py-5" style="height: 10%;">
      <div class="col-1"></div>
      <div class="col-10 text-center text-info">
        <h1>Welcome to FesNuk</h1>
      </div>
      <div class="col-1"></div>
    </div>
    <div class="row pt-5" style="height: 80%;">
      <div class="col-1"></div>
      <div class="col-10">
        <div class="card mb-3 h-100 shadow p-3 bg-body-tertiary rounded">
          <div class="row h-100">
            <div class="col-md-8">
              <div class="card-body">
                <form method="post" action="" >
                  <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                    <div class="form-text text-danger">Tolong diingat usernamenya!</div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control" name="password">
                    <div class="form-text text-warning">minimal 8 karakter!</div>
                  </div>
                  <input type="submit" class="btn btn-primary" value="Registrasi" name="dor">
                </form>
              </div>
            </div>
            <div class="col-md-4">
              <img src="https://t3.ftcdn.net/jpg/03/54/24/46/360_F_354244675_qWcPrFAZUfbmyE6BqnJLs1HLdhwVlDES.jpg" class="img-fluid rounded object-fit-cover h-100" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="col-1"></div>
    </div>
    <div class="row" style="height: 10%;">
      <div class="col"></div>
      <div class="col"></div>
      <div class="col"></div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>

</html>