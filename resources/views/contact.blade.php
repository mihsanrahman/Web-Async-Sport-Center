<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Asyncsports</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Your CSS styles here */

        /* Add animation CSS */
        .animate-fade-in {
            opacity: 0;
            animation: fade-in 1s ease-in-out forwards;
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
       
        * {
            text-decoration: none;
            margin: 0px;
            padding: 0px;
        }

        body {
            margin: 0px;
            padding: 0px;
            font-family: 'Open Sans', sans-serif;
        }

        .wrapper {
            width: 1100px;
            margin: auto;
            position: relative;
        }

        .logo a {
            font-size: 50px;
            font-weight: 800;
            float: left;
            font-family: courier;
            color: #ffffff; /* Ubah warna teks logo menjadi #35c98b */
        }

        .menu {
            float: right;
        }

        nav {
            width: 100%;
            margin: auto;
            display: flex;
            line-height: 80px;
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            background: #35c98b; /* Ubah warna latar belakang navbar menjadi #35c98b */
            z-index: 1;
            border-bottom: 1px solid #364f6b;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav ul li {
            float: left;
        }

        nav ul li a {
            color: white; /* Ubah warna teks menu menjadi putih */
            font-weight: bold;
            text-align: center;
            padding: 0px 16px 0px 16px;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        section {
            margin: auto;
            display: flex;
            margin-bottom: 50px;
        }

        .kolom {
            margin-top: 50px;
            margin-bottom: 50px;
            color: #000000; /* Ubah warna teks pada kolom menjadi #35c98b */
            font-family: 'Arial', sans-serif; /* Ubah font tulisan pada kolom menjadi Arial */
        }

        .kolom .deskripsi {
            font-size: 20px;
            font-weight: bold;
            font-family: 'Arial', sans-serif; /* Ubah font deskripsi menjadi Arial */
            color: #000000; /* Ubah warna teks deskripsi menjadi #35c98b */
        }

        h2 {
            font-family: 'Arial', sans-serif; /* Ubah font judul menjadi Arial */
            font-weight: 800;
            font-size: 45px;
            margin-bottom: 20px;
            color: #000000; /* Ubah warna teks judul menjadi #35c98b */
            width: 100%;
            line-height: 50px;
        }

        a.tbl-biru {
            background: #35c98b; /* Ubah warna tombol menjadi #35c98b */
            border-radius: 20px;
            margin-top: 20px;
            padding: 15px 20px 15px 20px;
            color: #000000; /* Ubah warna teks tombol menjadi putih */
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase; /* Ubah teks tombol menjadi huruf besar */
            font-family: 'Arial', sans-serif; /* Ubah font tombol menjadi Arial */
        }

        a.tbl-biru:hover {
            background: #00755e; /* Ubah warna tombol saat dihover menjadi #00755e */
            text-decoration: none;
        }

        a.tbl-pink {
            background: #000000; /* Ubah warna tombol menjadi putih */
            border-radius: 20px;
            margin-top: 20px;
            padding: 15px 20px 15px 20px;
            color: #ffffff; /* Ubah warna teks tombol menjadi #35c98b */
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase; /* Ubah teks tombol menjadi huruf besar */
            font-family: 'Arial', sans-serif; /* Ubah font tombol menjadi Arial */
        }

        a.tbl-pink:hover {
            background: #ff7f00;
            color: #35c98b; /* Ubah warna teks tombol saat dihover menjadi #35c98b */
            text-decoration: none;
        }

        p {
            margin: 10px 0px 10px 0px;
            padding: 10px 0px 10px 0px;
            font-family: 'Arial', sans-serif; /* Ubah font paragraf menjadi Arial */
        }

        .tengah {
            text-align: center;
            width: 100%;
        }

        .tutor-list {
            width: 100%;
            position: relative;
            display: flex;
            flex-wrap: wrap;
        }

        .kartu-tutor {
            width: 20%;
            margin: 0 auto;
        }

        .kartu-tutor img {
            width: 80%;
            border-radius: 50%;
        }

        .kartu-tutor p {
            font-family: 'Arial', sans-serif; /* Ubah font tulisan pada kartu tutor menjadi Arial */
            font-weight: 800;
            font-size: 25px;
            text-align: center;
            color: #35c98b; /* Ubah warna teks pada kartu tutor menjadi #35c98b */
        }

        .partner-list {
            width: 100%;
            position: relative;
            display: flex;
            flex-wrap: wrap;
        }

        .kartu-partner {
            width: 20%;
            margin: 0 auto;
        }

        .kartu-partner img {
            width: 150px;
            border-radius: 50%;
        }

        #contact {
            background: #dedede;
            padding: 50px 0px 50px 0px;
        }

        .footer {
            width: 100%;
            position: relative;
            display: flex;
            flex-wrap: wrap;
            margin: auto;
        }

        .footer-section {
            width: 20%;
            margin: 0 auto;
        }

        h3 {
            font-family: 'Arial', sans-serif; /* Ubah font tulisan pada footer menjadi Arial */
            font-weight: 800;
            font-size: 30px;
            margin-bottom: 20px;
            color: #35c98b; /* Ubah warna teks pada footer menjadi #35c98b */
            width: 100%;
            line-height: 50px;
        }

        #copyright {
            text-align: center;
            width: 100%;
            padding: 50px 0px 50px 0px;
            margin-top: 50px;
        }

        @media screen and (max-width: 991.98px) {
            .wrapper {
                width: 90%;
            }

            .logo a {
                display: block;
                width: 100%;
                text-align: center;
            }

            nav .menu {
                width: 100%;
                margin: 0;
            }

            nav .menu ul {
                text-align: center;
                margin: auto;
                line-height: 60px;
            }

            nav .menu ul li {
                display: inline-block;
                float: none;
            }

            section {
                display: block;
            }

            section img {
                display: block;
                width: 100%;
                height: auto;
            }

            .kartu-tutor {
                width: 50%;
            }

            .kartu-partner {
                width: 50%;
            }
        }
    

    </style>
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Asyncsports Center</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#contact">Contact</a></li>       
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <!-- untuk about -->
        <section id="about" class="animate-fade-in">
            <div class="kolom">
                <p class="deskripsi">About Us</p>
                <h2>Welcome to Asyncsports Center</h2>
                <p>AsyncSport Center adalah sebuah pusat olahraga yang menyediakan fasilitas penyewaan lapangan futsal. Berdiri pada tahun 2010, AsyncSport Center awalnya merupakan inisiatif dari sekelompok pecinta olahraga yang memiliki kecintaan khusus terhadap sepak bola. Mereka melihat adanya kebutuhan yang cukup besar akan tempat yang menyediakan lapangan futsal yang nyaman dan terjangkau bagi masyarakat sekitar.</p>
                <p>Dengan dedikasi kami untuk melayani masyarakat, AsyncSport Center terus berinovasi dan meningkatkan fasilitas serta layanan kami. Kami berkomitmen untuk terus mendukung perkembangan olahraga futsal dan menyediakan lingkungan yang inspiratif bagi setiap individu yang ingin bermain dan menikmati kegembiraan olahraga futsal di AsyncSport Center.</p>
                <p><a href="" class="tbl-pink">Learn More</a></p>
            </div>
        </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>Asyncsports </h3>
                    <p>AsyncSport Center terus berinovasi dan meningkatkan fasilitas serta layanan kami</p>
                    <p>jalan cikopo selatan no 50 , megamendung gadog pasir munchang</p>
                    <p>Kode Pos: 16770</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p><b>YouTube   : </b>Asyncsports</p>
                    <p><b>Instagram : </b>Asyncsports</p>
                    <p><b>Facebook  : </b>Asyncsports</p>
                    
                    
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p><b>YouTube: </b>Asyncsports</p>
                    <p> <strong>Contact Person:</strong> 081770153908</p>
                    <p><strong>Gmail:</strong> asyncsport@gmail.com </p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            <p>&copy; 2023 Asyncsports Center. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
