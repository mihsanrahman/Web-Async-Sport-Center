<!DOCTYPE html>
<html>
<head>
    <title>Layanan</title>
    <style>
        body {
            background-color: white;
        }
        .navbar {
            background-color: white;
            color: white;
            padding: 10px;
            text-align: right;
        }
        .navbar a {
            color: white;
            text-decoration: none;
        }
        .item {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 10px;
        }
        .item img {
            width: 250px;
            height: 250px;
            margin-bottom: 10px;
        }
        h2 {
            font-size: 35px;
            margin-top: 20px;
        }
        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
<div class="navbar">
    <a href="{{ url('sewa') }}">Sewa</a>
</div>

<h1>Sewa Di Tempat</h1>
<h3>Di bawah ini adalah harga barang bila anda menyewa di kami maupun membelinya di kami :</h3>

<div class="item">
    <h2>Bola</h2>
    <img src="{{ asset('images/bola.jpg') }}" alt="Bola">
    <p>Harga Sewa Bola: Rp 15,000/hari</p>
    <p>Harga Beli Bola: Rp 200,000</p>
</div>

<div class="item">
    <h2>Baju Bola</h2>
    <img src="{{ asset('images/baju_bola.jpg') }}" alt="Baju Bola">
    <p>Harga Sewa Baju Bola: Rp  30,000/hari</p>
    <p>Harga Beli Baju Bola: Rp 500,000</p>
</div>

<div class="item">
    <h2>Sepatu Bola</h2>
    <img src="{{ asset('images/sepatu_bola.jpg') }}" alt="Sepatu Bola">
    <p>Harga Sewa Sepatu Bola: Rp 75,000/hari</p>
    <p>Harga Beli Sepatu Bola: Rp 300,000</p>
</div>

<div class="item">
    <h2>Air Mineral</h2>
    <img src="{{ asset('images/air_mineral.jpg') }}" alt="Air Mineral">
    <p>Harga Air Mineral: Rp 5,000/botol</p>
</div>

</body>
</html>
