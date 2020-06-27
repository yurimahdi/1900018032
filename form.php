<!DOCTYPE html>
<html>
<head>
	<title>Validasi Form</title>
</head>
<body>
	<center><h2>Validasi Form</h2></center>
	<?php 
		
		if (isset($_GET['submit'])) 
		{
			$name = $_GET['nama'];
			$NIM = $_GET['nim'];
			
			if (!empty($name) and !empty($NIM)) 
			{
				echo "Nama : ".$name."<br>";
				echo "NIM : ".$NIM."<br>";
			} 
			else 
			{
				echo "Data anda tidak lengkap <br>";
				return 0;
			}

			$matkul = $_GET['matkul'];
			
			if (!empty($matkul)) 
			{
				if ($_GET['matkul']=='matkul1') 
				{
					$matkul = "Pemrograman Web";
					echo "Mata Kuliah Hari Ini : ".$matkul."<br>";
				} 
				elseif ($_GET['matkul']=='matkul2') 
				{
					$matkul = "Algoritma Pemrograman";
					echo "Mata Kuliah Hari Ini : ".$matkul."<br>";
				} 
				elseif ($_GET['matkul']=='matkul3') 
				{
					$matkul = "Manajemen Data Dan Informasi";
					echo "Mata Kuliah Hari Ini : ".$matkul."<br>";
				}
				elseif ($_GET['matkul']=='matkul4') 
				{
					$matkul = "Aljabar Linear Dan Matriks";
					echo "Mata Kuliah Hari Ini : ".$matkul."<br>";
				} 
				elseif ($_GET['matkul']=='matkul5') 
				{
					$matkul = "Pendidikan Kewarganergaraan";
					echo "Mata Kuliah Hari Ini : ".$matkul."<br>";
				} 
				elseif ($_GET['matkul']=='matkul6') 
				{
					$matkul = "Matematika Diskrit";
					echo "Mata Kuliah Hari Ini : ".$matkul."<br>";
				} 
				elseif ($_GET['matkul']=='matkul7') 
				{
					$matkul = "Arsitektur Komputer";
					echo "Mata Kuliah Hari Ini : ".$matkul."<br>";
				}
			}
			
			$kelas = $_GET['kelas'];
			
			if (!empty($kelas)) 
			{
				if ($_GET['kelas']=='a') 
				{
					echo "Kelas : A <br>";
				} 
				elseif ($_GET['kelas']=='b') 
				{
					echo "Kelas : B <br>";
				} 
				elseif ($_GET['kelas']=='c') 
				{
					echo "Kelas : C <br>";
				} 
				elseif ($_GET['kelas']=='d') 
				{
					echo "Kelas : D <br>";
				} 
				elseif ($_GET['kelas']=='e') 
				{
					echo "Kelas : E <br>";
				} 
				elseif ($_GET['kelas']=='f') 
				{
					echo "Kelas : F <br>";
				} 
				elseif ($_GET['kelas']=='g') 
				{
					echo "Kelas : G <br>";
				} 
				elseif ($_GET['kelas']=='h') 
				{
					echo "Kelas : H <br>";
				} 
				elseif ($_GET['kelas']=='i') 
				{
					echo "Kelas : I <br>";
				}
			} 
		}
	 ?>
</body>
</html>