<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do quiz</title>
    <link rel="stylesheet" href="estilos-quiz.css">
</head>

<body>
<h1>  Quiz RockPedia</h1>

<h2> Resultado do seu conhecimento sobre Rock! </h2>
<div id="resposta">

    <?php
    if (empty($_POST["questao1"]) && empty($_POST["questao2"]) && empty($_POST["questao3"])) {
    ?>
        <p style="color:crimson;font-weight: bold;">Por favor responda as questoes !</p>

    <?php
    } else {




        $questao1 = $_POST['questao1'];
        $questao2 = $_POST['questao2'];
        $questao3 = $_POST['questao3'];
        $questao4 = $_POST['questao4'];
        $questao5 = $_POST['questao5'];
        $questao6 = $_POST['questao6'];


        $resposta1 = "b";
        $resposta2 = "c";
        $resposta3 = "a";
        $resposta4 = "c";
        $resposta5 = "a";
        $resposta6 = "a";

        /* Resposta do quiz  */

        $respostaCerta1 = "Renato Manfredini Junior";
        $respostaCerta2 = "Kiss";
        $respostaCerta3 = "Cliff Burton";
        $respostaCerta4 = " Plebe Rude";
        $respostaV_F = "Verdadeiro";
       

        /* Validador de acertos e erros */

        $acertou = 0;
        $errou = 0;


        if ($questao1 == $resposta1) {
            $acertou++;
            echo "<font color = blue> Questao 1: Correta!<br> <br></font>";
        } else {
            $errou++;
            echo "<font color = red> 1) Errou!!! Resposta certa: $respostaCerta1 <br> <br> </font>";
        }
        if ($questao1 == $resposta2) {
            $acertou++;
            echo "<font color = blue> Questao 2: correta! <br> <br> </font> ";
        } else {
            $errou++;
            echo "<font color = red> 2) Errou  !!!  Resposta certa: $respostaCerta2 <br> <br ></font>";
        }
        if ($questao3 == $resposta3) {
            $acertou++;
            echo "<font color = blue> Questao 3: Correta! <br> <br> </font> ";
        } else {
            $errou++;
            echo "<font color = red> 3) Errou!!!  Resposta certa: $respostaCerta3<br><br></font>";
        }
        if ($questao4 == $resposta4) {
            $acertou++;
            echo "<font color = blue> Questao 4: Correta! <br><br> </font> ";
        } else {
            $errou++;
            echo "<font color = red> 4) Errou!!!  Resposta certa: $respostaCerta4<br> <br></font>";
        }
        if ($questao5 == $resposta5) {
            $acertou++;
            echo "<font color = blue> Questao 5: Correta! <br><br> </font> ";
        } else {
            $errou++;
            echo "<font color = red> 5) Errou!!! Resposta certa: $respostaV_F <br> <br></font>";
        }
        if ($questao6 == $resposta6) {
            $acertou++;
            echo "<font color = blue> Questao 6: Correta! <br><br> </font> ";
        } else {
            $errou++;
            echo "<font color = red> 6) Errou!!! Resposta certa: $respostaV_F <br> <br></font>";
        }
    }
    ?>
    <a href="quiz.php"> <input id="btn" type="reset" name="voltar" id="voltar" value="Voltar" />
    </a>
    

    </div>
</body>

</html>