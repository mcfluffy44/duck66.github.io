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
        <h1 class="display-4">Pilihan Jawaban</h1>
        
        <div class="row" style="margin-bottom: 20px">
        
            <div class="col-sm-6">
                <a href="form_add_pilihan_jawaban.html">
                    <button class="btn btn-outline-secondary" type="button">Tambah</button>
                </a>
            </div>
        
            <div class="col-sm-6 text-left">                
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Search</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="row table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            #
                        </th>
                        <th scope="col">
                            Kode Pilihan
                        </th>
                        <th scope="col">
                            Nama Pilihan
                        </th>
                        <th scope="col">
                            Pilihan 1
                        </th>
                        <th scope="col">
                            Operator 1
                        </th>
                        <th scope="col">
                            Nilai 1
                        </th>
                        <th scope="col">
                            Pilihan 2
                        </th>
                        <th scope="col">
                            Operator 2
                        </th>
                        <th scope="col">
                            Nilai 2
                        </th>
                        <th scope="col">
                            Pilihan 3
                        </th>
                        <th scope="col">
                            Operator 3
                        </th>
                        <th scope="col">
                            Nilai 3
                        </th>
                        <th scope="col">
                            Pilihan 4
                        </th>
                        <th scope="col">
                            Operator 4
                        </th>
                        <th scope="col">
                            Nilai 4
                        </th>                                                                        
                        <th scope="col">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-truncate">
                        <th scope="row">
                            1
                        </th>
                        <td>
                            Dummy Code
                        </td>
                        <td>
                            Dummy Nama
                        </td>                        
                        <td>
                            Dummy Pilihan 1
                        </td>               
                        <td>
                            Dummy Operator 1
                        </td>                
                        <td>
                            Dummy Nilai 1
                        </td>  
                        <td>
                            Dummy Pilihan 2
                        </td>               
                        <td>
                            Dummy Operator 2
                        </td>                
                        <td>
                            Dummy Nilai 2
                        </td>  
                        <td>
                            Dummy Pilihan 3
                        </td>               
                        <td>
                            Dummy Operator 3
                        </td>                
                        <td>
                            Dummy Nilai 3
                        </td>  
                        <td>
                            Dummy Pilihan 4
                        </td>               
                        <td>
                            Dummy Operator 4
                        </td>                
                        <td>
                            Dummy Nilai 4
                        </td>                                                                          
                        <td>
                            <button class="btn btn-small btn-outline-success">Edit</button>
                            <button class="btn btn-small btn-outline-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>



<!-- <div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div> -->

</body>
</html>
