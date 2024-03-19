<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculadora PHP</title>
<style>
    .calculator {
        width: 300px;
        margin: 50px auto;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    input[type="number"] {
        width: 100%;
        margin-bottom: 10px;
        padding: 8px;
    }
    button {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        cursor: pointer;
    }
</style>
</head>
<body>
<div class="calculator">
    <h2>Calculadora PHP</h2>
    <form method="GET">
        <input type="number" name="x" placeholder="Digite o primeiro número" required>
        <input type="number" name="y" placeholder="Digite o segundo número" required>
        <select name="operacao">
            <option value="adicao">Adição (+)</option>
            <option value="subtracao">Subtração (-)</option>
            <option value="multiplicacao">Multiplicação (x)</option>
            <option value="divisao">Divisão (/)</option>
        </select>
        <button type="submit">Calcular</button>
    </form>
    <hr>
    <?php
    if(isset($_GET['operacao'])) {
        $x = $_GET['x'];
        $y = $_GET['y'];
        $operacao = $_GET['operacao'];
        $resultado = 0;
        switch($operacao) {
            case 'adicao':
                $resultado = $x + $y;
                echo "<p>O resultado da adição é: $resultado</p>";
                break;
            case 'subtracao':
                $resultado = $x - $y;
                echo "<p>O resultado da subtração é: $resultado</p>";
                break;
            case 'multiplicacao':
                $resultado = $x * $y;
                echo "<p>O resultado da multiplicação é: $resultado</p>";
                break;
            case 'divisao':
                if($y != 0) {
                    $resultado = $x / $y;
                    echo "<p>O resultado da divisão é: $resultado</p>";
                } else {
                    echo "<p>Erro: Divisão por zero não é permitida!</p>";
                }
                break;
            default:
                echo "<p>Operação inválida!</p>";
        }
    }
    ?>
</div>
</body>
</html>
