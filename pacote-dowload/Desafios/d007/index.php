<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
      $minimo = 1_380.60;
      $salario = $_GET['sal'] ?? 0;
       
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <h1>Informe seu Salário</h1>
            <label for="sal">Salario(R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário minimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?> 
            </strong></p>
            <input type="submit" value="Calcular">

        </form>
        
    </main>
     <section>
        <h2>Resultado Final</h2>
       <?php 
         $tot = intdiv($salario, $minimo);
         $dif = $salario % $minimo;
        
        echo "<p>Quem recebe um salário de R\$". number_format($salario, 2, ",", "."),"ganha $tot salários mínimos + R\$". number_format($dif, 2, ",", "."). "</p>";
       ?>
     </section>
</body>
</html>