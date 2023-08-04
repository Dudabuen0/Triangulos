<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>
<body>
    <header>
    <h2>Forma ou não forma?</h2><h3>*triangulos*</h3>

    <form action="" method="get">
      Lado A:<input type="number" name="numero1" /><br />
      Lado B:  <input type="number" name="numero2" /><br />
      Lado C:  <input type="number" name="numero3" /><br />
      <input type="submit" name="submit" value="Testar" />
    </form>
    </section>
    </header>
 <?php 
    $a = $_GET['numero1'];
    $b = $_GET['numero2'];
    $c = $_GET['numero3'];

  if( ($a+$b>$c)&&($a+$c>$b)&&($b+$c>$a) ){
   if($a==$b && $b==$c)
    echo "Forma triângulo equilátero!";
   elseif ($a==$b || $a==$c || $b==$c)
    echo "Forma triângulo isósceles!";
   else
    echo "Forma triângulo escaleno!";
  }else
   echo "Não forma triângulo.";
 ?>
  </body>
</html>