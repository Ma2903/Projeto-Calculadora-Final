<?php
    require_once 'funcoesCalculo.php';
    $result = "";
    session_start(); //inicializando a sessão 

    if (isset($_POST["inputNum1"]) && isset($_POST["inputNum2"])){

        $numeros1 = $_POST['inputNum1'];
        $numeros2 = $_POST['inputNum2'];

    if ($_POST['selectOperacoes'] == "adicao"){
        $result = $numeros1 . "+" . $numeros2 . "=" . adicao($numeros1,$numeros2);
    }
    else if ($_POST['selectOperacoes'] == "subtracao"){
        $result = $numeros1 . "-" . $numeros2 . "=" . subtracao($numeros1,$numeros2);
    }
    else if ($_POST['selectOperacoes'] == "multiplicacao"){
        $result = $numeros1 . "*" . $numeros2 . "=" . multiplicacao($numeros1,$numeros2);
    }
    else if ($_POST['selectOperacoes'] == "divisao"){
        $result = $numeros1 . "/" . $numeros2 . "=" . divisao($numeros1,$numeros2);
    }
    // echo $result;
    $_SESSION ["resultado"] = $result; //guarda na variavel de sessão

    header("location:../index.php"); //redireciona para uma página especifica
    die();
    }
    //temperatura
    $result = "";
    $temperature = "";
    
    if (isset($_POST["Temp"])){

        $temperature = $_POST['Temp'];
        
        if ($_POST['selectOperacoes'] == "CelFah"){
            $result = celsiusToFahrenheit($temperature);
            echo "<p> $temperature °C é igual a $result °F </p>";
        }
         elseif ($_POST['selectOperacoes'] == "FahCel"){
            $result = fahrenheitToCelsius($temperature);
            echo "<p> $temperature °F é igual a $result °C </p>";
        }
        $_SESSION ["resultado"] = $result;
        header("location:../temperatura.php"); //redireciona para uma página especifica
        die();
    }
?>