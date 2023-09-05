<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRING FUNCTION</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="arana.png">
    <meta name="theme-color" content="#DC5936"/>
    <meta name="description" content="Website for view some examples of string function in php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@1,700&family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>FUNCIONES STRING EN PHP</h1>
    </header>
<!STR_REPLACE>
    <article class="flex-container">
        <div class="card-child-1">
            <ul>
                <li>FUNCIÓN STR_REPLACE</li>
            </ul>
            <div class="php">
                <?php
            $texto = "Bienvenidos a la página";
            echo $texto; 
            echo "<br />";    
            echo '<img src="abajo1.png"><br />';
            echo str_replace("Bienvenidos","Ingresen",$texto);
            ?>
            </div>
            <div class="txt">
            <p>Reemplaza caracteres dentro de una cadena de caracteres <hr>
                str_replace ("cadena a buscar", "cadena de reemplazo", $variableOFraseOriginal) <br> <hr>
                echo str_replace("Bienvenidos","Ingresen",$texto);</p>
            </div>
        </div>
<!STRTOLOWER>
        <div class="card-child-1">
             <ul>
                <li>FUNCIÓN STRTOLOWER</li>
            </ul>
            <div class="php">
            <?php
            $texto = "CADEna de teXTO";
            echo $texto; echo "<br />";
            echo '<img src="abajo1.png"><br />';
            echo strtolower($texto);
            ?>
            </div>
            <div class="txt">
            <p>Convierte todo a minúsculas <br><hr>echo strtolower($texto);</p>
            </div>
        </div>
<!STRTOUPPER>
        <div class="card-child-1">
             <ul>
                <li>FUNCIÓN STRTOUPPER</li>
            </ul>
            <div class="php">
            <?php
            $texto = "CADEna de teXTO";
            echo $texto;
            echo "<br />";
            echo '<img src="abajo1.png"><br />';
            echo strtoupper($texto);             
            ?>
            </div>
            <div class="txt">
            <p>Convierte todo a mayúsculas <br><hr>echo strtoupper($texto);</p>
            </div>
        </div>
<!COUNT_CHARS>
        <div class="card-child-1">
             <ul>
                <li>FUNCIÓN COUNT_CHARS</li>
            </ul>
            <div class="php">
            <?php
            $data = "La planta azul";
            echo "<i>$data</i><br />";
            echo '<img src="abajo1.png"><br />';
            foreach (count_chars($data, 1) as $i => $val) {
               echo "N. veces $val caracter \"" , chr($i) , "\" en cadena\n";
               echo "<br />";
            }
            ?>
            </div>
            <div class="txt">
            <p>Conteo de caracteres <br> <hr>
            foreach (count_chars($data, 1) as $i => $val) <hr>
            echo "N. veces $val caracter \"" , chr($i) , "\" en cadena\n";</p>
            </div>
        </div>
<!SUBSTR_COUNT>
        <div class="card-child-1">
            <ul>
                <li>FUNCIÓN SUBSTR_COUNT</li>
            </ul>
            <div class="php">
                <?php
                $lista1 = "Lunes Martes Lunes Jueves Lunes Viernes";
                $lista2 = "Lunes";
                echo "--> $lista1<br />";
                echo "--> $lista2<br />";
                echo '<img src="abajo1.png"><br />';
                echo"$lista2 aparece (".substr_count($lista1,$lista2).") veces";
                ?>
            </div>
            <div class="txt">
                <p>Número de veces que aparece una cadena <br> <hr>
                echo"$lista2 aparece (".substr_count($lista1,$lista2).") veces";
            </p>
            </div>
        </div>
<!STRLEN>
        <div class="card-child-1">
            <ul>
                <li>FUNCIÓN STRLEN</li>
            </ul>
            <div class="php">
                <?php
                echo $texto = "La botella es blanca";
                echo "$texto";
                echo '<img src="abajo1.png"><br />';
                echo 'Longitud : '.strlen($texto).'';
                ?>
            </div>
            <div class="txt">
                <p>Longitud de una cadena <br> <hr>
                echo 'Longitud : '.strlen($texto).'';
            </p>
            </div>
        </div>
<!TRIM>
    <div class="card-child-1">
            <ul>
                <li> FUNCIÓN TRIM, LTRIM, RTRIM, CHOP</li>
            </ul>
            <div class="php">
                <?php
                echo $texto = "ªªªªBIENVENIDOªªªª";
                echo "<br />";
                echo '<img src="abajo1.png"><br />';
                echo trim($texto,"ª");
                ?>
            </div>
            <div class="txt">
                <p>Elimina espacios en blanco, saltos, caracteres, etc. <br> <hr>
                echo trim($texto,"ª");</p>
            </div>
        </div>
<!STR_REPEAT>
    <div class="card-child-1">
            <ul>
                <li>FUNCIÓN STR_REPEAT</li>
            </ul>
            <div class="php">
                <?php
                echo $texto = "planta ";
                echo "<br />";
                echo '<img src="abajo1.png"><br />';
                echo str_repeat($texto,4);
                ?>
            </div>
            <div class="txt">
                <p>Repite la cadena n veces <br> <hr>
                echo str_repeat($texto,4);</p>
            </div>
        </div>
<!STRSTR>
    <div class="card-child-1">
            <ul>
                <li>FUNCIÓN STRSTR</li>
            </ul>
            <div class="php">
                <?php
                echo $texto = "La galleta tiene proteínas y azúcar";
                echo "<br />";
                echo '<img src="abajo1.png"><br />';
                echo strstr($texto,"tiene",false);
                echo "<br />";
                echo strstr($texto,"tiene",true);
                ?>
            </div>
            <div class="txt">
                <p>Devuelve una subcadena desde la apareción de la cadena, excluida o incluida <br> <hr>
                echo strstr($texto,"tiene",false);<hr>
                echo strstr($texto,"tiene",true);</p>
            </div>
        </div>
<!CHR>
        <div class="card-child-1">
            <ul>
                <li>FUNCIÓN CHR</li>
            </ul>
            <div class="php">
                <?php
                echo chr(68)." es la salida";
                ?>
            </div>
            <div class="txt">
                <p>Devuelve el caracter según el código ASCII <br> <hr>
                echo chr(68)." es la salida";</p>
            </div>
        </div>
    <h2>OTROS EJEMPLOS</h2>
    <div class="flex-container-1">
        <div class="descrip">
            <p class="p_ejem">Dada una cadena de texto, se indica cuantas veces aparece
                cada vocal.
            </p>
        </div>
        <div class="ejemplo">
            <p>if (preg_match('/[aeiou]/i',chr($i))){<br>
                echo "\"".chr($i)."\"N. veces en texto: $val<br>";
                $vocales = $vocales + $val;
            }</p>
            <hr>
        <?php
        $texto = "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
        echo "<br />";
        $vocales = 0;
        echo $texto;
        echo"<br />";
        echo '<img src="abajo1.png"><br />';
        foreach (count_chars($texto, 1) as $i => $val) {
            if (preg_match('/[aeiou]/i',chr($i))){
                echo "\"".chr($i)."\" N. veces en texto: $val<br>";
                $vocales = $vocales + $val;
            }
         }
         echo "<br>Vocales: $vocales";
        ?>
        </div>
        <div class="descrip">
            <p class="p_ejem">Dada una cadena de texto, sustituye la vocal "o"
                por el símbolo " * "</p>
        </div>
        <div class="ejemplo">
        <p>$res = str_replace("o","*",$texto);</p>
        <hr>
            <?php
            $texto = "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
            echo $texto;
            echo "<br />";
            echo '<img src="abajo1.png"><br />';
            $res = str_replace("o","*",$texto);
            echo $res;
            ?>
        </div>
    </div>
    </article>
    <footer>
        <section>
        <div class="col-xs-12 col-lg-8 col-xl-6 col-xxl-5" id="derecho">
         <h4>Todos los derechos reservados</h4>
        </div>
        <div id="autor">
            <p>Guillermo Martinez</p>
        </div>
        </section>
    </footer>
</body>