<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mind</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./src/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <script src="./src/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div style="margin-top:50px">
    <a href="index.html">
        <img src="src/img/Screenshot_89.png" width="300" style="margin-left: 18%">
    </a>
</div>

<div class="container">
    <div class="row text-right">
        <div class="col-sm-3" style="margin-bottom: 10px">
        </div>
        <div class="col-sm-3" style="margin-bottom: 10px">
            <a href="info.html">
                <button type="button" class="btn btn-outline-primary btn-lg btn-block">Info</button>
            </a>
        </div>
        <div class="col-sm-3" style="margin-bottom: 10px">
            <a href="konsultasi.html">
                <button type="button" class="btn btn-outline-primary btn-lg btn-block">Konsultasi</button>
            </a>
        </div>
        <div class="col-sm-3" style="margin-bottom: 10px">
            <button type="button" class="btn btn-outline-primary btn-lg btn-block">Login</button>
        </div>
    </div>
</div>


<div class="container" style="margin-top:30px">
  <div class="jumbotron">
    <!-- <div style="background:grey !important" class="jumbotron"> Note ntar buat ganti BG--> 
    <div class="container">
        <h1 class="display-4">Login</h1>
        <form style="margin-left:30%; margin-right:30%">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Enter password">
            </div>
            <div class="text-center">
                <a href="./src/admin/index.php">
                    <button type="button" class="btn btn-primary btn-lg" style="padding-left: 50px; padding-right: 50px">Login</button>
                </a>
            </div>

        </form>
    </div>
    </div>
</div>



<!-- <div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div> -->

</body>
</html>
