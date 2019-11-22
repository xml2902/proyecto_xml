<?php 
//Código para eliminar nodos
echo "este es ".$_GET['id'];
$xml = new DomDocument("1.0","UTF-8");
$xml->load('../model/tarjeta_adopcion.xml');
$cname = '32';
$xpath = new DOMXPATH ($xml);
foreach ($xpath->query("/tarjeta_adopcion/adopcion [celular = '$cname']") as $node) {
	$node->parentNode->removeChild($node);
}
$xml->formatoutput = true;
$xml->save('../model/tarjeta_adopcion.xml');
//fin de código para eliminar nodos
//root/info [name = '$variable']
 ?>


 