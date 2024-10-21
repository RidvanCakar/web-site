



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
                    <li><a href="5layout.html">İLETİŞİM</a></li>
                </ul>

            </div>
        </div>
    </header>

    <div>
    <table>
    <tr>
        <th>ID</th>
        <th>İsim</th>
        <th>Soyisim</th>
        <th>Telefon</th>
        <th>Email</th>
        <th>Tarih</th>
    </tr>


    <?php

    include("baglanti.php");

    $sec="Select * from musteri";;
    $sonuc=$baglan->query($sec);

    if($sonuc->num_rows>0){
        while($cek=$sonuc->fetch_assoc()){
            echo "

                <tr>
                    <td>".$cek['id']."</td>
                    <td>".$cek['isim']."</td>
                    <td>".$cek['soyisim']."</td>
                    <td>".$cek['telefon']."</td>
                    <td>".$cek['email']."</td>
                    <td>".$cek['tarih']."</td>
                </tr>
                ";

        }
    }
    else{
        echo "Veritabanında hiçbir veri bulunamamıştır.";
    }



    ?>


    </table>
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
                        <li><a href="5layout.html">İLETİŞİM</a></li>
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