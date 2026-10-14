<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>
<body>
    <h2>Verificador de Maioridade</h2>
    <form method="post">
        Nome: <input type="text" name="nome" required>
        <br><br>
        Data de Nascimento: <input type="date" name="data_nascimento" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $data_input = $_POST["data_nascimento"];

        $dataNascimento = new DateTime($data_input);
        $dataAtual = new DateTime('today');
        $idade = $dataNascimento->diff($dataAtual)->y;

        if ($idade >= 18) {
            $status = "maior de idade";
        } else {
            $status = "menor de idade";
        }

        echo "<hr>";
        echo "Olá, <strong>" . $nome . "</strong>.<br>";
        echo "Você é <strong>" . $status . "</strong>.";
    }
    ?>
</body>
</html>