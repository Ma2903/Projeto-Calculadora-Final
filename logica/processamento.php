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
                $result = "$temperature °C é igual a $result °F" . "=" . celsiusToFahrenheit($temperature);
            }
            else if ($_POST['selectOperacoes'] == "FahCel"){
                $result = "$temperature °F é igual a $result °C" . "=" . fahrenheitToCelsius($temperature);
            }
            $_SESSION ["resultado"] = $result;
            header("location:../temperatura.php"); 
            die();
        }
    //conversor
        $result = "";
        $medida = "";
        if(isset($_GET['Medida'])) {

            $medida = floatval($_GET['Medida']);
            
            if ($_GET['selectOperacoes'] == 'CenMet') {
                $result = "$medida centímetros é " . "= " . converterCentimetrosParaMetros($medida) . " metros";
            } else if ($_GET['selectOperacoes'] == 'MetCen') {
                $result = "$medida metros é " . "= " . converterMetrosParaCentimetros($medida) . " centímetros";
            } else if ($_GET['selectOperacoes'] == 'MetKm') {
                $result = "$medida metros é " . "= " . converterMetrosParaQuilometros($medida) . " quilômetros";
            } else if ($_GET['selectOperacoes'] == 'KmMet') {
                $result = "$medida quilômetros é " . "= " . converterQuilometrosParaMetros($medida) . " metros";
            }
            else {
                echo "Conversão não suportada.";
            }
            }
            else {
            echo "Por favor, preencha todos os campos.";
            }
        $_SESSION ["resultado"] = $result;
        header("location:../conversor.php"); 
        die();
?>