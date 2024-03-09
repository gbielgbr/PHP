<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <style>
 @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;500&display=swap');
*{
    font-family: 'Roboto Condensed', sans-serif;
}
 body{background-image: url(img/background.jpg);}
 .bem{
    font-size:25px;
 }
 #logoimage{
   width: 40em;
   height:40em;
   margin-right:130px;
}
.container{
    margin-left: 2px;
    border: solid 3px black;
    border-radius: 30px;
    width: 100%;
    height: 500px;
    position: relative;
    overflow: visible;
    background-color: #0838c8d6;
    margin-top: 60px;
    align-items: center;
    display: inline-block;
    overflow: hidden !important;
}

#content {
    display: flex; 
    justify-content: space-around; 
}

     </style>
</head>
<body>
    <header>
        <a href="index.php">Página Inicial</a>
        <a href="partidos.php">Partidos</a>
        <a href="candidatos.php">Candidatos</a>
        <a href="Votar.php">Vote Aqui</a>
        <a href="contato.php">Contato</a>
        <a href="desenvolvedores.php">Desenvolvedores</a>
    </header>
   
    <div id="content">
        <div class="container">
            <h1>Bem-vindo à Página Inicial</h1>
            <p class="bem">Olá, seja muito bem-vindo ao nosso espaço eleitoral dedicado à ciência da computação! Seu voto é fundamental para moldar o futuro dos desenvolvedores em nosso país.

Em nosso site, você terá a oportunidade de conhecer mais sobre os partidos e candidatos que estão concorrendo. Além disso, disponibilizamos uma urna eletrônica para que você possa exercer seu direito de voto de maneira prática e segura. Para acessá-la, basta fornecer seu CPF.

Lembre-se, seu voto tem poder! Juntos, podemos construir um futuro melhor para a ciência da computação em nosso país. Agradecemos por fazer parte dessa jornada conosco!</p>
        </div>
        <img src="img/logo.png" id="logoimage">
    </div>

</body>
</html>

