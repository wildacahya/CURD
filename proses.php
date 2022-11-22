<!DOCTYPE html>
<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi']=="add"){


            $NIM = $_POST['NIM'];
            $nama_mahasiswa = $_POST['Nama_Mahasiswa'];
            $jenis_kelamin = $_POST['Jenis_Kelamin'];
            $alamat = $_POST['Alamat'];
            $prodi = $_POST['Prodi'];
            $foto = $_FILES['Foto']['name'];
            $email = $_POST['Email'];

            $dir = "img/";
            $tempFile = $_FILES['Foto']['tmp_name'];

            move_uploaded_file($tempFile,$dir.$foto);

            $query= "INSERT INTO tbl_mhs VALUES (null, '$NIM', '$nama_mahasiswa', '$jenis_kelamin', '$alamat', '$prodi', '$foto', '$email')"; //akan berlanjut karena udah autoincremeent
            $sql = mysqli_query($conn, $query);
            if($sql){
                header("location:index.php" );

                //echo "data berhasil ditambahkan <a href='index.php'>Home</a>";
            } else {
                echo $query;
            }
            //echo $NIM." | ".$nama_mahasiswa." | ".$jenis_kelamin." | ".$alamat." | ".$prodi." | ".$foto." | ".$email;

            //echo "<br>Tambah Data <a href='index.php'>Home</a>";
        } else if($_POST['aksi']=="edit"){

            //echo "Edit Data <a href='index.php'>Home</a>";
            //var_dump($_POST);
            $id= $_POST['id'];
            $NIM = $_POST['NIM'];
            $nama_mahasiswa = $_POST['Nama_Mahasiswa'];
            $jenis_kelamin = $_POST['Jenis_Kelamin'];
            $alamat = $_POST['Alamat'];
            $prodi = $_POST['Prodi'];
            $email = $_POST['Email'];

            $queryShow="SELECT*FROM tbl_mhs WHERE id = '$id'";
            $sqlShow=mysqli_query($conn,$queryShow);
            $result= mysqli_fetch_assoc($sqlShow);

            if($_FILES['Foto']['name']==""){
                $foto=$result['Foto'];
            }else{
                $foto=$_FILES['Foto']['name'];
                unlink("img/".$result['Foto']);
                move_uploaded_file($_FILES['Foto']['tmp_name'],'img/'.$_FILES['Foto']['name']);
            }

            $query = "UPDATE tbl_mhs SET NIM = '$NIM', Nama_Mahasiswa='$nama_mahasiswa', Jenis_Kelamin='$jenis_kelamin', Alamat='$alamat', Prodi='$prodi', Email='$email', Foto = '$foto' WHERE id='$id';";
            $sql = mysqli_query($conn,$query);
            header("location:index.php");

        }
    }
    if(isset($_GET['hapus'])){
        $id = $_GET['hapus'];
        $queryShow="SELECT*FROM tbl_mhs WHERE id = '$id'";
        $sqlShow=mysqli_query($conn,$queryShow);

        $query = "DELETE FROM tbl_mhs WHERE id = '$id';";
        $sql = mysqli_query($conn, $query);
        $result= mysqli_fetch_assoc($sqlShow);

        //var_dump($sqlShow);
        unlink("img/".$result['Foto']);

        if($sql){
            header("location:index.php");
            //echo "data berhasil ditambahkan <a href='index.php'>Home</a>";
        } else {
            echo $query;
        }
        //echo "Hapus Data <a href='index.php'>Home</a>";

    }
?>
