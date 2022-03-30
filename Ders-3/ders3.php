<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri ve PROGRAMLAMA- I</title>
</head>
<body>
     <!-- Kuyruk ve Yıgın verı yapılarının php üzerimnden dizileri kullanılarak örneklendirilmesini gerçekleştiriniz -->
     <!-- Uygulama: Rasgele uretilen sayi 50 den buyukse 
    Gectiniz:Notunuz: xx 50 den kucukse Kaldiniz:Notunuz xx
    uygulamasini gerceklestiriniz.-->

     <?php

    $ogr_notu= rand(10,100);

    if($ogr_notu >= 50 ){
        echo    "Gectiniz - Notunuz: $ogr_notu"; 
    }
    else {
        echo "Kaldiniz - Notunuz $ogr_notu";
    }

    echo "<h3> Sik Kullanilan String Fonksiyonlar </h3>";
    $yazi = "Aydin Adnan Menderes Universitesi ";
    echo "\$yazi degiskeni Icerigi : $yazi";
    echo "<br>\$yaz' Degiskenin Turu: " . gettype($yazi);

    /* İçeriğin Büyük Hale Dönüştürülmesi */

    echo "<br> \$yazi Degiskeninin Buyuk Harfle Yazilmasi:" . $byazi = strtoupper($yazi);
    echo "<br> \$yazi Degiskeninin Buyuk Harfle Yazilmasi:" . $byazi = mb_strtoupper($yazi);

    echo"<br>";


    /* İçeriğin Kucuk Hale Dönüştürülmesi */

    echo "<br> \$yazi Degiskeninin Kucuk Harfle Yazilmasi:" . $kyazi = strtolower($byazi);

    echo "<br> \$yazi Degiskeninin Kucuk Harfle Yazilmasi:" . $kyazi = mb_strtolower($byazi);

   /* İçeriğin İlk Harfinin Büyük Harfe Dönüştürülmesi*/

    echo "<br> \$yazi İlk Harfi Büyük :" . $yazi = ucfirst($kyazi);
    echo"<br>";

    /* İçerikteki Her Kelimenin İlk Harfinin Büyük Harfe Dönüştürülmesi */

    echo "<br> \$yazi  Her Kelimenin İlk Harfinin Büyük  :" . $yazi = ucwords($kyazi);
    echo"<br>";

    /* İçeriğin Harf Sayısı */
    echo "<br> \$yazi Harf Sayısı  :" . strlen($yazi);
    echo"<br>";

    /* Ascıı Char Donusumu */

    echo "Karakter Karsiligi : (65) " . chr(65);
    echo"<br>";
    echo "Karakter Karsiligi : (31) " . chr(31);
    echo"<br>";


    /* 0-255 Arasindaki Degerleri Chr Fonksiyonuna Sokarak Satir Yazdiriniz */
  
    for($i = 33 ; $i <= 126; $i++) {
        echo "$i:" . chr($i) . "" ;
    }

    /* Metnin Parcalanarak Diziye Donusturulmesi */
    echo"<br>";
    $dizi=explode(" ",$yazi);
    echo gettype($dizi);
    echo"<pre>";
    print_r($dizi);
    echo"<br>";
     /*Metin içerisindeki kelime ve cümle sayısını alt alta yazdırınız  */
     $metin = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit provident maxime dicta similique eos quam omnis excepturi natus eius delectus consectetur quo accusantium dolorum reprehenderit laborum ab, suscipit facilis molestiae?" ;
     echo"<br>";
     $kelimeDizisi = explode(" ",$metin);
     $cumleDizisi = explode(".",$metin);
     echo "Kelime Sayisi" . count($kelimeDizisi);
     echo"<br>";
     echo "Cumle Sayisi" . count($cumleDizisi);
     echo"<pre>";
     print_r($metin);

     /* Uygulama : Veri tabanindan 2022-11-20 seklinde gelen tarihi 20.11.222 seklinde gosteriniz */
     
     $tarih="2022-11-20";
     $tarihDizisi=explode("-",$tarih);
     echo"<pre>";
     print_r($tarihDizisi);
     echo"<pre>";
     echo"Tarih: $tarihDizisi[2].$tarihDizisi[1].$tarihDizisi[0]";

     /* Dizinin Metine Donusturulmesi (implode) */
    
     echo "<br>";
     $aylarDizisi = array(
        "Ocak",
        "Subat",
        "Mart",
        "Nisan"
     );
     echo"<pre>";
     print_r($aylarDizisi);
     echo"<pre>";

     echo $aylarString=implode("-",$aylarDizisi);

     /* str_split String parcalama islemi yapar */
     echo "<br>";
     $iban="TR0000000000000111122223333";
     $yeniIban=str_split($iban,4);
     foreach ($yeniIban as $parca) {
     echo "$parca ";
     }

     echo "<br>";
     echO "İmplode IBan:" . implode("-",$yeniIban);

    


     

     



    












    ?>

</body>
</html>