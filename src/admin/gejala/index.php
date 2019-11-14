<!DOCTYPE html>
<html lang="en">

<!-- Header -->
<?php include "header.php";?>


<!-- body -->
<div class="container" style="margin-top:30px">
  <div class="jumbotron">
    <!-- <div style="background:grey !important" class="jumbotron"> Note ntar buat ganti BG--> 
    <div class="container">
        <h1 class="display-4">Gejala</h1>
        
        <div class="row" style="margin-bottom: 20px">
        
            <div class="col-sm-8">
                <a href="form_add_gejala.html">
                    <button class="btn btn-outline-secondary" type="button">Tambah</button>
                </a>
            </div>
        
            <div class="col-sm-4 text-left">                
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Search</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            Kode Gejala
                        </th>
                        <th scope="col">
                            Nama Gejala
                        </th>
                        <th scope="col">
                            Jenis Pilihan
                        </th>
                        <th scope="col">
                            Pertanyaan
                        </th>
                        <th scope="col">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <!-- start from here -->

                <?php
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT kode_gejala, nama_gejala, kode_pilihan, pertanyaan FROM gejala";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tbody><tr><td>" . $row["kode_gejala"] . " </td><td>" . $row["nama_gejala"] . "</td><td>" . $row["kode_pilihan"] . "</td><td>" . $row["pertanyaan"] . "</td><td><div class='row' style='margin-bottom: 10px'><button class='btn btn-small btn-outline-success'>Edit</button></div><div class='row'><button class='btn btn-small btn-outline-danger'>Delete</button></td></tr></tbody>";
                    }
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>

                <!-- ended here -->
                       
            </table>
        </div>
    </div>
    </div>
</div>

</body>
</html>
