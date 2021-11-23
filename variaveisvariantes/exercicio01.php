<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="_css/img/LogoFav.ico" type="image/x-icon">
    <title>Curso de PHP</title>
</head>
<body>
<div>
    <form method="get" action="passo2.php">
        <?php
            $cont = isset($_GET["cont"])? $_GET["cont"]:1;
            $c = 1;
            echo "<input type='hidden' name='cont' value='$cont'>Escolha $cont numeros <br/> <br/>";
            while ($c <= $cont) {
            echo "Valor $c : <input type='number' name='v$c' max='100' min='0' value='0'><br/>";
            $c+= 1;
            }
        ?>
        <p></p><input type="submit" value="Enviar" class="botao"><br/></p>
        <p><a href="01cont.htm" class="botao">Voltar</a></p>
    </form>
</div>
</body>
</html>
 