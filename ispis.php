<?php
$datoteka = fopen("osoba.txt","r");
echo "<table>";
while(!feof($datoteka))
{
    $var = fgets($datoteka);
    echo "<tr>"."<td>".$var."</td>"."</tr>";
}
echo "</table>";
echo "<a href='index.html'>Vrati na upis</a>";