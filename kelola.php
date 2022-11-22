<!DOCTYPE html>
<?php 
    include 'koneksi.php';

       $id = '';
       $NIM ='';
       $nama_mahasiswa = '';
       $jk = '';
       $alamat = '';
       $prodi = '';
       $email = '';

    if(isset($_GET['ubah'])){
       $id = $_GET['ubah'];

       $query = "SELECT * FROM tbl_mhs WHERE id = '$id';";
       $sql = mysqli_query($conn,$query);

       $result = mysqli_fetch_assoc($sql);

       $NIM = $result['NIM'];
       $nama_mahasiswa = $result['Nama_Mahasiswa'];
       $jk = $result['Jenis_Kelamin'];
       $alamat = $result['Alamat'];
       $prodi = $result['Prodi'];
       $email = $result['Email'];

       //var_dump($result);

       //die();
    }    
?>

<html>
<head>
    <meta charset="utf-8">
    <!--bootstraps-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>CRUD</title>
     <!--font-->
     <link rel="stylesheet" href="font/css/font-awesome.min.css">
    
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="logo unesa.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Data Mahasiswa
          </a>
        </div>
    </nav>
    <div class="container-fluid mt-3">
        <form method="POST" action="proses.php" enctype="multipart/form-data"> <!--ini form-->
        <input type="hidden" value="<?php echo $id;?>" name="id">
            <div class="mb-3 row">
                <label for="NIM" class="col-sm-2 col-form-label">
                    NIM
                </label>
                <div class="col-sm-10">
                <input required type="text" name="NIM" class="form-control" id="NIM" placeholder="Ex:2108365141" value="<?php echo $NIM; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama_mahasiswa" class="col-sm-2 col-form-label">
                    Nama Mahasiswa
                </label>
                <div class="col-sm-10">
                <input required type="text" name= "Nama_Mahasiswa"class="form-control" id="nama_mahasiswa" placeholder="" value="<?php echo $nama_mahasiswa; ?>">
                </div>
            </div>
        <div class="mb-3 row">
                    <label for="jk" class="col-sm-2 col-form-label">
                        Jenis Kelamin
                    </label>
                    <div class="col-sm-10">
                        <select required id="jk" name= "Jenis_Kelamin" class="form-select" aria-label="Default select example">
                            <option <?php if($jk == 'Laki-Laki'){echo "selected";} ?>>Laki-Laki</option>
                            <option <?php if($jk == 'Perempuan'){echo "selected";} ?>>Perempuan</option>
                        </select>
                    </div>
            <div class="mb-3 mt-3 row">
                <label for="Alamat" class="col-sm-2 col-form-label">
                Alamat
                </label>
                <div class="col-sm-10">
                    <textarea required class="form-control" id="Alamat" name="Alamat" rows="3"><?php echo $alamat; ?></textarea>
                </div>
            </div>   
            <div class="mb-3 row">
                <label for="prodi" class="col-sm-2 col-form-label">
                    Prodi
                </label>
                <div class="col-sm-10">
                    <select  required id="prodi" name="Prodi" class="form-select" aria-label="Default select example">
                        <option <?php if($prodi == 'S1 Teknik Informatika'){echo "selected";} ?>>S1 Teknik Informatika</option>
                        <option <?php if($prodi == 'S1 Sistem Informasi'){echo "selected";} ?>>S1 Sistem Informasi</option>
                        <option <?php if($jk == 'S1 Pendidikan Teknilogi Informasi'){echo "selected";} ?>>S1 Pendidikan Teknologi Informasi</option>
                    </select>
                </div>
            <div class="mb-3 mt-3 row">
                <label for="foto" class="col-sm-2 col-form-label">
                    Foto
                </label>
                <div class="col-sm-10">
                    <input <?php if(isset($_GET['ubah'])){echo "required";} ?>required class="form-control" type="file" name="Foto" id="foto" accept="image/*">
                </div>
            </div>   
            <div class="mb-3 row">
                <label for="Email" class="col-sm-2 col-form-label">
                    Email
                </label>
                <div class="col-sm-10">
                <input required type="email" name="Email" class="form-control" id="Email" placeholder="baba@gmail.com" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="mb-3 mt-3 row">
                <div class="col">
                    <?php 
                    if(isset($_GET['ubah'])){
                    ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            Simpan
                        </button>
                    <?php
                        }else{
                    ?>
                    <button type="submit" name="aksi" value="add" class="btn btn-primary">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                        Tambah
                        
                        
                        </button>
                    <?php
                        }
                    ?>
                    <a href="index.php" type="button" class="btn btn-danger">
                        <i class="fa fa-reply" aria-hidden="true"></i>
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>
<footer>
    
</footer>
</html>
