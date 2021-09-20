<?PHP
var_dump($argv);

$arr[0] = 1;
$arr[1] = 2.64;
$arr[2] = "hola brother como estas";

echo "<pre>";
    var_dump($arr);
echo "</pre>";

$arr["dato"]["nombre"] = $argv[0];
$arr["dato"]["paterno"] = $argv[1];
$arr["dato"]["materno"] = $argv[2];
$arr["dato"]["edad"] = $argv[3];

echo "<pre>";
    var_dump($arr);
echo "</pre>";

$arr["nombre"] = "isaac";

echo $arr["nombre"];

$aarr = array("dato"=>"isaac");

var_dump($aarr);

echo `ls -lah`;
$ip = `java -jar obtenip.jar`;

echo "tu ip es: ". $ip;
?>
