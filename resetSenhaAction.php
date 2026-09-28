<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Resetar Senha - MYSQLI</title>
</head>
<body>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
    <?php
    require_once 'conexaoBD.php';

    $nome      = $_POST['txtNome'];
    $email     = $_POST['txtEmail'];
    $novaSenha = $_POST['txtNovaSenha'];

    // 1) confirma que existe um usuário com esse nome E esse email (garante identidade)
    $sqlVerifica = "SELECT * FROM usuario WHERE nome = '".$nome."' AND email = '".$email."'";
    $resultado   = $conexao->query($sqlVerifica);
    $linha       = mysqli_fetch_array($resultado);

    if ($linha == null) {
        echo '
        <a href="resetSenha.php">
            <h1 class="w3-button w3-teal">Usuário/Email não encontrados!</h1>
        </a>';
    } else {

        // 2) atualiza a senha desse usuário
        $sql = "UPDATE usuario SET senha = '".$novaSenha."'
                WHERE nome = '".$nome."' AND email = '".$email."'";

        if ($conexao->query($sql) === TRUE) {
            echo '
            <a href="index.php">
                <h1 class="w3-button w3-teal">Senha atualizada com sucesso! Faça o login.</h1>
            </a>';
        } else {
            echo '
            <a href="resetSenha.php">
                <h1 class="w3-button w3-teal">ERRO ao resetar a senha!</h1>
            </a>';
        }
    }
    $conexao->close();
    ?>
</div>
</body>
</html>
