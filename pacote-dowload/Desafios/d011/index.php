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
       $preço = $_REQUEST['preço'] ?? '0';
       $reaj = $_REQUEST['reaj'] ?? '0';
    ?>
    <main>
    <h1>Reajustador de Preços</h1>
     <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="preço">Preço do Produto(R$)</label>
        <input type="number" name="preço" id="preço" min="0.10" step="0.01" value="<?=$preço?>">

        <label for="reaj">Qual será o percentual de ajuste? (<strong><span id="p">?</span>%</strong>)</label>
        <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>">
        <input type="submit" value="Reajustar">
     </form>
     </main>
     <?php 
       $aumento = $preço * $reaj / 100;
       $novo = $preço + $aumento;
     ?>
      
     <section>
        <h2>Resultado do Reajusto</h2>
        <p>O produto que custa R$<?=number_format($preço, 2, ",", ".")?>, com <strong><?=$reaj?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($novo, 2, ".", ".")?></strong> a partir de agora.</p>
     </section>
     <script>
        // Declaraçães automáticas 
        mudaValor()
        function mudaValor(){
           p.innerText = reaj.value
        }
     </script>

</body>
</html>