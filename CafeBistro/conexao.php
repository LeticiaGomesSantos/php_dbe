<?php
$servername="localhost";
$username="root";
$password="";
$databasename="CafeBistro";
//criaçãoda conexão
//mysqli é uma class
$conn= new mysqli ($servername, $username,$password,$databasename);
//verificando a conexão
if (!$conn){
    die ("conexão falhou".mysqli_connect_error());

}else{
    echo "consegui conectar ao Café Bistro";
}

?>