<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cindy Vadella</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 
include('dbconnect.php');
$query = "SELECT * FROM buku WHERE id_buku='$id'";
$result = mysqli_query($conn, $query);
?>
	<div class="container" style="width:700px; padding-top: 0px; padding-bottom: 50px;">
	<center><img src="logo_tb.png" class="img-fluid" width=300px></center>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<h3><u><b><center>Update Data Buku</center></b></u></h3>
	<form role="form" action="edit.php" method="get">
		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		?>
		<input type="hidden" name="id_bk" value="<?php echo $row['id_buku']; ?>">
		<div class="form-group">
		<label>Judul Buku</label>
		<input type="text" name="judul_bk" class="form-control" value="<?php echo $row['judul_buku']; ?>">			
		</div>
		<div class="form-group">
		<label>Penerbit Buku</label>
		<input type="text" name="terbit_bk" class="form-control" value="<?php echo $row['penerbit_buku']; ?>">			
		</div>
		<div>
        <label for="genre_bk">Genre Buku : </label>
        <?php $genre = ['genre_buku']; ?>
        <select name="genre_bk">
            <option <?php echo ($genre == 'Agama') 				? "selected": "" ?>>Agama</option>
            <option <?php echo ($genre == 'Catatan Harian') 			? "selected": "" ?>>Catatan Harian</option>
            <option <?php echo ($genre == 'Komik') 					? "selected": "" ?>>Komik</option>
			<option <?php echo ($genre == 'Koran') 					? "selected": "" ?>>Koran</option>
			<option <?php echo ($genre == 'Majalah') 				? "selected": "" ?>>Majalah</option>
			<option <?php echo ($genre == 'Novel') 					? "selected": "" ?>>Novel</option>
			<option <?php echo ($genre == 'Buku Anak') 	? "selected": "" ?>>Buku Anak</option>
			<option <?php echo ($genre == 'Syair/ Puisi') 	? "selected": "" ?>>Syair/ Puisi</option>
			<option <?php echo ($genre == 'Ensiklopedia') 	? "selected": "" ?>>Ensiklopedia</option>
			<option <?php echo ($genre == 'Panduan') 	? "selected": "" ?>>Panduan</option>
			<option <?php echo ($genre == 'Kamus') 	? "selected": "" ?>>Kamus</option>
			<option <?php echo ($genre == 'Karya Ilmiah') 	? "selected": "" ?>>Karya Ilmiah</option>
			<option <?php echo ($genre == 'Hobi') 	? "selected": "" ?>>Hobi</option>
			<option <?php echo ($genre == 'Biografi') 	? "selected": "" ?>>Biografi</option>
        </select>
    	</div>
		<div class="form-group">
		<label>Harga Buku</label>
		<input type="text" name="harga_bk" class="form-control" value="<?php echo $row['harga_buku']; ?>">			
		</div>
		<button type="submit" class="btn btn-success btn-block">Update Buku</button>
		<?php 
		}
		mysqli_close($conn);
		?>				
</form>
</div>
</div>
</body>
</html> 