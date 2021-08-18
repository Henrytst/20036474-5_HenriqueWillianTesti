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
        <img class="produto" src="../IMAGES/Beijinho.png" height="20%" width="20%">
        <h1>R$ 00,95</h1><br>
        <div class="descricao">
            <h2>Beijinhos:</h2>
            <p> Nossos beijinhos de coco são feitos em formatos esféricos, possui uma maciez extraordinaria feita dos
                melhores ingredientes
                que voce pode encontrar pela região.Ele é composto por leite condensado, coco, manteiga e ingredientes
                especiais que faz
                com que fiquem com um aroma extraordinario. Voce pode encomendar também com cravos.
            </p>
        </div>
        <button id="botao" type="submit">Comprar</button>
    </div>

    <footer>
        <?=rodapealternativo();?>
    </footer>
</body>

</html>