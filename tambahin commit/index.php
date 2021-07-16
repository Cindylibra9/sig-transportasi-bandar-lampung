<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Cindy & Vadella</title>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
</head>
<body>

	<header class="py-5 bg-danger">
		<center><img src="logo_tb.png" class="img-fluid" width=500px></center>
    </header>

	<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Daftar buku</li>
    </ol>
    </nav>

	<?php
	include('dbconnect.php');
	$query = "SELECT * FROM buku";
	$result = mysqli_query($conn , $query);?>
	<div class="container" style="width: 1300px; padding-top: 0px; padding-bottom: 30px;">
		<div class="row">
		<div class="col-sm-3">
		<h2><b><center>Tambahkan Buku</center></b></h2>
			<form role="form" action="insert.php" method="post">
			<div class="form-group">
			<label>Judul Buku : </label>
			<input type="text" name="judul_bk" class="form-control">
			</div>
			<div class="form-group">
			<label>Penulis Buku : </label>
			<input type="text" name="terbit_bk" class="form-control">
			</div>
			<p>
			<label for="genre_bk">Jenis Buku : </label><br>
			<select name="genre_bk">
				<option select=" "></option>
				<option>Agama</option>
				<option>Catatan Harian</option>
				<option>Komik</option>
				<option>Koran</option>
				<option>Majalah</option>
				<option>Novel</option>
				<option>Buku Sekolah</option>
				<option>Buku Anak</option>
				<option>Syair/ Puisi</option>
				<option>Ensiklopedia</option>
				<option>Panduan</option>
				<option>Kamus</option>
				<option>Karya Ilmiah</option>
				<option>Hobi</option>
				<option>Biografi</option>
			</select>
			</p>
			<div class="form-group">
			<label>Harga Buku (Rp.): </label>
			<input type="text" name="harga_bk" class="form-control" placeholder="Contoh : 100000 (tanpa tanda baca)">
			</div>
			<button type="submit" class="btn btn-success btn-block">Tambahkan</button>					
</form>		
</div>
</body>
</html>
		<div class="col-sm-9">
		<h2><b><center>Daftar Buku</center></b></h2>
		<table class="table table table-hover dtabel">
		<thead class="bg-danger text-black">
			<tr>
			<th>No</th>
			<th>Judul Buku</th>
			<th>Penulis Buku</th>
			<th>Jenis Buku</th>
			<th>Harga Buku</th>
			<th>Aksi</th>
			</tr>
			</thead>
		<tbody> 					
		<?php
		if(isset($_POST["cari"])){
			$search = $_POST['keyword'];
			$query = $conn->query("SELECT * FROM buku WHERE judul_buku='$judul' , penerbit_buku='$penerbit' , genre_buku='$genre' , harga_buku='$harga' WHERE id_buku='$id' ");
		} else {
			$query = $conn->query("SELECT * FROM buku ORDER BY id_buku ");
		}
			$no = 1;  
			while ($row = mysqli_fetch_assoc($result)) {?>
			<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row['judul_buku']; ?></td>
			<td><?php echo $row['penerbit_buku']; ?></td>
			<td><?php echo $row['genre_buku']; ?></td>
			<td><?php echo $row['harga_buku']; ?></td>
			<td>
			<a href="editform.php?id=<?php echo $row['id_buku'];?>" class="btn btn-warning" role="button">Ubah</a>
			<a href="delete.php?id=<?php echo $row['id_buku']?>" 	class="btn btn-danger" 	role="button">Hapus</a>
			</td>
			</tr>
		<?php
		}
		mysqli_close($conn); 
		?>
		</tbody>
		</table>
		</div>	
		</div>
		</div>
		<br>
		<br>
		<div class="p-2 bg-dark text-white" align=center>Copyrights Cindy & Vadella</div>
</body>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('.dtabel').DataTable();
	} );
	</script>


</html> 