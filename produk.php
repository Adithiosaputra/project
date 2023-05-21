<html>
    <?php

        include('header.php');
    
    ?>
    <body>
        <div class="container">

            <!--- navbar --->
            <?php
            
            include('menu.php');
            
            ?>
            <!--- navbar akhir --->


            <!--- card --->
            <div class="card">
                <div class="card-header">
                    SELAMAT DATANG
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-12 mb-4">
                        <a class="btn3" href="input.php" role="button">Add Data</a>
                        </div>
                        <div class="col-12">
                            <!-- table -->
             <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="">
                                <th >No</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Jenis Produk</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php 
                            include "config.php";

                            $sql = "SELECT * FROM tbl_barang ORDER BY id DESC";
                            $result = mysqli_query($mysqli,$sql);

                            $nomor = 1;
                            while($data = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $data['nmproduk']; ?></td>
                                <td><?php echo $data['jnproduk']; ?></td>
                                <td><?php echo $data['brand']; ?></td>
                                <td>
                                <a class="btn1 btn-primary" href="edit.php?id=<?php echo $data['id']; ?>" role="button">Edit</a>
                                <a class="btn2 btn-danger" href="proses.php?modul=delete&id=<?php echo $data['id']; ?>">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <!-- table akhir -->
                        </div>
                    </div>
            
                </div>
            </div>
            

        </div>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>