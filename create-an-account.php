<?php

if (isset($_POST['submit'])) {
  // print_r($_POST['name'] . '<br>');
  // print_r($_POST['email'] . '<br>');
  // print_r($_POST['telephone'] . '<br>');
  // print_r($_POST['date-of-birth'] . '<br>');
  // print_r($_POST['password'] . '<br>');
  // print_r($_POST['password-confirmation'] . '<br>');
  // print_r($_POST['terms-of-use'] . '<br>');
  // print_r($_POST['privacy-policy'] . '<br>');

  include_once('config.php');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $date_of_birth = $_POST['date-of-birth'];
  $password = $_POST['password'];

  $result = mysqli_query($conexao, "INSERT INTO usuarios(email,nome,telefone,data_de_nascimento,senha) VALUES ('$email','$name','$telephone','$date_of_birth','$password')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <title>Criar conta</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="container">
    <header>
      <img src="img/logo.png" id="logo" alt="logo do app">
      <h1>Criar conta</h1>
      <p>Preencha seus dados para começar.</p>
    </header>

    <form action="create-an-account.php" method="POST">
      <div class="input-box">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="nome@exemplo.com" class="input-user" required>
      </div>

      <div class="input-box">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" placeholder="Nome" class="input-user" required>
      </div>

      <div class="input-box">
        <label for="telephone">Telefone</label>
        <input type="text" name="telephone" id="telephone" placeholder="(00) 00000-0000" class="input-user" required>
      </div>

      <div class="input-box">
        <label for="date-of-birth">Data de Nascimento</label>
        <input type="text" name="date-of-birth" id="date-of-birth" placeholder="00/00/0000" class="input-user" required>
      </div>

      <div class="input-box">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" placeholder="********" class="input-user" required>
      </div>

      <div class="input-box">
        <label for="password-confirmation">Confirmação de Senha</label>
        <input type="password" name="password-confirmation" id="password-confirmation" placeholder="********"
          class="input-user" required>
      </div>

      <div id="checkboxs">
        <div class="input-checkbox">
          <input type="checkbox" name="terms-of-use" id="terms-of-use" class="input-user" required>
          <label for="terms-of-use">Eu aceito os <a href="#" target="_blank">termos de uso</a></label>
        </div>

        <div class="input-checkbox">
          <input type="checkbox" name="privacy-policy" id="privacy-policy" class="input-user" required>
          <label for="privacy-policy">Eu li e aceito a <a href="#" target="_blank">política de privacidade</a></label>
        </div>

      </div>

      <button type="submit" name="submit">Salvar</button>
    </form>

    <footer>
      <p>Já possui uma conta? <a href="#" target="_blank">Entre agora</a></p>
    </footer>
  </div>
</body>

</html>