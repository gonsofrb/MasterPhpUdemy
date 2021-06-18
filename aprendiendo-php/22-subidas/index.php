<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir imagenes con  PHP</title>
</head>
<body>
    <h1>Subir archivos con PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" />
        <input type="submit" value="Enviar">
    </form>


        <h3>Listado de imagenes</h3>

        <?php
        $gestor = opendir('./images');

        if($gestor) :
            while(($image = readdir($gestor)) !== false):
                if($image != "." && $image != ".."):
                    echo "<img src='images/$image' width='400px'/><br/>";
                endif;
            endwhile;
        endif;
        ?>
</body>
</html>

