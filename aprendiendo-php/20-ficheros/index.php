<?php


                        // abrir archivo  //modo de lectura, r,w,x... a+ nos permite leer y escribir
$archivo = fopen("fichero_texto.txt", "a+");


//leer contenido
while(!feof($archivo)){

    $contenido = fgets($archivo);

    echo $contenido."<br/>";


}

//Escribir en el archivo
fwrite($archivo,"++++++Soy un texto metido desde php+++++++++");

//cerrar archivo
fclose($archivo);




//copiar un fichero


copy('fichero_texto.txt','fichero_copiado.txt') or die("Error al copiar");



//Renombrar un fichero.
rename("fichero_copiado.txt","archivito_recopiado.txt");

//Eliminar un fichero.
unlink('archivito_recopiado.txt') or die('Error al borrar');


//Comprobar si un archivo exite
if(file_exists("fichero_texto.doc")){
    echo "El archivo exite";
}else{
    echo "El archivo no existe";
}