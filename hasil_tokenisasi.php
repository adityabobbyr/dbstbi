<?php
//membuat koneksi ke database
$host='sql303.epizy.com';
$user='epiz_26789813';
$pass='Mi11uQrGLV';
$database='epiz_26789813_stbi';

$conn=new mysqli($host,$user,$pass,$database) or die('MySql Tidak Connect');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Teknik Informatika</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/full-width-pics.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Stemming</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="query.php">Query</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="upload.php">Upload files</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hasil_tokenisasi.php">Hasil Tokenisasi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header - set the background image for the header in the line below -->
  <header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1076');">
    <img class="img-fluid d-block mx-auto" src="https://d3miunisbanksemarang.files.wordpress.com/2016/04/4ffb2-logo-unisbank1.jpg?w=640" alt="">
  </header>




    <!-- ahir havbar -->
<center> 
HASIL TOKENISASI DAN STEMMING
<br>
<br>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->



<table  border='1' Width='800'>  
<tr>
    <th> Nama File </th>
    <th> Tokenisasi </th>
    <th> Stemming Porter</th>
    <th> Stemming Nazief Adriel</th>
</tr>

<?php  
// Perintah untuk menampilkan data
$queri="Select * From dokumen" ;  //menampikan SEMUA


$hasil=mysqli_query ($conn, $queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($hasil)){
$id = $data['dokid'];
 echo "    
        <tr>
        <td>".$data['nama_file']."</td>
        <td>".$data['token']."</td>
        <td>".$data['tokenstem']."</td>
        <td>".$data['tokenstem2']."</td>
        </tr> 
		
		
		
		
		
		
		
		
		
		

		
		
		
        ";
        
}

?>




