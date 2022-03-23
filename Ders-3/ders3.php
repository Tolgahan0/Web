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











    ?>

</body>
</html>