<?php
include ('atas.php');
include('koneksi.php')
?> <section>
<div class="container course pb-5 pt-5">
    <h2 class="h1-responsive font-weight-bold text-center my-4">siswa</h2>
    <!--Section description-->
    
    <div class="row">
        <div class="col-md-4">
            <div class="card box">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="assets/img/lukman.jpg"
                        class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php
        $id=1;
        $result =mysqli_query($koneksi, "select * from siswa  where id_siswa = '$id' ");
            $no=1;
            while ($row=mysqli_fetch_array($result)){
            echo 
                $row['nama']; ?> </h5>
                
         <p class="card-text"><?php echo $row['nim'] ?></p>
                    <a href="#!" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <?php    $no++;
            };
        ?></h5>
                 
        </div>

        <div class="col-md-4">
            <div class="card box">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="assets/img/okta.jpeg"
                        class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php
        $id=2;
        $result =mysqli_query($koneksi, "select * from siswa  where id_siswa = '$id' ");
            $no=1;
            while ($row=mysqli_fetch_array($result)){
            echo 
                $row['nama']; ?>  </h5>
         <p class="card-text"><?php echo $row['nim'] ?> </p>
                    <a href="#!" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <?php    $no++;
            };
        ?>
        </div>

        <div class="col-md-4">
            <div class="card box">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="assets/img/murid3.jpg"
                        class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php
        $id=3;
        $result =mysqli_query($koneksi, "select * from siswa  where id_siswa = '$id' ");
            $no=1;
            while ($row=mysqli_fetch_array($result)){
            echo 
                $row['nama']; ?> </h5>
                    <p class="card-text"> <?php echo $row['nim'] ?></p>
                    <a href="#!" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <?php    $no++;
            };
        ?>
        </div>
    </div>
</div>
</section>
<?php
include('bawah.php');
?>