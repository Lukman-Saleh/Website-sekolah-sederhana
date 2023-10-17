<?php 
include ('atas.php');

?>

<!--Awal tenaga pendidik-->
<section>
            <div class="container course pb-5 pt-5">
            <div class="section-title">
          <h2>Tanaga Pendidik</h2>
        </div>
                <!--Section description-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="assets/img/foto-guru-1.jpg"
                                    class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php
                                include ('koneksi.php');
        $id=13;
        $result =mysqli_query($koneksi, "select * from guru  where id_guru = '$id' ");
            $no=1;
            while ($row=mysqli_fetch_array($result)){
            echo 
                $row['nama'];
        ?></h5>
                                <p class="card-text"><?php echo $row['pengampu'] ?></p>
                                
                            </div>
                            <?php   $no++;
            }; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="assets/img/foto-guru-2.jpg"
                                    class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php
                                include ('koneksi.php');
        $id=14;
        $result =mysqli_query($koneksi, "select * from guru  where id_guru = '$id' ");
            $no=1;
            while ($row=mysqli_fetch_array($result)){
            echo 
                $row['nama'];
        ?></h5>
                                <p class="card-text"><?php echo $row['pengampu'] ?></p>
                                
                            </div>
                            <?php   $no++;
            }; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="assets/img/foto-guru-3.jpg"
                                    class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php
                                include ('koneksi.php');
        $id=2;
        $result =mysqli_query($koneksi, "select * from guru  where id_guru = '$id' ");
            $no=1;
            while ($row=mysqli_fetch_array($result)){
            echo 
                $row['nama'];
        ?></h5>
                                <p class="card-text"><?php echo $row['pengampu'] ?></p>
                                
                            </div>
                            <?php   $no++;
            }; ?>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
include('bawah.php')
?>