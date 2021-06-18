<h1>Listado de  usuarios</h1>
<!--Saca un array de objetos con fetch_object-->
<?php while($usuario = $todos_los_usuarios->fetch_object()) : ?><br/>
        <?=$usuario->nombre?> - <?=$usuario->apellidos?>
<?php endwhile; ?>    