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
                <form action="proses.php" method="post">
                    <input type="hidden" name="modul" value="input">
                    <div class="form-group">
                        <label for="namaproduk">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" placeholder="Masukan Nama Produk">
                    </div><br>
                    
                    <div>
                    <label >Jenis Produk</label><br>
                        <div class="form-check form-check-inline">
                            <input class="Radio1" type="radio" name="jenis_produk" value="Shoes">
                            <label class="form-check-label" for="Shoes"> Shoes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="Radio2" type="radio" name="jenis_produk" value="Apparel">
                            <label class="form-check-label" for="Apparel"> Apparel</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="Radio3" type="radio" name="jenis_produk" value="Accessories" >
                            <label class="form-check-label" for="Accessories"> Accessories</label>
                        </div>
                    </div><br>

                    <div class="form-group ">
                        <label for="inputState">Brand</label>
                        <select id="inputState" name="nama_brand" class="form-control">
                            <option selected>Pilih Brand</option>
                            <option value="specs">SPECS</option>
                            <option value="piero">PIERO</option>
                            <option value="mizuno">MIZUNO</option>
                            <option value="nike">NIKE</option>
                            <option value="adidas">ADIDAS</option>
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