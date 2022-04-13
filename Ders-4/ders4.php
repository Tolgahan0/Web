<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri ve PROGRAMLAMA- I</title>
</head>
<body>

<h3>Php'de Diziler</h3>
    <ol>
        <li>Dizi oluşturmak için array() fonksiyonu veya [] kullanılabilir.</li>
        <li>Dizi içerisinde farklı türden birçok değer bulunabilir.(int, string, double, obje) (1,2,3,"Ali","Ahmet","125,20") </li>
        <li>"echo $diziAdi" ile dizi içeriği ekrana yazdırılamaz. Array to String Conversion hatası verir. Fakat dizinin örneğin 3 indisine sahip elemanı elemanı "echo $diziAdi[3]" şeklinde yazdırılabilir.</li>
        <li>Dizinin içerisindeki string ifadeler çift tırnak("") içerisine yazılır.</li>
        <li>Dizinin içerisindeki int ifadeler direk yazılabilir.</li>
        <li>Dizinin elemanları birbirinden virgül(,) ile ayrılır.</li>
        <li>Dizi içerisinde indisler varsayılan olarak 0'dan başlar.</li>
        <li>Diziler içerisinde diziler tanımlanabilir.</li>
    </ol>


    <?php

    $telno="+90-534-202-68-07";
    $yenitel= str_split($telno, 3);
    foreach ($yenitel as $parca) {
        echo "$parca";
    }

    echo"<br>";

    $dizi1=array(1,2,3,4,"kemal","arica",130.5);
    echo"<pre>";
    print_r($dizi1);

    echo"<br>";

    $dizi2=[1,"tarik","arica",220.5];
    echo"<pre>";
    print_r($dizi2);

    echo"<br>";

    echo "Dizinin 5. elemani: $dizi1[5]";
    echo "<br>Dizinin 1. Elemani:" . gettype ($dizi1[1]);

    echo "<br>Dizinin 0. Elemani: $dizi1[0]";
    echo "<br>Dizinin 1. Elemani: $dizi1[1]";
    echo "<br>Dizinin 2. Elemani: $dizi1[2]";
    echo "<br>Dizinin 3. Elemani: $dizi1[3]";
    echo "<br>Dizinin 4. Elemani: $dizi1[4]";
    echo "<br>Dizinin 5. Elemani: $dizi1[5]";
    echo "<br>Dizinin 6. Elemani: $dizi1[6]";

    echo "<h3> Dizinin Iceriginin Foreach Dongusu ile Yazdirilmasi-1 </h3>";

    foreach ($dizi1 as $key => $value) {
        echo "$key - $value .  <br>";
    }

    echo "<h3> Dizinin Iceriginin For Dongusu ile Yazdirilmasi </h3>";

    for ($i=0; $i < count($dizi1); $i++) { 
        echo $dizi1[$i] . "<br>";

    }

    $sayilar = array (1,2,3,4,5,6);
    $sayilar= array(
        array(1,2,3,4,5,6),
        array(2,4,6,8,10)
    );
    echo "<pre>";
    print_r($sayilar);
    echo"</pre>";

    echo "Sayılar Dizisinin İçerisindeki 2. Dizinin 3 indisli Elemani:" . $sayilar[1][3];
    echo"<br>";
    echo "Sayılar Dizisinin İçerisindeki 1. Dizinin 4 indisli Elemani:" . $sayilar[0][4];

    echo "<br>--------------";

    $sayilar = array(
        "integer" => array(55,21,15,63),
        "Double" => array (13.5,1.36,2.26)
    );

    echo "Sayılar Dizisinin İçerisindeki 1. Dizinin 1 indisli Elemani:" . $sayilar["integer"][1];
    echo"<br>"; 
    echo "Sayılar Dizisinin İçerisindeki 1. Dizinin 2 indisli Elemani:" . $sayilar["double"][2];

    $bilgiler= array(
        "id"     => "0",
        "adi"    => "Tolgahan",
        "soyadi" => "Ayaz",
        "gsm"    => "5074973945",
        "yas"    =>  20
    );

    echo "<pre>";
    print_r($bilgiler);
    echo"</pre>";

    echo "$bilgiler[adi] $bilgiler[soyadi] hosgeldiniz.";

    $bkullanicilar= array(
    "kullanicilar1" => array(

        "id"     => "0",
        "adi"    => "Tolgahan",
        "soyadi" => "Ayaz",
        "gsm"    => "5074973945",
        "yas"    =>  20
    ),
    
        "kullanicilar2" => array(
    
            "id"     => "1",
            "adi"    => "Can",
            "soyadi" => "Uzun",
            "gsm"    => "5074945895",
            "yas"    =>  21
        )
    );
    echo "<pre>";
    print_r($bkullanicilar);
    echo"</pre>";











    ?>

</body>
</html>