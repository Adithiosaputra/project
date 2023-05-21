<!-- menyimpan -->
<?php

error_reporting(E_ALL);

include_once("config.php");

// echo "<pre>";
//     print_r($_POST);
// echo "</pre>";

if(isset($_GET))
{   
    if($_GET["modul"]=="delete"){

        $id = $_GET['id'];
 
        $result = mysqli_query($mysqli, "DELETE FROM tbl_barang WHERE id='$id'");
        
    }
    header("location: produk.php");
}

if(isset($_POST))
{

    if($_POST["modul"]=="input"){

        $produk = $_POST['nama_produk'];
        $jenis = $_POST['jenis_produk'];
        $brand = $_POST['nama_brand'];
        
        // include database connection file
        
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tbl_barang (nmproduk,jnproduk,brand) VALUES('$produk','$jenis','$brand')");
        
        // Show message when user added
        echo "Berhasil Menambahkan Data";
    
        header("location: produk.php");
    
    }
    
    elseif($_POST["modul"]=="edit"){
        
        $id = $_POST['id'];
        $produk = $_POST['nama_produk'];
        $jenis = $_POST['jenis_produk'];
        $brand = $_POST['nama_brand'];
    
        $result = mysqli_query($mysqli, "UPDATE tbl_barang SET nmproduk='$produk',jnproduk='$jenis',brand='$brand' WHERE id=$id");
    
        header("location: produk.php");
    
    }
    
}


 

 ?>
 <!-- menyimpan akhir -->

 