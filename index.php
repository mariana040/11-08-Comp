<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contato</title>
</head>
<body>
<body>
<h1>Fale Conosco</h1>
<form method="post" action="">
<label for="nome">Nome</label><br>
<input type="text" name="nome" id="nome" required><br><br>

<label for="email">Email</label><br>
<input type="email" name="email" id="email" required><br><br>

<label for="mensagem">Mensagem</label><br>
<input type="mensagem" name="mensagem" id="mensagem" rows="5" required><br><br>

<input type="submit" value="Enviar"><br><br>
</form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //COLETA DOS DADOS DO FORMULARIO
       $nome = htmlspecialchars ($_POST["nome"]);
       $email = htmlspecialchars ($_POST["email"]);
       $mensagem = htmlspecialchars ($_POST["mensagem"]);

       //EXIBE OS DADOS (EM UMA APLICAÇÃO REAL, VOCÊ PODERIA SALVAR OU ENVIAR POR EMAIL)
       echo "<h2>Dados Recebidos:</h2>";
       echo "<p><strong>Nome:</strong>$nome</p>" ;
       echo "<p><strong>Email:</strong>$email</p>";
       echo "<p><strong>Mensagem:</strong>$mensagem </p>";
    }
    ?>
</body>
</html>