<?php
$t = "Meine erste PHO Seite(heute)";
$i = 3;

$i2 = 7;
$total = $i * $i2;
$apfel = 2.50;
$melone = 4;
$limette = 5;
$vorname = "Carlos";

?>


<!DOCTYPE html>
<html lang="en"> 
<!-- html:5 für automatische einfügen der HTML Struktur -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "$t"?></title>
<body>


<table border="1" cellpadding="5" cellspacing="0">
<tr>
    <td>Vorname</td>
    <td>Nachname</td>
</tr>
<tr>    
    <td><?php echo "$vorname"?></td>
    <td></td>
</tr>

</table>
    <h1><?php echo "$i x $i2 = $total"?></h1>
</body>
</html>

