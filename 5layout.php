<?php


include("baglanti.php");

if(isset($_POST["kaydet"])){
    $name=$_POST["firstname"];
    $sname=$_POST["lastname"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];

    $ekle="INSERT INTO `musteri` (`id`, `isim`, `soyisim`, `telefon`, `email`, `tarih`) VALUES (NULL, '$name', '$sname', '$phone', '$email', current_timestamp())";
    $calistir= mysqli_query($baglanti,$ekle);

    if($calistir){
        echo "İşlem Başarılı";
    }
    else{
        echo 'İşlem Başarısız!';
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

    <section id="contactUsSliders" class="contactUs">

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1832.676781134669!2d28.832680042672994!3d41.06225560267822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa567cd4180df%3A0xa812abb75c759d71!2sBa%C5%9Fkule%20Plaza!5e0!3m2!1str!2str!4v1698351444894!5m2!1str!2str" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        

        <div class="adres">
            <p>AYSHE BEDİ</p>
            <p>+90 534 033 62 78</p>
            <p>aykut@ayshebedi.com</p>
            <p>Mahmutbey, İnönü Cd. No:122, 34218</p>
            <p>Bağcılar/İstanbul</p>
            <a href="https://api.whatsapp.com/send?phone=905340336278" target="_blank" class="whatsapp-button">WhatsApp ile iletişime geçin</a>
        </div>
        
        
        

    </section>


    <div class="formumuz">
        <h3>SİZİNLE İLETİŞİME GEÇELİM</h3>
        <form action="5layout.php" method="POST">
            <label for="fname">İsim:</label>
            <input type="text" id="fname" name="firstname" placeholder="İsminiz"><br>
    
            <label for="lname">Soyisim:</label>
            <input type="text" id="lname" name="lastname" placeholder="Soyisminiz"><br>
    
            <label for="phone">Telefon:</label>
            <input type="tel" id="phone" name="phone" placeholder="Telefon numaranız"><br>
    
            <label for="email">E-posta:</label>
            <input type="email" id="email" name="email" placeholder="E-posta adresiniz"><br>
    
            <input type="submit" name="kaydet" value="Gönder">
        </form>
    </div>

    
    <div class="tablo">
        <h3>ÇALIŞMA SAATLERİMİZ</h3>

        <table>
            <tr>
                <th>Gün</th>
                <th>Çalışma Saatleri</th>
            </tr>
            <tr>
                <td>Pazartesi</td>
                <td>10.00 - 20.00</td>
            </tr>
            <tr>
                <td>Salı</td>
                <td>10.00 - 20.00</td>
            </tr>
            <tr>
                <td>Çarşamba</td>
                <td>10.00 - 20.00</td>
            </tr>
            <tr>
                <td>Perşembe</td>
                <td>10.00 - 20.00</td>
            </tr>
            <tr>
                <td>Cuma</td>
                <td>10.00 - 20.00</td>
            </tr>
            <tr>
                <td>Cumartesi</td>
                <td class="closed">Kapalı</td>
            </tr>
            <tr>
                <td>Pazar</td>
                <td class="closed">Kapalı</td>
            </tr>
            <!-- Diğer günler buraya eklenebilir -->
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