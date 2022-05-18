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
/*Form Inputs 

1- İsim Soyisim
2- Email 
3- Telefon
4- Cinsiyet
5- Ders (Yazılım Mimarileri, Web Programlama, Sunucu İşletim Sistemleri)
6- Notunuz

Sorular:

1. Herhangi bir hazır form bularak form içerisinde yukarıdaki elemanların oluşturulmasını sağlayınız.
2. Yukarıdaki elementlerin bulunduğu css, bootstrap kullanarak kendiniz bir form tasarımı gerçekleştiriniz. */

// değişkenleri varsayılan olarak boş ata
$isim = $email = $cinsiyet = $yorum= $website = "";
         
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $isim = test_input($_POST["isim"]);
   $email = test_input($_POST["email"]);
   $website = test_input($_POST["website"]);
   $yorum = test_input($_POST["yorum"]);
   $cinsiyet = test_input($_POST["cinsiyet"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>Form</h2>

<form method = "post" action = "<?=$_SERVER["PHP_SELF"]?>">
<table>
   <tr>
      <td>Adınız:</td> 
      <td><input type = "text" name = "isim"></td>
   </tr>
   
   <tr>
      <td>E-mail:</td>
      <td><input type = "text" name = "email"></td>
   </tr>
   
   <tr>
      <td>Telefon No:</td>
      <td><input type = "text" name = "telno"></td>
   </tr>
   
   <tr>
      <td>Ders:</td>
      <td><textarea name = "ders" rows = "5" cols = "15"></textarea></td>
   </tr>
   
   <tr>
      <td>Cinsiyet:</td>
      <td>
         <input type = "radio" name = "cinsiyet" checked value = "erkek">Erkek
         <input type = "radio" name = "cinsiyet" value = "kadın">Kadın
      </td>
   </tr>
   
   <tr>
      <td>
         <input type = "submit" name = "submit" value = "Gönder"> 
      </td>
   </tr>
</table>
</form>

<?php
echo "<h2>Verilen Cevap :</h2>";
echo $isim;
echo "<br>";

echo $email;
echo "<br>";

echo $website;
echo "<br>";

echo $yorum;
echo "<br>";

echo $cinsiyet;


  ?>
    
</body>
</html>