<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
     
        <?php
        $cotação = 5.17;
        
        $real = $_REQUEST["din"] ?? 0;
        
        $dolar = $real / $cotação;
        
       /*$padrão = numfmt_create("pt_Br", NumberFormatter::CURRENCY);*/

         echo "Seus R\$" . number_format($real, 2, ",",".")."equivalem a US\$" . number_format($dolar, 2, "," , ".");
        
        echo "Seus" . numfmt_format_currency($padrão,$real, "BRL") . "equivalem a" . numfmt_format_currency($padrão,$dólar, "USD");
        
        ?>


    </main>
</body>
</html>

