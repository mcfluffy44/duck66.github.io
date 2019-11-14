<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mind</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../.././src/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <script src="../.././src/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div style="margin-top:50px">
    <a href="index.html">
        <img src="../.././src/img/Screenshot_89.png" width="300" style="margin-left: 18%">
    </a>
</div>

<div class="container">
    <div class="row text-right">
        <div class="col-sm-1" style="margin-bottom: 10px">
        </div>
        <div class="col-sm-2" style="margin-bottom: 10px">
            <a href="diagnosa.html">
                <button type="button" class="btn btn-outline-primary btn-lg btn-block">Diagnosa</button>
            </a>
        </div>
        <div class="col-sm-2" style="margin-bottom: 10px">
            <a href="gejala.html">
                <button type="button" class="btn btn-outline-primary btn-lg btn-block">Gejala</button>
            </a>
        </div>
        <div class="col-sm-3" style="margin-bottom: 10px">
            <a href="pilihan_jawaban.html">
                <button type="button" class="btn btn-outline-primary btn-lg btn-block">Pilihan Jawaban</button>
            </a>
        </div>
        <div class="col-sm-2" style="margin-bottom: 10px">
            <a href="user.html">
                <button type="button" class="btn btn-outline-primary btn-lg btn-block">User</button>
            </a>
        </div>
        <div class="col-sm-2" style="margin-bottom: 10px">
            <a href="../../index.html">
                <button type="button" class="btn btn-outline-primary btn-lg btn-block">Logout</button>
            </a>
        </div>
        
        
    </div>
</div>

<div class="container" style="margin-top:30px">
  <div class="jumbotron">
    <!-- <div style="background:grey !important" class="jumbotron"> Note ntar buat ganti BG--> 
    <div class="container">
        <h1 class="display-4">Tambah Gejala</h1>
        <!-- <div class="row">
            <div class="col-sm-6">
                <button class="btn btn-outline-secondary" type="button">Tambah</button>
            </div>
            <div class="col-sm-6 text-left">
                
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Search</button>
                    </div>
                </div>

            </div>
        </div> -->

<!-- 
        <div class="row">
            <div class="col-sm-2 bg-warning">
                ini
            </div>
            <div class="col-sm-2 bg-danger">
                ruler
            </div>            
            <div class="col-sm-2 bg-warning">
                buat
            </div>
            <div class="col-sm-2 bg-danger">
                test
            </div>                        
            <div class="col-sm-2 bg-warning">
                col
            </div>
            <div class="col-sm-2 bg-danger">
                wkwk
            </div>                        
        </div> -->

        <div class="row" style="margin-top: 25px">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-3" style="margin-bottom: 20px">
                        Kode Gejala
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-sm-3">
                        Kalimat pertanyaan
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3" style="margin-bottom: 20px">
                        Nama Gejala
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control">
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        Pilihan Jawaban
                    </div>
                    <div class="col-sm-6">
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Pilihan A</option>
                            <option>Pilihan B</option>
                        </select>
                    </div>
                </div>

                <div class="row text-center" style="margin-top : 20px">
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-outline-danger">kembali</button>
                    </div>
                    <div class="col-sm-1">
                        
                    </div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-outline-success">simpan</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <textarea class="form-control"></textarea>
            </div>
        </div>


    </div>
    </div>
</div>



<!-- <div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div> -->

</body>
</html>