
<h1>Listado de notas</h1>
<!--Saca un array de objetos con fetch_object-->
<?php while($nota = $notas->fetch_object()) : ?><br/>
        <?=$nota->titulo?> - <?=$nota->fecha?>
<?php endwhile; ?>    