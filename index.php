<?php
include('conexaoBancoDados.php');

$consulta="SELECT * FROM usuarios";
$usuarios = selecionar($consulta);

foreach ($usuarios as $usuario){
 print_r($usuario);
}
?>