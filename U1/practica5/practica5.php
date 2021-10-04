<?PHP

if (isset($_GET["estilo"])) {
    $css = "estilo1.css";
    $color = $_GET['color'];
    $tamText = $_GET['tamText'];
    $est  = $_GET["estilo"];
    if ($_GET["estilo"] == "estilo1") {
        $estilo = "style='color:$color; font-size:".$tamText."px;'";
        $attr = "href= 'www.google.com'";
        echo "se aplico estilo 1";
    }else {
        $estilo = "style='color:".$_GET['color']."; font-size:".$tamText."px;'";
        $attr = "href='www.facebook.com'";
        echo "se aplico estilo 2";
    }
}else {
    $color = "";
    $tamText = "";
    $est = "";
}

echo "<pre>";
var_dump($_GET);
echo "</pre>";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name"viewport" content"width=device, initial-scale=1">
    <link rel="stylesheet" href="<?PHP echo $css;?>">
</head>
<body>

<form action="" method="get">
    <label>Selecciona estilo</label>
    <select name="estilo">
        <option value=""> --selecciones--</option>
        <option <?PHP if ($est == "estilo1") echo 'selected'; ?> value="estilo1">estilo1</option>
        <option <?PHP if ($est == "estilo2") echo 'selected'; ?> value="estilo2">estilo2</option>
    </select>
    <br>
    <label>Selecciona color</label>
    <input name=color type='color' value="<?PHP echo $color; ?>">
    <br>
    <label>Tamaño del link</label>
    <input type='range' min=5 max=50 name='tamText' value="<?PHP echo $tamText; ?>">
    <br>
<input type="submit" value="aplicar">
</form>

<?PHP if (isset($_GET["estilo"])) { ?>
<div id="principal"> Este es un contenedor principal</div>
<div class='clase1' >Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo). </div>

<label> esta es una etiqueta </label>

<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
<a <?PHP echo $estilo; echo $attr;?>> este es un link </a>
<?PHP } ?>
</body>
</html>
