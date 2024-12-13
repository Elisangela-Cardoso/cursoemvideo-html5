<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
     
        <?php
        // cotação vinda da API do Banco Central
        $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y") ;

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
        $dados = json_decode(file_get_contents($url), true);

        //var_dump($dados);
        
        $cotação = $dados["value"][0]["cotacaoCompra"];
        
        echo "A cotação foi $cotação";
                
        $real = $_REQUEST["din"] ?? 0;
        
        $dolar = $real / $cotação;
        
       /*$padrão = numfmt_create("pt_Br", NumberFormatter::CURRENCY);*/

         echo "Seus R\$" . number_format($real, 2, ",",".")."equivalem a US\$" . number_format($dolar, 2, "," , ".");
        
        echo "<p>Seus" . numfmt_format_currency($padrão,$real, "BRL") . " equivalem a 
        <strong>" . numfmt_format_currency($padrão,$dólar, "USD") . "</strong></p>";
        
        ?>
        <button onclick=
        "javascript:history.go
        (-1)">Volta</button>


    </main>
</body>
</html>

