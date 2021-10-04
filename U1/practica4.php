<?PHP
$arr[] = "juan";
$arr[] = "luis";
$arr[] = "maria";
$arr[] = "pedro";
echo "<pre>";
	echo var_dump($arr);
echo "</pre>";

echo "<br>";

for( $i = 0; $i < sizeof($arr); $i++) {
	echo "$arr[$i] <br>";
}

$arr[] = Array("edad"=>10, "nombre"=>"isaac");
foreach ( $arr as $clave => $valor ){
	echo "[$clave] => $valor <br>";
	if($clave >= 4){
		echo "[edad] => ".$valor["edad"]."<br>";
		echo "[nombre] => ".$valor["nombre"]."<br>";
	}
}

echo "<br>";

$arr[] = Array("edad"=>10, "nombre"=>"isaac");
echo "<pre>";
	var_dump($arr);
echo "</pre>";
?>
