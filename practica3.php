<?PHP
$col = "";
$fila = "";
$bandera = True;
for ($i = 1; $i <=10; $i++){
	$fila .= "<tr>";
	#if ($col == "") {
		for ($j = 1; $j <=10; $j++){
			$boton = "<input type='button' value='boton' onclick='boton($j)'>";
			$col.= "<td>columna $j <br> $boton</td>";
		}
	#}
	$fila .= "$col</tr>";
	$col = "";
}
sleep(6);
?>

<html>
	<head>
<?PHP 
	if($bandera){
?>
		 <script type="text/javascript">
			function boton(id) {
				console.log(id);
			}
		</script>
<?PHP 
	}
?>
	</head>
	<body>
		<table border="1">
			<tbody>
				<?PHP echo $fila; ?>
			</tbody>
		</table>
	</body>
</html>
