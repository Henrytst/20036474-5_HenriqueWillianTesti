<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Bolo no Pote</title>
    <link rel="stylesheet" href="../CSS/embelezamento.css">
    <?php
    include("../FUNCTION/functions.php");
    ?>
</head>

<body>
    <header>
        <?=cabecalhoalternativo();?>
    </header>
    <div class="bloco">
        <img class="produto" src="../IMAGES/BolonoPote.png" height="20%" width="20%">
        <h1>R$ 6,50</h1><br>
        <div class="descricao">
            <h2>Bolo no Pote:</h2>
            <p> Nossos bolos de pote são feitos especialmente com ingredientes escolhidos á dedo, possui uma maciez que
                você dificilmente
                encontrará em outra região em são paulo, os sabores são incontáveis,temos todos os sabores artificiais e
                caso você
                goste de alguma fruta nos podemos acrescentar como ingrediente especial. Temos sabores como chocolate,
                morango, balnilha,
                maracujá, limão. Feitos á base de pão de ló e as melhores habilidades de confeitária especialmente para
                você.
            </p>
        </div>
        <button id="botao" type="submit">Comprar</button>
    </div>

    <footer>
        <?=rodapealternativo();?>
    </footer>
</body>

</html>