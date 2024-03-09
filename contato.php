<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <style>
 @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;500&display=swap');
*{
    font-family: 'Roboto Condensed', sans-serif;
}
 body{background-image: url(img/background.jpg);}
     </style>
</head>
<body>
    <header>
    <a href="index.php">Página Inicial</a>
        <a class="menu" href="partidos.php">Partidos</a>
        <a class="menu" href="candidatos.php">Candidatos</a>
        <a class="menu" href="Votar.php">Vote Aqui</a>
        <a class="menu" href="contato.php">Contato</a>
        <a class="menu" href="desenvolvedores.php">Desenvolvedores</a>
    </header>
  
    
    <div class="container">
        <h1>Entre em Contato</h1>
        <p>Preencha o formulário abaixo para entrar em contato conosco.</p>
        <p>Fale com um de nossos mesários
Se você tiver alguma dúvida sobre o processo de votação online, estamos aqui para ajudar. Abaixo estão algumas perguntas frequentes:

Como faço para me cadastrar para votar online?
Quais são os requisitos técnicos para votar online?
Esqueci minha senha de votação, como posso recuperá-la?
Como faço para verificar se minha votação foi registrada com sucesso? </p>


<form id="contato-form" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" placeholder="Seu Nome" required>
    
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" placeholder="Seu E-mail" required>
    
    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" rows="4" placeholder="Digite sua mensagem aqui" required></textarea>
    
    <button id="duvida-button" type="submit">Enviar Mensagem</button>
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    echo "<p> Muito obrigado pelo contato, $nome! Responderemos o mais breve possível.<br> </p>";
    echo "<p>Aqui estão as informações que você enviou:<br></p>";
    echo "<p>Nome: $nome<br></p>";
    echo "<p>E-mail: $email<br></p>";
    echo "<p>Mensagem: $mensagem<br></p>";
}
?>
</body>
</html>

