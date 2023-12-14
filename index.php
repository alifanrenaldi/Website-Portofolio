<?php 
    require 'Pendidikan.php';
    $pendidikann = query("SELECT * FROM pendidikan");
    require 'Interest.php';
    $interestt = queryi("SELECT * FROM interest");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/85f7bb8c96.js" crossorigin="anonymous"></script>
    <title>Beranda</title>
    <style>
.column {
  float: left;
}

.left {
  width: 25%;
}

.right {
  width: 75%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
    .column {
      width: 100%;
    }
}
.card {
    padding: 25px;
    text-align: center;
    background-color: #fde6e9;
}
.card2 {
    padding-bottom: 140px;
    text-align: center;
    background-color: #ffffff;
}
.card3 {
    padding-bottom: 50px;
    text-align: center;
    background-color: #ffffff;
}
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar1">
        <ul>
            <li><img src="foto profil.jpeg"></li>
            <li><a href="#about">About</a></li>
            <li><a href="#pendidikan">Pendidikan</a></li>
            <li><a href="#skill">Skill</a></li>
            <li><a href="#interest">Interest</a></li>
        </ul>
        <a onclick="button_close()" id="btn1">Close</a>
        </div>
        <section id="about">
            <div class="row">
                <div class="column left">
                    <div class="card">
                        <a onclick="button_open()" id="btn2">SIDEBAR</a>
                    </div>
                </div>
                <div class="column right">
                    <div class="card2">
                        <div class="container">
                            <div class="row">
                                <div class="column" style=" width: 80%; margin-top: 150px;">
                                    <h1 id ="nama">Novi Ardhani suci salsabila</h1>
                                </div>
                            </div>
                            <br>
                            <p id="alamat">Jalur dua Univeristas Lampung, Jalan Prof. Dr Jl. Prof. Dr. Ir. 
                                Sumantri Brojonegoro No.1, Kota Bandar Lampung, Lampung 35141</p>
                            <div class="tentang">
                                <p>Saya adalah seorang Web Developer. sebagai seorang web developer, 
                                    saya telah membangun beragam proyek yang mencakup pengembangan situs 
                                    web responsif, aplikasi web interaktif, dan pengalaman pengguna yang menarik.</p>
                            </div>
                            <div class="social-icons">
                                <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                                <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                                <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="m-0">
        <section id="pendidikan">
            <div class="row">
                    <div class="column left">
                        <div class="card">
                        </div>
                    </div>
                    <div class="column right">
                        <div class="card2">
                            <div class="container">
                                <div class="row">
                                    <div class="column" style=" width: 80%; margin-top: 50px;">
                                        <h1 id ="judul">Pendidikan</h1>
                                    </div>
                                </div>
                                <br>
                                <?php $i = 1; ?>
                                <?php foreach ($pendidikann as $baris) : ?>
                                <table class="tablee">
                                    <tr>
                                        <td><?= $baris["nama_sekolah"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #bdbdbd;"><?= $baris["tahun"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="line-height: 40px;"><?= $baris["alamat"]; ?></td>
                                    </tr>
                                    <br>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <hr class="m-0">
        <section id="skill">
            <div class="row">
                    <div class="column left">
                        <div class="card">
                        </div>
                    </div>
                    <div class="column right">
                        <div class="card2">
                            <div class="container">
                                <div class="row">
                                    <div class="column" style=" width: 80%; margin-top: 50px;">
                                        <h1 id ="judul">Skill</h1>
                                    </div>
                                </div>
                                <br>
                                <p id="tentangskill">Skill yang dimiliki</p>
                                <div class="skill-icons fa-beat">
                                <a class="skill-icon" href="#!"><i class="fa-brands fa-html5"></i></a>
                                <a class="skill-icon" href="#!"><i class="fa-brands fa-css3-alt"></i></a>
                                <a class="skill-icon" href="#!"><i class="fa-brands fa-js"></i></a>
                                <a class="skill-icon" href="#!"><i class="fa-brands fa-figma"></i></a>
                                <a class="skill-icon" href="#!"><i class="fa-brands fa-wordpress"></i></a>
                             </div>
                            <div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="m-0">
        <section id="interest">
            <div class="row">
                    <div class="column left">
                        <div class="card">
                        </div>
                    </div>
                    <div class="column right">
                        <div class="card2">
                            <div class="container">
                                <div class="row">
                                    <div class="column" style=" width: 80%; margin-top: 50px;">
                                        <h1 id ="judul">Interest</h1>
                                    </div>
                                </div>
                                <br>
                                <?php $i = 1; ?>
                                <?php foreach ($interestt as $baris) : ?>
                                <table>
                                    <tr style="background-color: #f3dc95;">
                                        <td style="border: 3px solid #d1d1d1;padding: 5px;border-radius: 20px;"><?= $baris["nama_interest"]; ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
                                </table>
                                <div class="tentang">
                                    <p>  
                                        Ketertarikan saya dalam menjadi seorang <i style="color: #e6b03d;">Front-End Developer</i>, 
                                        <i style="color: #e6b03d;">UI/UX Designer</i>, dan 
                                        <i style="color: #e6b03d;">Project Management</i> berasal dari keinginan saya untuk membawa pengalaman pengguna ke 
                                        tingkat yang lebih tinggi. Sebagai <i style="color: #e6b03d;">Front-End Developer</i>, saya dapat menggabungkan 
                                        logika dan kreativitas untuk menciptakan antarmuka yang menarik dan responsif. Saya 
                                        percaya bahwa tampilan yang baik harus disertai dengan pengalaman pengguna yang 
                                        lancar, itulah mengapa minat saya juga tertuju pada peran <i style="color: #e6b03d;">UI/UX Designer</i>. Kemampuan 
                                        untuk memahami kebutuhan pengguna dan merancang solusi yang intuitif memicu semangat 
                                        kreatif saya. Sementara itu, sebagai <i style="color: #e6b03d;">Project Management</i>, saya melihat diri saya sebagai 
                                        jembatan antara tim pengembang dan tujuan bisnis. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
</body>
<script>
        let sidebar1 = document.getElementById('sidebar1');
        let btn1 = document.getElementById('btn1');
        let btn2 = document.getElementById('btn2');

        function button_open() {
            btn1.style.display = "block";
            sidebar1.style.width = "350px";
        }

        function button_close() {
            btn1.style.display = "none";
            sidebar1.style.width = "0%";
        }

        window.onscroll = function() {scrollFunction()}; // saat window di scroll
 
function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    sidebar1.style.top = "0";
    btn2.style.top = "0";
  } else {
    sidebar1.style.top = "0";
    btn2.style.top = "0";
  }
}
    </script>
</html>