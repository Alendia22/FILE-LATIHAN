<!DOCTYPE html>
<html>
   <head>
   	  <title>Latihan no 3</title>
   </head>
<body>
<?php
//////////////////////
//Comment/////////////
//Nama : Alendia//////
//NIM  : 12201792/////
//////////////////////


echo '<table border = 1 cellpadding = 8 cellspacing = 0 align=center>';
echo '<tr bgcolor="#FF1493" style="color: green;">';
echo '<th style="background:white;"> </th>';
for($i = 1; $i <= 10; $i++)
{
echo '<th>'.$i.'</th>';
}
echo '</tr>';
for($i = 1; $i <= 10; $i++)
{
echo '<tr>';
echo '<th bgcolor=#FF1493 style="color: black;">'.$i.'</th>';
for($t = 1; $t <= 10; $t++)
{
  if($i==$t){
    $hasil = $i * $t;
    echo '<td align = center style="background:#FF1493;">'.$hasil.'</td>';
  }else{
$hasil = $i * $t;
echo '<td align = center>'.$hasil.'</td>';
}
}
echo '<tr>';
}
echo '</table>';
?>
</body>
</html>