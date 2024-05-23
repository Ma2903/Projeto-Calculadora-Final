<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>
    
    <div class="div-conteudo">
        <form method="POST" action="logica/processamento.php">
            <label>Primeiro número:</label>
            <input type="text" name="inputNum1" placeholder="Digite o primeiro número">
            <label>Segundo número:</label>
            <input type="text" name="inputNum2" placeholder="Digite o segundo número">
            <label>Escolha a Operação Desejada:</label>
            <select name="selectOperacoes">
                <option value="adicao">Adição</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
            <input id="botao" type="submit" value="Calcular">
            <label id="result"> 
                <?php
                    if (isset($_SESSION["resultado"]))
                    {
                        //caso exista
                        echo $_SESSION["resultado"];
                    }
                ?>
            </label>
        </form>
        <img src="img/google-play.png">
    </div>
    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas - AMS</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>