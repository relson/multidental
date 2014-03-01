<?php

require_once './config/imports.php';
require_once './config/sm.php';

$pacienteDAO = new pacienteDAO();

//$text = mysql_real_escape_string($_GET['term']);
$pesquisa = trim($_GET['term']);
echo utf8_decode($pesquisa).'<br>';
$result = $pacienteDAO->search($pesquisa);
print_r($result);
echo "<br>";
$json = '[';
$first = true;

foreach ($result as $row) {

  if (!$first) { 
  	$json .=  ','; 
  } else { 
  	$first = false; 
  }
  echo 'Nome: '.utf8_decode($row['nome']).'<br>';
  $json .= '{"value":"'.utf8_decode($row['nome']).'"}';

}

$json .= ']';
 
echo $json;