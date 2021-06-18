<?php require_once 'includes/cabecera.php'; ?>

<?php require_once 'includes/lateral.php'; ?>

<!--CAJA PRINCIPAL-->
<div id="principal">
    <h1>Todas Las Entradas</h1>

    <?php
        $entradas = conseguirEntradas($db);
        
        if(!empty($entradas)):
            while($entrada = mysqli_fetch_assoc($entradas)):

    ?>        
            <article class="entrada">
                <a href="">
                        <h2><?=$entrada['titulo']; ?></h2>
                        <span class="fecha"><?=$entrada['categoria'].'|'.$entrada['fecha'];?></span>
                        <p>     <!--substr(string,comienzo de caracteres,maximo de caracteres-->
                            <?=substr($entrada['descripcion'], 0,150)."...";?>
                        </p>
                </a>
            </article>
    <?php        
            endwhile;

        endif;    
    ?>

    
    </div>
<!--Fin Principal-->


<?php require_once 'includes/pie.php'; ?>