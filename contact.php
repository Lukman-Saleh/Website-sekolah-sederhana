<?php
include('atas.php')
?>  
<center>
  <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                    <!--Section description-->
                    

                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6 mb-md-0 mb-5">
                            <form id="contact-form" name="contact-form" action="contact.php" method="POST">

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="name" name="nama" class="form-control">
                                            <label for="name" class="">Nama</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="email" name="email" class="form-control">
                                            <label for="email" class="">Email</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <textarea type="text" id="message" name="keterangan" rows="2"
                                                class="form-control md-textarea"></textarea>
                                            <label for="message">Masukan Pesan</label>
                                        </div>

                                    </div>
                                </div>
                          
                                    <!-- Submit button -->
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="col-12 btn btn-primary btn-block mb-4">Kirim</button>
                                </div>
                            </form>
                            <center>
                            
                        <!--Grid column-->

                        <!--Grid column-->
                       
                    </div>

                </section>
                <!--Section: Contact v.2-->
               
            </div>
        </section>
        <?php
    $koneksi = mysqli_connect("localhost","root","","sekolah")
    or die("koneksi gagal".mysqli_connect_error());
    /*Mengecek apabila tombol simpan di klik*/
        if(isset($_POST['submit'])){/*Menerima dan Menampung data*/
            $nama = $_POST['nama'];
            $email= $_POST['email'];
            $keterangan = $_POST['keterangan'];
            /*Melakukan penyimpanan data*/
            $query = "INSERT INTO masukan (nama, email, keterangan) VALUES ('$nama', '$email', '$keterangan')";

            if (mysqli_query($koneksi, $query)){
				?>
				<script language="JavaScript">alert('Anda Berhasil Mendaftar ');
				document.location=('index.html');</script><?php
            } else {
                echo "Error : " . $query . "<br>" . mysqli_error($koneksi); } }
    ?>
	

        </center>
        <br>
<?php 
include('bawah.php')
?>