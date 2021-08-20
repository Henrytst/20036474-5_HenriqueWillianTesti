<!doctype html>
<html lang="pt-br">

<head>
    <!-- Metadados -->
    <meta charset="utf-8">

    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/contato.css">

    <!-- Título da página (aparece na aba) -->
    <title>Contato</title>
</head>

<body>

    <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
    <div>
        <h1 id="titulo">Contate-nos!</h1>
        <p id="subtitulo">Complete suas informações</p>
        <br>
    </div>

    <!-- Início do formulário -->
    <form>

        <fieldset class="grupo">
            <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
            <div class="campo">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <!-- Campo do sobrenome com legenda "sobrenome" e css de classe "campo" -->
            <div class="campo">
                <label for="sobrenome"><strong>Sobrenome</strong></label>
                <input type="text" name="sobrenome" id="sobrenome" required>
            </div>
        </fieldset>

        <!-- Campo de email com-->
        <div class="campo">
            <label for="email"><strong>Email</strong></label>
            <input type="email" name="email" id="email" required>
        </div>

        <!-- Campo de desenvolvimento web com 3 opções de botões selecionáveis (radio button) e css de classe "campo"
        <div class="campo">
            <label><strong>De qual lado da aplicação você desenvolve?</strong></label>
            <label>
                <input type="radio" name="devweb" value="frontend" checked>Front-end
            </label>
            <label>
                <input type="radio" name="devweb" value="backend">Back-end
            </label>
            <label>
                <input type="radio" name="devweb" value="fullstack">Fullstack
            </label>
        </div>-->

        <!-- Campo de senioridade com 3 opções para escolha (select option) e css de classe "campo"-->
        <div class="campo">
            <label for="senioridade"><strong>Avalie-nos</strong></label>
            <select id="senioridade" required>
                <option selected disabled value="">Selecione</option>
                <option>Ótimo!</option>
                <option>Bom</option>
                <option>Regular</option>
                <option>Ruim</option>
            </select>
        </div>

        <fieldset class="grupo">
            <!-- Campo de tecnologias para escolha de 1 ou mais opções para marcar (checkbox) e css de classe "campo" -->
            <div id="check">
                <label><strong>Pedidos que voce realizou:</strong></label><br><br>
                <input type="checkbox" id="tecnologia1" name="doce1" value="">
                <label for="tecnologia1"> Bolo no Pote</label>
                <input type="checkbox" id="tecnologia2" name="doce2" value="">
                <label for="tecnologia2"> Brigadeiro</label>
                <input type="checkbox" id="tecnologia3" name="doce3" value="">
                <label for="tecnologia3"> Doce de leite</label>
                <input type="checkbox" id="tecnologia4" name="doce4" value="">
                <label for="tecnologia4"> Mini-Churros</label>
                </br></br><input type="checkbox" id="tecnologia5" name="doce5" value="">
                <label for="tecnologia5"> Torta de limão</label>
                <input type="checkbox" id="tecnologia6" name="doce6" value="">
                <label for="tecnologia6"> Bolo de Festa</label>
                <input type="checkbox" id="tecnologia7" name="doce7" value="">
                <label for="tecnologia7"> Beijinho </label>
                <input type="checkbox" id="tecnologia7" name="doce8" value="">
                <label for="tecnologia7"> Balas de coco coloridas</label>
            </div>
        </fieldset>

        <!-- Caixa de texto -->
        <div class="campo">
            <br>
            <label for="experiencia"><strong>Escreva para nós: </strong></label>
            <textarea rows="6" style="width: 26em" id="experiencia" name="experiencia"></textarea>
        </div>

        <!-- Botão para enviar o formulário -->
        <button class="botao" type="submit" onsubmit="">Concluído</button>

    </form>

</body>

</html>