<?php
if(isset($_POST['nome'])){
    include('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

   
    $mysqli->query("INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de cadastro</title>
</head>
<body>
    <h1>Cadastre o seus dados</h1>
    <form action="" method="post">
    <label>Nome</label><br>
    <input type="text" name="nome"><br>
    <label>E-mail</label><br>
    <input type="email" name="email"><br>
    <label>senha</label><br>
    <input type="text" name="senha">
    <button type="submit">Cadastrar</button>
    </form>
</body>
</html>