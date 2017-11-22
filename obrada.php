<?php
$ime = "Ime:" . $_POST['ime'];
$prezime ="Prezime:" . $_POST['prezime'];
$adresa ="Adresa:" . $_POST['adresa'];
$mjesto ="Mjesto:" . $_POST['mjesto'];
$broj ="Broj:" . $_POST['broj'];
$datoteka = fopen("osoba.txt","w");
fwrite($datoteka,$ime . "\r\n".
    $prezime . "\r\n".
    $adresa . "\r\n".
    $mjesto . "\r\n".
    $broj . "\r\n");
