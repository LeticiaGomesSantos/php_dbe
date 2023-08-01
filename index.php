<!DOCTYPE html>
<html>
<body>
<?php
//o <? é utilizado para imbutir o php no html
echo "My first PHP script!";
$txt="PHP";
echo "<br>Estou concatenando ". "I love $txt!";
$x= 10;
$y=10.5;
echo "<br>".$x + $y;
// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo "<br>". $x;/* concatenando o html br com o php do cifão*/
//[] pra mostrar a posição
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
//vardump imprime de qualquer maneira

//echo imprime mais bonitinho
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
for ($i=0;$i<3;$i++){
   echo "<br>carro na posição " .$i." ".$cars[$i];
}
//utilizando size of
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
for ($i=0;$i< sizeof($cars);$i++){
   echo "<br>carro na posição " .$i." ".$cars[$i];
}
//strlen pra saber quantos caracteres tem 
echo "<br>".strlen("Leticia Gomes Santos");
//pelo jeito conta espaços

echo "<br>quantidade de letras= ".strlen("Leticia");
echo "<br>quantidade de palavras= ".str_word_count("Leticia Gomes Santos");
//if e else if

?>

</body>
</html>