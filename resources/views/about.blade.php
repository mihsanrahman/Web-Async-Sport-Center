<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FutsalinAja.com</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- <link rel="stylesheet" href="Style/main.css"> -->
</head>
<style>
  .banner{
    background: url(bola.jpg) no repeat right right;
    background-size: auto;
    padding-top: 20%;
    padding-bottom: 20px;
    font-family: 'Comic Sans ms';
}
body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
img{
    float: right;
    width: 520px;
    margin-top: 60px;
    margin-right: 15px;
}

.kolom, img{
  margin-left:7px;
  border-radius:5px;
}

 section {
    margin-bottom: 50px;
    display: inline;
    margin-left: 20px;
    color: #D0C9C0;
    font-family: sans-serif;
}

h2{
    font-family: 'Comic sans ms';
    font-weight: 600;
    font-size: 40px;
    margin-top: 60px;
    margin-left: 45px;
    margin-bottom: 10px;
    color: #293462;
    /* width: 100%; */
    line-height: 50px;
}

h3{
    font-family: 'Comic sans ms';
    font-weight:200;
    font-size: 20px;
    margin-left: 45px;
    color: #D0C9C0;
    /* width: 100%; */
    margin-bottom: 45px;
}

a.tbl-pink {
    background: #243A73;
    border-radius: 25px;
    margin-top: 40px;
    margin-left: 45px;
    padding: 18px 20px 18px 20px;
    color: #ffff;
    cursor: pointer;
    font-weight: normal;
    font-family: 'comic sans ms';
    text-decoration: none;
}
p{
    margin: 10px 0px 10px 0px;
    padding: 10px 0px 10px 0px;
}
a.tbl-pink:hover{
    background: #A5BECC;
    text-decoration: none;
}
h4{
    font-family: 'comic sans ms';
    font-weight:bold;
    font-size: 25px;
    margin-top: 78px;
    margin-left: 45px;
    color: #243A73;
    /* width: 100%; */
}
.gambarhotel {
    width: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
}
.gambar-hotel {
    width: 30%;
    margin: 0 auto;
}
.gambar-hotel img{
    width: 400px;
    border-radius: 10%;
}
h5{
    font-family: 'Comic sans ms';
    font-weight: 600;
    font-size: 40px;
    margin-top: 60px;
    margin-left: 45px;
    margin-bottom: 10px;
    color: #293462;
    width: 100%;
    line-height: 50px;
    text-align: center;
}
.category-list {
    width: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
}

.kartu-category {
    width: 20%;
    margin: 0 auto;
}

.kartu-category img{
    width: 100%;
    border-radius: 50%;

}

a.tbl-htl {
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 35px;
    text-align: center;
    color: #092A35;
    text-decoration: none;
}
a.tbl-htl:hover{
    color: #A5BECC;
    text-decoration: none;
}
a.tbl-vl {
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 35px;
    text-align: center;
    color: #092A35;
    text-decoration: none;
}
a.tbl-vl:hover{
    color: #A5BECC;
    text-decoration: none;
}
a.tbl-mtl {
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 35px;
    text-align: center;
    color: #092A35;
    text-decoration: none;
}
a.tbl-mtl:hover{
    color: #A5BECC;
    text-decoration: none;
}
.kartu-category img{
    width: 100%;
    border-radius: 50%;

}

</style>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">FutsalinAja</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="wrapper">
    <section id="Home">
      <img src="images/bola.jpg" />
      <div class="Kolom">
        <p class="Deskripsi"></p>
        <h2>Lupakan Aktivitasmu<br>
          Ayo Berkeringat di Lapanganku
        </h2>
        <h3>"Selamat datang di website lapangan futsal terbaik untuk semua pecinta olahraga! Kami dengan bangga
          mempersembahkan tempat yang ideal untuk memuaskan hasrat Anda dalam bermain futsal."</h3>
        <p> <a href="register.php" class="tbl-pink">Ayo Bermain</a></p>
      </div>
    </section>
  </div>
  <div class="kolom">
    <p class="deskripsi"></p>
    <h4>Foto Lapangan</h4>
  </div>
  <div class="container">
    <div class="ro">
      <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/lapangan2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/lapngan3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/lapngan4.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  </div>


  <div class="card text-center">
    <div class="card-header">
    </div>
    <div>
      <div class="card-footer"> Website Futsal <br> Lapangan Modern dan Minimalis <br> @2023 FutsalinAja.COM</div>
    </div>
    <div class="card-footer text-muted">

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>
