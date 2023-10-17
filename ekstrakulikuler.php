<?php 
include ('atas.php');
include('koneksi.php');
?>

    <!--awal ektrakulikuler-->
    <section id="ekstrakulikuler">
      <div class="container">
        <div class="section-title">
          <h2>Ekstrakulikuler</h2>
        </div>
        <div class="section-body">
          <div class="row">
            <div class="col-md-4">
              <div class="section-body-item">
                <div class="row row-2">
                  <div class="col-md-3"><i class="fas fa-user"></i></div>
                  <div class="col-md-9">
                    <h4>  
                    <?php
        $id=1;
        $result =mysqli_query($koneksi, "select * from ekstrakulikuler  where id_ekstrakulikuler = '$id' ");
            $no=1;
            while ($row=mysqli_fetch_array($result)){
            echo "
            <tr>
                <td width='150'>".$row['nama']."</td>
                </tr>
                    ";
            $no++;
            };
        ?></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="section-body-item">
                <div class="row row-2">
                  <div class="col-md-3"><i class="fas fa-user"></i></div>
                  <div class="col-md-9">
                    <h4><?php
        $id=2;
        $result =mysqli_query($koneksi, "select * from ekstrakulikuler  where id_ekstrakulikuler = '$id' ");
            $no=1;
            while ($row=mysqli_fetch_array($result)){
            echo "
            <tr>
                <td width='150'>".$row['nama']."</td>
                </tr>
                    ";
            $no++;
            };
        ?></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="section-body-item">
                <div class="row row-2">
                  <div class="col-md-3"><i class="fas fa-user"></i></div>
                  <div class="col-md-9">
                    <h4><?php
        $id=3;
        $result =mysqli_query($koneksi, "select * from ekstrakulikuler  where id_ekstrakulikuler = '$id' ");
            $no=1;
            while ($row=mysqli_fetch_array($result)){
            echo 
                $row['nama'];
                
            $no++;
            };
        ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="section-body-item">
                <div class="row row-2">
                  <div class="col-md-3"><i class="fas fa-user"></i></div>
                  <div class="col-md-9">
                    <h4><?php
        $id=4;
        $result =mysqli_query($koneksi, "select * from ekstrakulikuler  where id_ekstrakulikuler = '$id' ");
            $no=1;
            while ($row=mysqli_fetch_array($result)){
            echo 
                $row['nama'];
                
            $no++;
            };
        ?></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="section-body-item">
                <div class="row row-2">
                  <div class="col-md-3"><i class="fas fa-user"></i></div>
                  <div class="col-md-9">
                    <h4><?php
        $id=5;
        $result =mysqli_query($koneksi, "select * from ekstrakulikuler  where id_ekstrakulikuler = '$id' ");
            $no=1;
            while ($row=mysqli_fetch_array($result)){
            echo 
                $row['nama'];
                
            $no++;
            };
        ?></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="section-body-item">
                <div class="row row-2">
                  <div class="col-md-3"><i class="fas fa-user"></i></div>
                  <div class="col-md-9">
                    <h4><?php
        $id=6;
        $result =mysqli_query($koneksi, "select * from ekstrakulikuler  where id_ekstrakulikuler = '$id' ");
            $no=1;
            while ($row=mysqli_fetch_array($result)){
            echo 
                $row['nama'];
                
            $no++;
            };
        ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--akhir ekstrakulikuler-->

<?php 
include('bawah.php')
?>