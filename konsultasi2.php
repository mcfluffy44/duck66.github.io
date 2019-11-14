<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mind</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="./src/bootstrap/jquery-3.4.1.min.js"></script>
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
            <button type="button" class="btn btn-primary btn-lg btn-block">Konsultasi</button>
        </div>
        <div class="col-sm-3" style="margin-bottom: 10px">
            <a href="login.html">
                <button type="button" class="btn btn-outline-primary btn-lg btn-block">Login</button>
            </a>
        </div>
    </div>
</div>


<div class="container" style="margin-top:30px">
  <div class="jumbotron">
    <!-- <div style="background:grey !important" class="jumbotron"> Note ntar buat ganti BG--> 
    <div class="container">
        <h1 class="display-4">Halaman Konsultasi</h1>
        <p class="lead">Berikut merupakan kategori yang tersedia.</p>
        <p class="lead">Apabila ada kategori yang tidak sesuai, mohon diceklis agar lebih efisien ^-^</p>
        <div class="container">
            <div class="row text-center" style="margin-top: 30px">
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="school">
                        <label class="form-check-label" for="school"><h5>School</h5></label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="family">
                        <label class="form-check-label" for="family"><h5>Family</h5></label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="office">
                        <label class="form-check-label" for="office"><h5>Office</h5></label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin-top: 30px">
            <div class="col-sm-3" style="margin-bottom: 10px">
                <div class="text-left">
                    <button type="button" class="btn btn-outline-danger btn-lg btn-block" data-toggle="modal" data-target="#alertModal">Kembali</button>
                </div>  
            </div>        
            <div class="col-sm-3"></div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <div class="text-right">
                    <a href="konsultasi3.html">
                        <button type="button" class="btn btn-outline-success btn-lg btn-block">Mari Lanjut \(^o^)/</button>
                    </a>
                </div>  
            </div>
        </div>        
    </div> 

  </div>
</div>

                    <!-- Modal alert -->
                    <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="alertModalLabel">Perhatian</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Pilihan anda akan terhapus, apakah anda yakin ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                <a href="konsultasi.html">
                                    <button type="button" class="btn btn-primary">Lanjutkan</button>
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>  
<!-- <div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div> -->

</body>
</html>