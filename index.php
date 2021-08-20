<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="CSS/embelezamento.css">
    <?php
    include("FUNCTION/functions.php");
    ?>

</head>

<body>
    <header>
        <?=cabecalho();?>
    </header>

    <tr>
        <?php
        include("DADOS/dados.php");

        foreach($produtos as $dado){
            echo "<td>";
            echo $dado;           
            echo "</td>";
        }
        ?>
        <!--<a href='PAGES/ProdutoBolonoPote.php'>
            <td><img class='imagem' src='IMAGES/BolonoPote.png' height='20%' width='20%'>
                <p class='link'>Bolo no Pote<br><br><br>&nbsp;&nbsp;&nbsp;Peça Já!</p>
            </td>
        </a>
        <a href='PAGES/produtoBrigadeiro.php'>
            <td><img class='imagem' src='IMAGES/Brigadeiro.png' height='20%' width='20%'>
                <p class='link'>&nbsp;&nbsp;Brigadeiro<br><br><br>&nbsp;&nbsp;&nbsp;Peça Já!</p>
            </td>
        </a>
        <a href='PAGES/produtoDocedeLeite.php'>
            <td><img class='imagem' src='IMAGES/DocedeLeite.png' height='20%' width='20%'>
                <p class='link'>Doce de Leite<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;Peça Já!</p>
            </td>
        </a>
        <a href='PAGES/produtoMiniChurros.php'>
            <td><img class='imagem' src='IMAGES/Mini-Churros.png' height='20%' width='20%'>
                <p class='link'>Mini-Churros<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;Peça Já!</p>
            </td>
        </a>
        <a href='PAGES/ProdutoTortadeLimao.php'>
            <td><img class='imagem' src='IMAGEs/TortadeLimao.png' height='20%' width='20%'>
                <p class='link'>&nbsp;&nbsp;Torta de &nbsp;&nbsp;&nbsp;&nbsp;Limão<br><br>&nbsp;&nbsp;Peça Já!</p>
            </td>
        </a>
        <a href='PAGES/ProdutoBolodeFesta.php'>
            <td><img class='imagem' src='IMAGES/BolodeFesta.png' height='20%' width='20%'>
                <p class='link'>Bolo de Festa<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;Peça Já!</p>
            </td>
        </a>
        <a href='PAGES/ProdutoBeijinho.php'>
            <td><img class='imagem' src='IMAGES/Beijinho.png' height='20%' width='20%'>
                <p class='link'>&nbsp;&nbsp;&nbsp;Beijinho<br><br><br>&nbsp;&nbsp;&nbsp;Peça Já!</p>
            </td>
        </a>
        <a href='PAGES/produtoBalasdeCoco.php'>
            <td><img class='imagem' src='IMAGES/BaladeCoco.png' height='20%' width='20%'>
                <p class='link'>&nbsp;&nbsp;Balas de &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Coco<br><br>&nbsp;&nbsp;Peça Já!</p>
            </td>
        </a>
    </tr>-->

    <footer>
        <?=rodape();?>
    </footer>

</body>

</html>