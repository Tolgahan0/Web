<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri ve PROGRAMLAMA- I</title>
</head>
<body>
    
    <?php
    
   /*echo phpinfo();*/
    echo "<h4>Tırnak işaretleri arasında fark</h4>";
    
    $uni="Adnan Menderes Üniversitesi";
    echo "Değişkenin içeriği: Adnan Menderes Üniversitesi";
    echo "<br>";

    echo "Kazandığınız üniversite: " . '$uni'; /* Değişkenin ismini yazdırır. */
    echo "<br>";
    echo "Kazandığınız üniversite: " . "$uni"; /*değişkenin içeriğini yazdrırır*/
    echo "<br>";
    echo "Kazandığınız üniversite: " . $uni;  /*değişkenin içeriğini yazdrırır*/
    echo "<br>";
    echo "Kazandığınız üniversite: $uni";  /*değişkenin içeriğini yazdrırır*/

    echo "<hr><h4>Temel matematiksel işlemler</h4>";
    echo "<h5>Toplama işlemi</h5>";
    
    $sayi1=10;
    $sayi2=20;
    echo '$sayi1 + $sayi2 =' . $sayi1 + $sayi2;
    echo "<br>";
    echo "$sayi1 + $sayi2 =" . $sayi1 + $sayi2;
    echo "<br>";
    $sonuc = $sayi1 + $sayi2;
    echo "$sayi1 + $sayi2 = $sonuc";
    
    echo "<h5>Çıkarma işlemi</h5>";
    
    $sayi1=10;
    $sayi2=20;
    echo '$sayi1 - $sayi2 =' . $sayi1 - $sayi2;
    echo "<br>";
    echo "$sayi1 - $sayi2 =" . $sayi1 - $sayi2;
    echo "<br>";
    $sonuc = $sayi1 - $sayi2;
    echo "$sayi1 - $sayi2 = $sonuc";

    echo "<h5>Çarpma işlemi</h5>";
    
    $sayi1=10;
    $sayi2=20;
    echo '$sayi1 * $sayi2 =' . $sayi1 * $sayi2;
    echo "<br>";
    echo "$sayi1 * $sayi2 =" . $sayi1 * $sayi2;
    echo "<br>";
    $sonuc = $sayi1 * $sayi2;
    echo "$sayi1 * $sayi2 = $sonuc";

    echo "<h5>Bölme işlemi</h5>";
    
    $sayi1=10;
    $sayi2=20;
    echo '$sayi1 / $sayi2 =' . $sayi1 / $sayi2;
    echo "<br>";
    echo "$sayi1 / $sayi2 =" . $sayi1 / $sayi2;
    echo "<br>";
    $sonuc = $sayi1 / $sayi2;
    echo "$sayi1 / $sayi2 = $sonuc";

    echo "<h5>Üst alma işlemi(pow)</h5>";
    $x=3;
    $y=2;
   
    echo "Değişken tipi: $x >>> " . gettype($x) . "<br>";

    echo "$x<sup>$y</sup>=" . pow($x, $y);

    echo "<h5>Karekök alma işlemi(sqrt)</h5>";
    $x=25;
    $karekok = sqrt($x);
    echo " $x'in karekökü: $karekok";

    echo "<h5>Mutlak değer işlemi(abs)</h5>";
    $x = (-4);
    $mutlak=abs($x);
    echo "|$x|'in mutlak değeri: $mutlak";

    echo "<h5>Taban değişim işlemi(base_convert(x,taban1,taban2))</h5>";

    
    $sayi=30;
    $taban=10;
    $yenitaban=2;
    echo "27 sayısının 2'lik tabandaki karşılığı:" . base_convert(27,10,2);
    echo "<br>";
    $sonuc=base_convert($sayi,$taban,$yenitaban);
    echo "($sayi)<sub>$taban</sub> : ($sonuc) <sub>$yenitaban</sub>";

    echo "<h5>Mod işlemi(fmod(x,y))</h5>";
    $x=15;
    $y=4;
    $mod=fmod(15,4);
    echo "$x mod $y = $mod";

    echo "<br> $x sayısı: " . ((fmod($x,2) == 0 )? "çifttir." : "tektir.");

    echo "<h5>Yuvarlama işlemi(round(x,y))</h5>";
    $x = 15.375;
    $y = 15.385;
    echo "<br> $x Bir ondalık basamak yuvarlaması: " . round($x, 1);
    echo "<br> $y bir ondalık basamak yuvarlaması: " . round($y, 2);

    echo "<h5>Yuvarlama işlemi(floor(x))</h5>";
    /*her zaman en yakın aşağı tam sayı değerine yuvarlama işlemi yapar */
    $x = 15.315;
    echo "$x :" . floor($x);

    echo "<h5>Yuvarlama işlemi(ceil(x))</h5>";
    /*her zaman en yakın yukarı tam sayı değerine yuvarlama işlemi yapar */
    $x = 15.315;
    echo "$x :" . ceil($x);

    echo "<h5>Rastgele sayı üretme (rand())</h5>";
    echo "10-100 Arasında Rastgele değer: " . rand(10,100);

    for ($i=1; $i <= 10 ; $i++) { 
        echo "<br> $i . Eleman:" . rand(10,100);
    }

    






    
    
    
    
    ?>

</body>
</html>
