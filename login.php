<?php
if(isset($_POST['nome'])){
    include('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha']; 

    $sql_code = "SELECT * FROM cadastro WHERE email='$email' LIMIT 1 ";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    $usuario = $sql_query->fetch_assoc();
    
    if($sql_query->num_rows > 0) {
        $usuario = $sql_query->fetch_assoc();
        if(password_verify($senha, $usuario['senha'])){
            echo "Usuário logado!";
        } else {
            echo "Falha ao se logar! Senha incorreta";
        }
    } else {
        echo "Falha ao se logar! Email não encontrado";
    }
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
    <h1>seus dados</h1>
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