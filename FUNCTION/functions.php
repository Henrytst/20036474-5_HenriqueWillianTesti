<?php

function cabecalho(){
?>
<p id='cabecalho'><strong>Venha experimentar nossas delicias!!!</strong></p>
<img id='topo' src='IMAGES/Cabeçalho.png' width='100%'>
<nav>
    <ul class='menu'>
        <li><a href='index.php'><strong>Home</strong></a>
            <!--<ul>
                    <li><a href='#'><strong>Web Design</strong></a></li>
                    <li><a href='#'><strong>Hospedagem</strong></a></li>
                    <li><a href='#'><strong>SEO</strong></a></li>
                    <li><a href='#'><strong>Sistemas</strong></a></li>
                </ul>-->
        </li>
        <li><a href='PAGES/QuemSomos.php'><strong>Quem Somos?</strong></a></li>
        <li><a href='PAGES/Contato.php'><strong>Contato</strong></a></li>
        <li><a href='PAGES/Localização.php'><strong>Localização</strong></a></li>
    </ul>
</nav>
<?php
}

function rodape(){
?>
<img src='IMAGES/rodape.png' width='100%'>
<p class='rodape'>Henrique Willian Testi</p><br>
<p class='rodape'>Login: 20036474-5</p><br>
<p class='rodape'>Curso: Superior em Sistemas Para Internet</p>
<?php
}

function cabecalhoalternativo(){
    ?>
<p id='cabecalho'><strong>Venha experimentar nossas delicias!!!</strong></p>
<img id='topo' src='../IMAGES/Cabeçalho.png' width='100%'>
<nav>
    <ul class='menu'>
        <li><a href='../index.php'><strong>Home</strong></a>
            <!--<ul>
                        <li><a href='#'><strong>Web Design</strong></a></li>
                        <li><a href='#'><strong>Hospedagem</strong></a></li>
                        <li><a href='#'><strong>SEO</strong></a></li>
                        <li><a href='#'><strong>Sistemas</strong></a></li>
                    </ul>-->
        </li>
        <li><a href='../PAGES/QuemSomos.php'><strong>Quem Somos?</strong></a></li>
        <li><a href='../PAGES/Contato.php'><strong>Contato</strong></a></li>
        <li><a href='../PAGES/Localização.php'><strong>Localização</strong></a></li>
    </ul>
</nav>
<?php
    }
    
    function rodapealternativo(){
    ?>
<img src='../IMAGES/rodape.png' width='100%'>
<p class='rodape'>Henrique Willian Testi</p><br>
<p class='rodape'>Login: 20036474-5</p><br>
<p class='rodape'>Curso: Superior em Sistemas Para Internet</p>
<?php
    }