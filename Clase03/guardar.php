<?php 
    var_dump($_REQUEST);
    var_dump($_POST);
    $Nombre = $_POST['Nombre'];
    $Archivo = $_POST['Archivo'];
    if($_POST['Guardar'])
    {
        $archivo = fopen($Archivo.".txt","w");
        fwrite($archivo,$Nombre);
        fclose($archivo);
    }
    elseif($_POST['Lee'])
    {
        $archivo = fopen("Fabrica.txt","r");
        while(!feof($archivo))
        {
        echo(fgets($archivo));
        }
        fclose($archivo);
    }
    /*se ingresara el nombre de la persona y el nombre del archivo guardnato el dato en el archi, al presionar el boton guardarse modificara el archivo fabrica, de ya existir el archivo se copiara y se movera a la carpeta bakup cambiandole el nombre, por el nombre + la fecha. Al presionar el boton leer , si el archivo existe, se mostrara el contenido, de no existir el archivo, se informara que no existe.*/
?>