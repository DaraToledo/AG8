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
<a href="index.php" class="w3-display-topleft">
<i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-xxlarge"></i>
</a>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
<h1 class="w3-center w3-teal w3-round-large w3-margin">Esqueci minha Senha</h1>
<form action="resetSenhaAction.php" class="w3-container" method='post'>
<label class="w3-text-teal" style="font-weight: bold;">Nome de Usuário</label>
<input name="txtNome" class="w3-input w3-light-grey w3-border" required><br>
<label class="w3-text-teal" style="font-weight: bold;">Email cadastrado</label>
<input name="txtEmail" type="email" class="w3-input w3-light-grey w3-border" required><br>
<label class="w3-text-teal" style="font-weight: bold;">Nova Senha</label>
<input name="txtNovaSenha" type="password" class="w3-input w3-light-grey w3-border" required><br>
<button name="btnResetar" class="w3-button w3-teal w3-cell w3-round-large w3-right w3-margin-right">
<i class="w3-xxlarge fa fa-refresh"></i> Resetar Senha
</button>
</form>
</div>
</body>
</html>
