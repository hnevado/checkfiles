Añade la clase Files.php a tu proyecto para poder comprobar de forma fácil la extensión y tamaño de cualquier fichero / imagen.

Ejemplo de funcionamiento:


require ('Files.php');
//1000000 = 1 MB
$fichero = new Files("test_image.jpeg",1000000,"pdf,jpeg,png");

$extension=$fichero->checkExtensions();
$tamano=$fichero->checkSize();

echo $extension; // return true if is correct
echo $tamano; //return true if is correct

