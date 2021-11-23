<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <link rel="shortcut icon" href="_css/img/LogoFav.ico" type="image/x-icon">
  <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php
      $cont = isset($_GET["cont"])? $_GET["cont"]:1;
      $ctr = 1;

      while ($ctr <= $cont) {
        $v = "num" .$ctr;
        $num = "v" .$ctr;
        $$v = isset($_GET["$num"])?$_GET["$num"]:1;
        $ctr += 1;
      }
       $i = 1; 
       $total = 0;
      while ($i <= $cont) {
        $v = "num" .$i;
        echo "Valor $i : " . $$v . " <br/>";
        $total += $$v;
        $i += 1;
      }
      $raiz = sqrt($total);
      $media = ($total / $cont) ;

      echo "<br/>Valor total : $total <br/>"  ;
      echo "<br/>A raiz quadrada da soma é igual: " . number_format ($raiz, 2);
      echo "<br/><br/>A media dos valores informados é igual à:  " . number_format ($media,2);
    ?>  
    <br/>
    
    <p><a href="01cont.htm" class="botao">Inicio</a></p>
</div>
</body>
</html>