<?php

include("baglanti.php");

if(isset($_POST["giris"])){
    $kuladi=$_POST["username"];
    $sifre=$_POST["password"];

    if(isset($kuladi) && isset($sifre)){
        $secim = "SELECT * FROM 'admin' WHERE kullaniciadi ='$kuladi'";
        $calistir=mysql_query($baglanti,$secim);
        $kayitsayisi=mysqli_num_rows($calistir);
        


        if($kayitsayisi>0){
            $ilgilikayit= mysql_fetch_assoc($calistir);
            $ilgilisifre=$ilgilikayit["sifre"];
        

            if(password_verify($sifre,$ilgilisifre)){
                session_start();
                $_SESSION["adminismi"]=$ilgilikayit["adminismi"];
                header("location:panel.php");
            }
        }
    }

    

    
}



?>




<!DOCTYPE html>


<html lang="tr">



<head>


    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal({ reset: true });
    </script>

    <title>AYSHEBEDİ</title>
    <link rel="icon" type="image/x-icon" href="/img/ayshebedifavicon.png">
    <meta charset="utf-8">
    <meta name="description" content="jewellery">
    <meta name="author" content="Seçkin Aktaş">
    <meta name="keywords" content="jewellery, size, gold">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">


</head>

<body>

    <header>
        <div class="container">
            <div class="logo">
                <a href="index.html">
                    <img src="img/ayshebedisonlogooo.png">
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">ANA SAYFA</a></li>
                    <li><a href="2layout.html">ÜRÜNLER</a></li>
                    <li><a href="3layout.html">KATALOG</a></li>
                    <li><a href="4layout.html">HAKKIMIZDA</a></li>
                    <li><a href="http://localhost/ayshebedi/5layout.php">İLETİŞİM</a></li>
                </ul>

            </div>
        </div>
    </header>



    <div class="formumuz">
        <h3>ADMİN GİRİŞ</h3>
        <form action="login.php" method="POST">
            <label for="fname">Kullanıcı Adı:</label>
            <input type="text" id="fname" name="username" placeholder="Kullanıcı Adı"><br>
    
            <label for="lname">Şifre:</label>
            <input type="text" id="lname" name="password" placeholder="Şifre"><br>
    
            <input type="submit" name="giris" value="Giriş Yap">
        </form>
    </div>

    
    

    

    <footer class="sectionArea seckin">
        <div class="container">
            <div class="col3">
                <div class="footerItem">
                    <h3>HOŞGELDİNİZ</h3>
                    <p>"Şimdi stilinizi güncelleme zamanı! Tarzınıza değer katın. Modanın öncüsü tekstil firmamızla tanışın."</p>

                </div>

            </div>

            <div class="col3">
                <div class="footerItem">
                    <h3>LİNKLER</h3>
                    <ul class="footerLinks">
                        <li><a href="index.html">ANA SAYFA</a></li>
                        <li><a href="2layout.html">ÜRÜNLER</a></li>
                        <li><a href="3layout.html">KATALOG</a></li>
                        <li><a href="4layout.html">HAKKIMIZDA</a></li>
                        <li><a href="http://localhost/ayshebedi/5layout.php">İLETİŞİM</a></li>
                    </ul>

                </div>

            </div>

            <div class="col3">
                <div class="footerItem">
                    <h3>BİZİMLE İLETİŞİME GEÇİN</h3>
                    <div class="miniAboutUs">
                        <p>AYSHE BEDİ</p>
                        <p>+90 534 033 62 78</p>
                        <p>aykut@ayshebedi.com</p>
                        <p>Mahmutbey, İnönü Cd. No:122, 34218 Bağcılar/İstanbul</p>
                    </div>
                    

                </div>

            </div>

        
            
            
        </div>
        <div class="endoffooter">
            <p>All rights reserved. Created by Seçkin AKTAŞ.</p>
        </div>
        <div class="footer-placeholder"></div>
        

    </footer>


    <script>ScrollReveal().reveal('.seckin',{delay:100});
    </script>


</body>

</html>