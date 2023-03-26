<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
            $url = 'http://www.omdbapi.com/?apikey=3335b86f&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>top movies</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="Tanpa Judul.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">batman</h5>
        <p class="card-text">Film menceritakan tentang Batman di tahun keduanya memerangi kejahatan, 
          film tersebut melihat Batman mengungkap korupsi
           di Kota Gotham saat mengejar The Riddler (Paul Dano), seorang pembunuh berantai
            yang menargetkan orang elit di Gotham.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="before.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Before I Met You</h5>
        <p class="card-text">Before I Met You menceritakan seorang perempuan yang baru saja pindah sekolah bernama Gadis. 
          Di sekolahnya yang baru, ia bertemu dengan seorang laki-laki bernama Bara.
           Bara merupakan playboy di sekolah tersebut dan Gadis berhasil mendapat perhatian darinya dari hari pertama masuk.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gatotkaca.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Gatotkaca</h5>
        <p class="card-text">Gatotkaca mengisahkan titisan superhero legendaris di era modern yang diadaptasi
           melalui literatur pewayangan India dan beberapa daerah di Indonesia. Berikut sinopsis film Satria Dewa: Gatotkaca.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="luca.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Luca</h5>
        <p class="card-text">ilm Luca menceritakan tentang petualangan monster laut berusia 13 tahun bernama Luca Paguro.
           Sehari-hari, Luca bertugas menggembala ikan-ikan ternak milik keluarganya. Suatu hari,
            Luca menemukan barang-barang manusia yang jatuh dari kapal. Meski demikian, 
            monster laut tidak boleh terkena cipratan air.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="mouth.webp" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title"> The Big Mouth</h5>
        <p class="card-text">Film besutan sutradara George Miller ini mengisahkan tentang pemberontakan Max Rockatansky yang diperankan oleh Tom Hardy.
           Max diceritakan harus berurusan dengan anak buah dari pemimpin wilayah Citadel, Immortan Joe (Hugh Keays-Byrne).</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="blood.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Blood</h5>
        <p class="card-text">Kukira Kau Rumah merupakan sebuah film tentang kesehatan mental yang rilis pada 2021. Drama ini menyoroti isu kesehatan mental yang menjadi
           sorotan remaja masa sekarang. Sutradara film ini adalah Umay Shahab, dengan penulis skenario Mony Tiwa dan Imam Salimy.</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
