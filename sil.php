<?php

include("ayar.php");

$kullaniciadi = $_POST["kadi"];

$delete = mysql_query("DELETE FROM uyeler WHERE kadi= '$kullaniciadi'");

if ($delete)
{
    echo "Silme islemi Basarili Bir sekilde Gerceklestirildi";
}
else
{
    echo "Hata";
}
?>