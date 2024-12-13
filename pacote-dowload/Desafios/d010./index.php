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
        $atual = date("Y");
        $nasc = $_GET['nasc'] ?? '2000';
        $ano = $_GET['ano'] ?? $atual;
    ?>
     <main>
     <h1>Calculando a sua idade</h1>
     <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
       <label for="nasc">Em que ano nasceu?</label>
       <input type="number" name="nasc" id="nasc" min="1990" value="<?=$nasc?>">
       <label for="ano">Quer saber sua idade?</label>
       <input type="number" name="ano" id="ano" min="1990" value="<?=$ano?>">
       <input type="submit" value="Qual será minha idade?">
    </form>

     </main>
     <section>
        <?php 
         $idade = $ano - $nasc;
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <strong><?=$nasc?> anos</strong> <strong>em <?=$idade?></strong></p>
     </section>
</body>
</html>