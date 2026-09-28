<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Criar Acesso - MYSQLI</title>
</head>
<body>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
    <?php
    require_once 'conexaoBD.php';

    $nome           = $_POST['txtNome'];
    $email          = $_POST['txtEmail'];
    $senha          = $_POST['txtSenha'];
    $confirmaSenha  = $_POST['txtConfirmaSenha'];

    // 1) as senhas digitadas precisam ser iguais
    if ($senha !== $confirmaSenha) {
        echo '
        <a href="cadastroUsuario.php">
            <h1 class="w3-button w3-teal">As senhas não conferem. Tente novamente!</h1>
        </a>';
    } else {

        // 2) verifica se já existe um usuário com esse nome
        $sqlVerifica = "SELECT * FROM usuario WHERE nome = '".$nome."'";
        $resultado   = $conexao->query($sqlVerifica);
        $linha       = mysqli_fetch_array($resultado);

        if ($linha != null) {
            echo '
            <a href="cadastroUsuario.php">
                <h1 class="w3-button w3-teal">Esse nome de usuário já existe!</h1>
            </a>';
        } else {

            // 3) insere o novo usuário
            $sql = "INSERT INTO usuario (nome, email, senha)
                    VALUES ('".$nome."', '".$email."', '".$senha."')";

            if ($conexao->query($sql) === TRUE) {
                echo '
                <a href="index.php">
                    <h1 class="w3-button w3-teal">Acesso criado com sucesso! Faça o login.</h1>
                </a>';
            } else {
                echo '
                <a href="cadastroUsuario.php">
                    <h1 class="w3-button w3-teal">ERRO ao criar o acesso!</h1>
                </a>';
            }
        }
    }
    $conexao->close();
    ?>
</div>
</body>
</html>
