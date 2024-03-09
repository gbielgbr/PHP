<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de CPF</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <style>
 @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;500&display=swap');
*{
    font-family: 'Roboto Condensed', sans-serif;
}
 body{background-image: url(img/background.jpg);}
    
        #cpf-section {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8); 
            border-radius: 5px;
            text-align: center;
            background-color:blue;
            border: solid 3px black;
    border-radius: 30px;
    width: 20%;
    height: 500px;
    position: relative;
    overflow: visible;
    background-color: #0838c8d6;
    margin-top: 60px;
    display: flex;
    flex-direction: column;
    align-items: center;
        }
        input[type="text"] {
            margin-top: 10px;
            padding: 10px;
            width: 80%;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #5cb85c;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
<header>
        <a href="pagina_inicio.php">Página Inicial</a>
        <a href="partidos.php">Partidos</a>
        <a href="candidatos.php">Candidatos</a>
        <a href="Votar.php">Vote Aqui</a>
        <a href="contato.php">Contato</a>
        <a href="desenvolvedores.php">Desenvolvedores</a>   
    </header>
<section id="cpf-section">
<form method="post" action="urna.php">
  CPF:<br>
  <input type="text" name="cpf" required maxlength="14">
  <br><br>
  <input type="submit" value="Enviar">
</form> 
<img src="img/logo.png" id="logoimage">
    </section>                                             

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["cpf"])) {
        echo "CPF é obrigatório.";
    } else {
        $_SESSION["cpf"] = $_POST["cpf"];
        header("Location:urna.php");
        exit();
    }
    echo "DIGITE SEU CPF";
}
?>


</body>
</html>
