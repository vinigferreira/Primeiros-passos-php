<?php

if(isset($_POST['submit']))
{
include_once('config.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data_nasc = $_POST['data_nasc'];
$query = "INSERT INTO dadosuser(nome, email, senha,data_nasc) VALUES ('$nome', '$email', '$senha', '$data_nasc')";
$resultado = mysqli_query($conexao, $query);
if (!$resultado) {
    echo "Erro na consulta: " . mysqli_error($conexao);
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="form-content">
        <form action="formulario.php" method="POST">
            <div class="name-area">
            <label for="nome" class="labelInp">Digite seu nome</label>
            <input type="text" name="nome" id="nome" class="inputUser" required>
        </div>
        <div class="email-area">
            <label for="email" class="labelInp">Digite seu email</label>
            <input type="email" name="email" id="email" class="inputUser" required>
        </div>
        <div class="password-area">
            <label for="password" class="labelInp">Digite sua senha</label>
            <input type="password" name="senha" id="password" class="inputUser" required>
        </div>
        <div class="data_nasc-area">
            <label for="data_nasc" class="labelInp">Data de nascimento</label>
            <input type="date" name="data_nasc" id="data_nasc" class="inputUser" required>
        </div>
        <button type="submit" name="submit">Enviar</button>
        </form>
    </div>
    
</body>
</html>
