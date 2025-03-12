<?php

    $_POST ['num1'];
    $_POST ['num2'];
    $_POST ['op'];
    $result;

    if ($_POST ['op'] == 'soma') {
        $result = $_POST ['num1'] + $_POST ['num2'];
    } else if ($_POST ['op'] == 'subtracao') {
        $result = $_POST ['num1'] - $_POST ['num2'];
    } else if ($_POST ['op'] == 'multiplicacao') {
        $result = $_POST ['num1'] * $_POST ['num2'];
    } else if ($_POST ['op'] == 'divisao') {
        $result = $_POST ['num1'] / $_POST ['num2'];
    } else{
        echo '<h1>Opção inválida!</h1>';
    }

    echo "<h2>O resultado do calculo é: $result</h2>";

?>
