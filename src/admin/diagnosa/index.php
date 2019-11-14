<!DOCTYPE html>
<html lang="en">

<!-- Header -->
<?php include "header.php";?>


<!-- body -->

<div class="container" style="margin-top:30px">
  <div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Diagnosa</h1>
        
        <div class="row" style="margin-bottom: 20px">
        
            <div class="col-sm-6">
                <a href="form_add_diagnosa.html">
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

        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr class="text-truncate">
                        <th scope="col">
                            Kode Diagnosa
                        </th>
                        <th scope="col">
                            Nama Diagnosa
                        </th>
                        <th scope="col">
                            Nilai Atas
                        </th>
                        <th scope="col">
                            Nilai Bawah
                        </th>
                        <th scope="col">
                            Solusi/Suggestion
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

                $sql = "SELECT kode_diagnosa, nama_diagnosa, skoratas_diagnosa, skorbawah_diagnosa, solusi FROM diagnosa";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tbody><tr><td>" . $row["kode_diagnosa"] . " </td><td>" . $row["nama_diagnosa"] . "</td><td>" . $row["skoratas_diagnosa"] . "</td><td>" . $row["skorbawah_diagnosa"] .  "</td><td>" . $row["solusi"] . "</td><td><div class='row' style='margin-bottom: 10px'><button class='btn btn-small btn-outline-success'>Edit</button></div><div class='row'><button class='btn btn-small btn-outline-danger'>Delete</button></td></tr></tbody>";
                    }
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>                

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
