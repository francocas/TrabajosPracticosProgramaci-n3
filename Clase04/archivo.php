<?php
$file = $_FILES["btnGuardarArchivo"]["name"];
$target = "uploads/";
$target_file = $target . $file;
$target_fileEncontrado;
//var_dump($_FILES);
if(file_exists($target_file))
{
    copy($target_file , $target. date("Y-m-d-h-i-s"). $file);
    move_uploaded_file($_FILES["btnGuardarArchivo"]["tmp_name"], "uploads/". $_FILES["btnGuardarArchivo"]["name"]);
}
else 
{
    move_uploaded_file($_FILES["btnGuardarArchivo"]["tmp_name"], "uploads/". $_FILES["btnGuardarArchivo"]["name"]);    
}
?>
