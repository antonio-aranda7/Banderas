<?php
$region = $_POST['region'];
$parametro1 = $_POST['parametro1'];
$parametro2 = $_POST['parametro2'];
$parametro3 = $_POST['parametro3'];


//https://restcountries.eu/rest/v2/region/{region}
//$response = file_get_contents('https://restcountries.eu/rest/v2/region/'.$region );

$response = file_get_contents('https://restcountries.eu/rest/v2/region/'.$region?fields=.$parametro1;.$parametro2;.$parametro3);

//https://restcountries.eu/rest/v2/{service}?fields={field};{field};{field}
//https://restcountries.eu/rest/v2/region/americas?fields=name;capital;flag
echo $response;
?>