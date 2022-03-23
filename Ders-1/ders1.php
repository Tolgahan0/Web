<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri ve PROGRAMLAMA- I</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- SHIFT + ALT + A BU SATIRI ACAR   -->
    <?php

    //ACIKLAMA SATIRI
    /* 
    SHIFT + ALT +A ACIKLAMA SATIRI BLOGU.
    echo= ekrana yazdirma islemi yapar.
    icerisinde htmsal etiketleri kullanilabilir.
    cift veya tek tirnak ile kullanilabilir.
    Nokta isareti ile birlestirme yapilabilir.
    Cift tirnak icerisinde degisken icerikleri gosterilir.
    \ kacis karaketridir ozel ifadelerden omnce kullanilir.
    */

    echo "<h3>Aydin Adnan Menderes Universitesi</h3>"; 
    echo "<h3>Aydin Meslek Yuksek Okuku </h3>";     
    echo "Bilgisayar Programciligi" .   "<br>" . "Web Teknolojileri";
    echo "<hr>  <h4> Degisken Tanimlama Kurallari </h4> ";
    echo "<ol>
         <li> Degisken Isimleri $ ile baslar. </li>
         <li> Degisken Isimleri sayisal bir ifade ile baslayamaz. </li>
         <li> Degisken isimlerinda bosluk kullanilmaz. </li>
         <li> Iki kelime varsa birinci_sinif birincisinif birinci-sinif orneklerdeki kullanimlar onerilir </li>
         <li> Degisken ve dosya isimlerinde Turkce karakter kullanilmamalidir.</li>
         <li> Degisken isimlerinde buyuk -kucuk harf  kullanimina duyarlidir. \
         \$sayi != \$Sayi </li>
         <li> Degisken icerisinde eger metinsel bir ifade varsa (\") veya (') kullanilir. </li>
         <li> Degisken icerisinde eger sayisal bir ifade varsa tirnak kullanilmadan yazilir. </li>
         <li> Degisken ismi,degiskenin icerigini ifade etmeli.</li>
         <li> Degiskenler ekrana echo komutu ile yazdirilir .</li>
    </ol>";

    /* UYGULAMA: 
        Universite -myo-ad-soyad-numara degiskenlerini olusturuo ircerigini uygun sekilde doldurunuz 
        Girilen bu degiskenlerin degerlerini bir html tablo icerisinde gosteriniz.
    */

    echo $universite= "Adu";
    echo $ad="Tolgahan";
    echo $soyad="Ayaz";
    echo $numara="216001062"



















    /* Değişken Tanımlama Kuralları 
    
    
    
    
    */


    ?>
    <form action="">
        <label for="uni">Universite</label>
        <input type="text" name="" disable value="<?php echo $uni; ?>"id="uni"><br> 

        <label for="myo">MYO</label>
        <input type="text" name="" disable value="<?php echo $myo; ?>"id="myo"><br>

        <label for="ad">Ad</label>
        <input type="text" name="" disable value="<?php echo $ad; ?>"id="ad"><br>

        <label for="soyad">Soyad</label>
        <input type="text" name="" disable value="<?php echo $soyad; ?>"id="soyad"><br>

        <label for="no">No</label>
        <input type="text" name="" disable value="<?php echo $no; ?>"id="no"><br>
   </form>

























   <div class="container mt-3">
  <h2>Tablo</h2>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Universite</th>
        <th>Ad</th>
        <th>Soyad</th>
        <th>Numara</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Adü</td>
        <td>Tolgahan</td>
        <td>Ayaz</td>
        <td>216001062</td>
      </tr>
    
    </tbody>
  </table>
</div>



    
</body>
</html>