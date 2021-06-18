<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formularios PHP Y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">

            <label for="nombre">NOMBRE:</label>
            <p><input type="text" name="nombre" maxlength="10" required="required" placeholder="mete tu apellido"/></p>

            <label for="edad">EDAD:</label>
            <p><input type="number" name="edad" disabled="disabled"/></p>

            <label for="apellido">APELLIDO:</label>
            <p><input type="text" name="apellido" autofocus="autofocus" minlength="4"/></p>

            <label for="boton">Botón:</label>
            <p><input type="button" name="boton" value="Cliclame"/></p>

            <label for="sexo">Sexo:</label>

            <p>
            HOMBRE:<input type="checkbox" name="sexo" value= "hombre" />
            MUJER:<input type="checkbox" name="sexo" value= "mujer" checked="checked" />
            </p>

            <label for="color">COLOR:</label>
            <p><input type="color" name="color" /></p>

            <label for="date">FECHA:</label>
            <p><input type="date" name="date" /></p>

            <label for="correo">EMAIL:</label>
            <p><input type="email" name="correo" /></p>

            <label for="archivo">ARCHIVO:</label>
            <p><input type="file" name="archivo"  multiple="multiple"/></p>

            <label for="numero">NUMERO:</label>
            <p><input type="number" name="numero" /></p>



            <label for="pass">CONTRASEÑA:</label>
            <p><input type="password" name="pass" /></p>


            <label for="continente">CONTINENTE:</label>
            <p>
            America del Sur<input type="radio" name="continente" value="America del Sur"/>
            Europa<input type="radio" name="continente" value="Europa"/>
            Asia<input type="radio" name="continente" value="Asia"/>
            </p>

            <label for="web">Pagina web:</label>
            <p><input type="url" name="web" /></p>


            <textarea>
            </textarea><br/>

            Peliculas:
            <select name="peliculas">
                <option value="Spiderman">Spiderman</option>
                <option value="Batman">Batman</option>
                <option value="La jungla de cristal">La jungla de cristal</option>
                <option value="Gran torino">Gran torino</option>
            </select>
            <br/>

            <input type="submit" value="Enviar"/>

        </form>
    </body>
</html>