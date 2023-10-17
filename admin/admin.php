<?php 
require('atas.php')
?>
 
 <div class="main-content">
			     <div class="row">
				    <div class="col-md-12">
					   <div class="table-wrapper">
					     
					   <div class="table-title">
					     <div class="row">
						     <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
							    <h2 class="ml-lg-2">Data Admin</h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
							   <i class="material-icons">&#xE147;</i>
							   <span>Tambah Admin</span>
							   </a>
							   
							 </div>
					     </div>
					   </div>
					   
					   <table class="table table-striped table-hover">
					      <thead>
						     <tr>
							 <th>
							 <th>nama</th>
							 <th>User Name</th>
                             <th>Password</th>
                             <th>Action</th>
							 </tr>
						  </thead>
						  <?php
                            include ('koneksi.php');
                             $result =mysqli_query($koneksi, "SELECT * from admin order by id_admin ASC");
                             echo "<center><h3>Data Siswa </h3></center>";
                             $no=1;
                             while ($row=mysqli_fetch_array($result)){
								$id_admin=$row['id_admin'];
								$nama=$row['nama'];
								$username=$row['username'];
								$password=$row['password'];
								?>
							<tr>
							<th><?php echo $no; ?></th>
								<th><?php echo $row['nama']; ?></th>
								<th><?php echo $row['username']; ?></th>
								<th><?php echo $row['password']; ?></th>
							 <th>
							    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
                         </tr>
						 <?php
                         "";
                         $no++;
                        };
                         ?>
						  
					   </table>
					
					   
					   </div>
					</div>
					
					<form action="admin.php" method="POST">
		<div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
		    <label>Nama</label>
			<input type="text" name="nama" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Id admin</label>
			<input type="text" name="id_admin" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Username</label>
			<input type="text" name="username" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>password</label>
			<input type="password" name="password" class="form-control" required>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
		<button type="submit" name="submit" class="bint- btn-success">tambah</button>
      </div>
    </div>
  </div>
</div>
</form>			

<?php
    $koneksi = mysqli_connect("localhost","root","","sekolah")
    or die("koneksi gagal".mysqli_connect_error());
    /*Mengecek apabila tombol simpan di klik*/
        if(isset($_POST['submit'])){/*Menerima dan Menampung data*/
			$id_admin = $_POST['id_admin'];
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            /*Melakukan penyimpanan data*/
            $query = "INSERT INTO admin (id_admin, nama, username, password) VALUES ('$id_admin','$nama', '$username','$password')";
            if (mysqli_query($koneksi, $query)){
				?>
				<script language="JavaScript">alert('Data berhasil ditambahkan');
				document.location=('admin.php');</script><?php
            } else {
                echo "Error : " . $query . "<br>" . mysqli_error($koneksi); } }
    ?>
		 <div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this Records</p>
		<p class="text-warning"><small>this action Cannot be Undone,</small></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
		<a href='hapus-guru.php?hapus-id-guru="<?php $row['id_guru']; ?>"'>Hapus</a>
      </div>
    </div>
  </div>
</div>

<!--delete>
<?php 
        if(isset($_GET['hapus-id-guru'])){
            $id = $_GET['hapus-id-guru'];
            $del="DELETE FROM guru where id_guru='$id'";
            $del=mysqli_query($koneksi,$del);
            ?>
            <script language="JavaScript">alert('Data Berhasil Dihapus');
            document.location=('guru.php');</script>
        <?php
            
         } else {
            echo "gagal hapus";
         } 
        ?>



<?php 
require('bawah.php');
?>
