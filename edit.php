
<?php

include('config.php');
$id = $_GET['id'];
 

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tbl_barang WHERE id=$id");
$data = mysqli_fetch_array($result);
 
?>


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
                    INPUT PRODUK
                </div>
                <div class="card-body"><br>
            <!--- card akhir --->

                 <!--- form --->
                <form action="proses.php?id=<?PHP echo $_GET['id']; ?>" method="post">
                    <input type="hidden" name="modul" value="edit">
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <div class="form-group">
                        <label for="namaproduk">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" placeholder="Masukan Nama Produk" value="<?php echo $data['nmproduk']; ?>">
                    </div><br>
                    
                    <div>
                    <label >Jenis Produk</label><br>
                        <div class="form-check form-check-inline">
                            <input class="Radio1" type="radio" name="jenis_produk" value="Shoes" <?php if($data['jnproduk']=="Shoes"){ echo "checked"; } ?>>
                            <label class="form-check-label" for="Shoes"> Shoes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="Radio2" type="radio" name="jenis_produk" value="Apparel" <?php if($data['jnproduk']=="Apparel"){ echo "checked"; } ?> >
                            <label class="form-check-label" for="Apparel"> Apparel</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="Radio3" type="radio" name="jenis_produk" value="Accessories" <?php if($data['jnproduk']=="Accessories"){ echo "checked"; } ?> >
                            <label class="form-check-label" for="Accessories"> Accessories</label>
                        </div>
                    </div><br>

                    <div class="form-group ">
                        <label for="inputState">Brand</label>
                        <select id="inputState" name="nama_brand" class="form-control">
                            <option selected>Pilih Brand</option>
                            <option value="specs" <?php if($data['brand']=="specs"){ echo "selected"; } ?>>SPECS</option>
                            <option value="piero" <?php if($data['brand']=="piero"){ echo "selected"; } ?>>PIERO</option>
                            <option value="mizuno" <?php if($data['brand']=="mizuno"){ echo "selected"; } ?>>MIZUNO</option>
                            <option value="nike" <?php if($data['brand']=="nike"){ echo "selected"; } ?>>NIKE</option>
                            <option value="adidas" <?php if($data['brand']=="adidas"){ echo "selected"; } ?>>ADIDAS</option>
                        </select>
                    </div>

                    <br></br>
                    <button type="submit" class="btn btn-Success" name="Submit" value="save">Save</button>
                    <button type="reset" class="btn btn-danger" name="Reset">Reset</button>
                    <a class="btn btn-primary" href="produk.php" role="button">Back</a>
                    
                </form>
                 <!--- form akhir--->

                </div>
            </div>
            

        </div>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>