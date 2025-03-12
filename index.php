<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<style>
    h1{
        display: inline;
        font-size: 30px;
        font-family: arial;
        color: white;
    }
    label{
        font-family: arial;
        color: white;
    }
    .container{
        display: flex;
        justify: center;
        align-items: center;
        flex-direction: column;
        width: 50%;
        height: 40%;
        border-radius: 7px;
        margin: 80px auto;
        padding:30px;
        background-color: blueviolet;

    }
    .form{
        width: 50%;
        display: flex;
        justify: center;
        flex-direction: column;
        align-items: center;
    }
    form{
        gap: 7px;    
        width: 100%;
        display: flex;
        justify: center;
        flex-direction: column;
        align-items: center;    
    }
    form :where(#num1, #num2){
        width: 40%;
        border: 2px solid white;
        border-radius: 5px;
        height: 25px;
        transition: all .5s;
    }
    form :where(#num1, #num2):focus{
        width:50%;
    }
    select{
        background-color: white;
        font-weight: bold;
        height: 30px;
        width:90px;
        border-radius: 3px;
    }
    #btn{
        height: 30px;
        width:65px;
        cursor: pointer;
    }

</style>
<body>
    <div class="container">
        <div class="form">
                <form action="calc.php" method="post">
                    <h1>Calculadora</h1>
                    <label for="">Digite o primeiro número:</label>
                    <input type="number" placeholder="Insira um valor" name="num1" id="num1">
                    <label for="">Digite o segundo número:</label>
                    <input type="number" name="num2" placeholder="Insira outro valor" id="num2">
        
                    <select name="op" id="op">
                        <option value="soma">ADIÇÃO (+)</option>
                        <option value="subtracao">SUBTRAÇÃO (-)</option>
                        <option value="multiplicacao">MULTIPLICAÇÃO (*)</option>
                        <option value="divisao">DIVISÃO (/)</option>
                    </select>
                    <input type="submit" id="btn" value="Calcular">
                </form>

        </div>
    </div>
</body>
</html>