<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h2> Pemesanan Tiket</h2></center><br><br>

<?php
    
    $Nama = $_GET['nama'];
    $Tujuan = $_GET['tujuan'];
    $Member = $_GET['member'];
    $Tiket = $_GET['tiket'];

   if (!empty($Nama))
   {
   		echo "Nama : ".$Nama."<br>";
   }
   if (!empty($Tujuan)) 
   {
   		if($_GET['tujuan']=='Jakarta')
   		{
   			$Tujuan = "Jakarta";
   			echo "Tujuan : ".$Tujuan."<br>";
   		}
   		else if($_GET['tujuan']=='Cirebon')
   		{
   			$Tujuan = "Cirebon";
   			echo "Tujuan : ".$Tujuan."<br>";
   		}
   		else if($_GET['tujuan']=='Bandung')
   		{
   			$Tujuan = "Bandung";
   			echo "Tujuan : ".$Tujuan."<br>";
   		}
   		else if($_GET['tujuan']=='Semarang')
   		{
   			$Tujuan = "Semarang";
   			echo "Tujuan : ".$Tujuan."<br>";
   		}
   		else if($_GET['tujuan']=='Yogyakarta')
   		{
   			$Tujuan = "Yogyakarta";
   			echo "Tujuan : ".$Tujuan."<br>";
   		}
   		else if($_GET['tujuan']=='Cirebon')
   		{
   			$Tujuan = "Cirebon";
   			echo "Tujuan : ".$Tujuan."<br>";
   		}
   }

   echo "Jumlah Tiket : ".$Tiket."<br>";
   
   if (!empty($Tujuan)) 
   {
   		if($_GET['tujuan']=='Jakarta')
   		{
   			$Sub = 10000;
   			echo "Harga : ".$Sub."<br>";
   		}
   		else if($_GET['tujuan']=='Cirebon')
   		{
   			$Sub = 15000;
   			echo "Harga : ".$Sub."<br>";
   		}
   		else if($_GET['tujuan']=='Bandung')
   		{
   			$Sub = 20000;
   			echo "Harga : ".$Sub."<br>";
   		}
   		else if($_GET['tujuan']=='Semarang')
   		{
   			$Sub = 25000;
   			echo "Harga : ".$Sub."<br>";
   		}
   		else if($_GET['tujuan']=='Yogyakarta')
   		{
   			$Sub = 20000;
   			echo "Harga : ".$Sub."<br>";
   		}
   	}

   	if (!empty($Member))
   	{
   		if ($_GET['member']=='normal') 
   		{
   			echo "Member : normal<br>";
   			$Total=$Sub;
   		}
   		else if ($_GET['member']=='VIP') 
   		{
   			echo "Member : VIP<br>";
   			$discount=$Sub*(10/100);
   			$Total=$Sub-$discount;
   		}
   	}
   	echo "Total Harga : ".$Total*$Tiket."<br><br>";

   	$filedata="data.txt";
   	$fl=fopen($filedata,"w+");

   	$txt="Nama : ".$Nama."\n";
   	fwrite($fl, $txt);
   	$txt="Tujuan : ".$Tujuan."\n";
   	fwrite($fl, $txt);
   	$txt="Jumlah Tiket : ".$Tiket."\n";
   	fwrite($fl, $txt);
   	$txt="Member : ".$Member."\n";
   	fwrite($fl, $txt);
   	$txt="Total Harga : ".$Total."\n";
   	fwrite($fl, $txt);

   	fclose($fl);

?>
</body>
</html>