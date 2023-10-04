
<?php
session_start();
//Verifiquem si tenim n random ja a la sessió.
if(!isset($_SESSION["numerosecret"]))
{
    //si no existeix, generem número random.
    $_SESSION["numerosecret"]=rand(1,100);
}
//aquest n random l'assignem a una variable que es pugui utilitzar en el codi en concret.
$numerosecret=$_SESSION["numerosecret"];



if (isset($_GET["numero"])) 

{
    if ($_GET ["numero"]>$numerosecret)
    {
        echo "¿Has dicho " . $_GET["numero"] . "?";
        echo "Estic pensant en un número més petit";
         
    }
    else if($_GET ["numero"]<$numerosecret)
    {
        echo "¿Has dicho " . $_GET["numero"] . "?";
        echo "Estic pensant en un número més gran";
    }
    else
    {
        echo "CORRECTE!!!"; 
        
    }
} 
?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="cssbase.css" id="modo-dia-css">
	<script src="jquery.min.js"></script>
	
	<title></title>

</head>
<body>
<H1>Endevina el número que estic pensant</H1>
<br>
<h2>Introdueix un número de l'1 al 100</h2>	

<form method="get" action=".">
    <input type="number" name="numero">
    <input type="submit">
</form>

</body>
</html>