<?php

$eposta = "b221210019@sakarya.edu.tr";
$sifre = "b221210019";

if(($_POST['e-posta']==$eposta) && ($_POST['sifre']==$sifre) )
{

    echo " <h1> Hoşgeldin,</h1>";
    echo " <h1><i> b221210019</i>";
    echo "<h2><a  href ='index.html'>Ana Sayfa</a></h2>";

    
}
else{
    

    echo "<h1> Hatalı Giriş </h1>";
    echo "<h2><a href ='login.html'>Geri Dön</a></h2>";
   

}
?>

