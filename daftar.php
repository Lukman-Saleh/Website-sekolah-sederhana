<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!-- End Bootstrap CSS -->

        <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--End Custom Css-->
</head>

<body>
    <div class="container login-form">
        <div class="row mt-4 justify-content-center">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="offest-md-4">
                            <h1 class="text-center mt-4 mb-4 fw-bolder">Daftar</h1>
                            <form class="form-login" action="daftar.php" method="POST">
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Nama</label>
                                    <input type="text" id="form2Example1" class="form-control" placeholder="nama" name="nama" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Alamat</label>
                                    <input type="text" id="form2Example1" class="form-control" placeholder="alamat" name="alamat" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Jurusan</label>
                                    <input type="text" id="form2Example1" class="form-control" placeholder="jurusan" name="jurusan" />
                                </div>
                                <!-- 2 column grid layout for inline styling -->

                                <!-- Submit button -->
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="col-12 btn btn-primary btn-block mb-4">Daftar</button>
                                </div>
                                <p class="text-center"> Don't have account yet?<a href="login.php" class="text-primary"> Sign up</a></p>
                            </form>
                            <?php
    $koneksi = mysqli_connect("localhost","root","","sekolah")
    or die("koneksi gagal".mysqli_connect_error());
    /*Mengecek apabila tombol simpan di klik*/
        if(isset($_POST['submit'])){/*Menerima dan Menampung data*/
            $nama = $_POST['nama'];
            $alamat= $_POST['alamat'];
            $jurusan = $_POST['jurusan'];
            /*Melakukan penyimpanan data*/
            $query = "INSERT INTO pendaftaran (nama, alamat, jurusan) VALUES ('$nama', '$alamat', '$jurusan')";

            if (mysqli_query($koneksi, $query)){
				?>
				<script language="JavaScript">alert('Anda Berhasil Mendaftar ');
				document.location=('index.html');</script><?php
            } else {
                echo "Error : " . $query . "<br>" . mysqli_error($koneksi); } }
    ?>
	

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>