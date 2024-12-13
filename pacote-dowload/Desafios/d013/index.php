<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
        }
    </style>
</head>
    <?php 
      $saque = $_REQUEST['saque'] ?? 0;
    ?>
<body>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual o valor deseja sacar? (R$) <sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <p style="font-size: 0.6em;"><sup>*</sup> Notas disponiveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="sacar">
        </form>
    </main>
     <?php 
        $resto = $saque;
        // Saque de R$100
        $tot100 = floor($resto / 100);
        $resto %= 100;

        // Saque de R$50
        $tot50 = floor($resto / 50);
        $resto %= 50;

        // Saque de R$10
        $tot10 = floor($resto / 10);
        $resto %= 10;

        // Saque de R$5
        $tot5 = floor($resto / 5);
        $resto %= 5;
     ?>
    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", "." )?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as sequintes notas:</p>
        <ul>
            <li><img src="imagem/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$tot100?></li>
            <li><img src="imagem/50-reais.jpg" alt="Nota de 50" class="nota"> x<?=$tot50?></li>
            <li><img src="imagem/10-reais.jpg" alt="Nota de 10" class="nota"> x<?=$tot10?></li>
            <li><img src="imagem/5-reais.jpg" alt="Nota de 5" class="nota"> x<?=$tot5?></li>
        </ul>
    </section>
    
</body>
</html>