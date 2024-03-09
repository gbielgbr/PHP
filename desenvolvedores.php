<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvedores</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
 @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;500&display=swap');
*{
    font-family: 'Roboto Condensed', sans-serif;
}
 body{background-image: url(img/background.jpg);}
 .container{
    display: flex; 
    justify-content: space-around; 
    flex-wrap: wrap; 
    
 }
 .borda{
    border:solid;
 }

 #logoimage{
    width:100px;
    height:100px;
 }
 select, input[type="submit"] {
        font-size: 15px;
        border: none;
        border-radius: 5px;
        width:200px;
        align-items: center;
     
        
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .centered-form {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
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

    <div class="container">
        <h1>Equipe de Desenvolvedores</h1>
        <img src="img/logo.png" id="logoimage">
        
        <div class="developer">
            <img class="borda" src="img/lucas.jpg" alt="Lucas" width="200px" height="200px">
            <p>Lucas</p>
            <p>Desenvolvedor</p>
        </div>

        <div class="developer">
            <img class="borda" src="img/gabriel.jpg" alt="Gabriel" width="200px" height="200px">
            <p>Gabriel</p>
            <p>Desenvolvedor</p>
        </div>

        <div class="developer">
            <img class="borda" src="img/daniel.jpg" alt="Daniel" width="200px" height="200px">
            <p>Daniel</p>
            <p>Desenvolvedor</p>
        </div>

        <div class="developer">
            <img class="borda" src="img/helbert.jpg" alt="Helbert" width="200px" height="200px">
            <p>Helbert</p>
            <p>Desenvolvedor</p> 

           </div>
   
  
   
        </div>
        <h1>Funções utilizadas</h1>
   
<div class="centered-form">
<form method="post">
    <select name="select">
    <option value="" selected disabled>Selecione uma opção</option>
        <option value="1">INDEX.PHP</option>
        <option value="2">PARTIDOS.PHP</option>
        <option value="3">CANDIDATOS.PHP</option>
        <option value="4">VOTAR.PHP</option>
        <option value="5">CONTATO.PHP</option>
        <option value="6">DESENVOLVEDORES.PHP</option>
        <option value="7">URNA.PHP</option>
        <option value="8">VOTO.PHP</option>    
    </select>
    <input type="submit" name="submit" value="Enviar" />
</form>
</div>

        <?php
if (isset($_POST['select'])) {
    $value = $_POST['select'];
    switch ($value) {
        case '1':
            echo "<div style='text-align:center;'>Nesta página, foram utilizados apenas conteúdos HTML mesclados com CSS</div>";
            break;
        case '2':
            echo "<div style='text-align:center;'>Nesta página, foram utilizadas as seguintes
            estruturas e funções: Formulário HTML;
            <p>PHP isset, para verificar se uma variável está definida e não é NULL. </p> 
           <p> S_POST para coletar dados de formulários usando o método POST. Neste caso, está sendo usado para obter o valor da opção selecionada pelo usuário. </p>
            Switch Case, usada para realizar diferentes ações com base em diferentes condições. </div>";
            break;
        case '3':
            echo "<div style='text-align:center;'>Nesta página, foram utilizados apenas conteúdos HTML mesclados com CSS.PHP</div>";
            break;
        case '4':
            echo "<div style='text-align:center;'>Nesta página, foram utilizadas as seguintes
            estruturas e funções: Formulário HTML;
            <p>session_start inicia uma nova sessão ou continua a sessão existente.</p>
           <p>Condicional POST. Se for, ele executa o código dentro do bloco if.</p>
           <p>Se o campo 'cpf' do formulário está vazio. Se estiver vazio, ele exibe umaa mensagem.</p>
           <p> Armazena o valor do campo 'cpf' do formulário na variável de sessão 'cpf'. Isso permite que o valor seja acessado em outras páginas.</p>
           <p>header redireciona o usuário para a página 'urna.php'.</p>
           <p>exit(); Termina a execução do script.</p></div>";


            break;
        case '5':
            echo "<div style='text-align:center;'>Nesta página, foram utilizadas as seguntes estruturas e funções:
                Formulário HTML.

<p> O método POST é usado para enviar os dados do formulário para o servidor</p>

<p>Variáveis PHP que são usadas para armazenar os dados do formulário. </p>

<p> A condição IF verifica se o método de solicitação é POST. Se for, o código dentro do bloco IF é executado. Este código recupera os dados do formulário e os exibe de volta ao usuário.</p>

<p> Echo é usada para enviar uma mensagem de agradecimento ao usuário, juntamente com os dados que eles enviaram. </p>
            </div>";
            
            break;
        case '6':
            echo "<div style='text-align:center;'>Nesta página, foram utilizadas as seguintes
            estruturas e funções: Formulário HTML;
            <p>PHP isset, para verificar se uma variável está definida e não é NULL. </p> 
           <p> S_POST para coletar dados de formulários usando o método POST. Neste caso, está sendo usado para obter o valor da opção selecionada pelo usuário. </p>
            Switch Case, usada para realizar diferentes ações com base em diferentes condições
            <p>A função echo é usada para enviar a saída para o navegador. Neste caso, está sendo usado para enviar uma mensagem ao usuário com base na opção que eles selecionaram. </p>.</div>";
            break;
            case '7':
                echo "<div style='text-align:center;'>Nesta página, foram utilizadas as seguintes
                estruturas e funções: Formulário HTML;
                <p>session_start inicia uma nova sessão ou retoma uma sessão existente. É usado para armazenar informações de usuário entre várias páginas.</p>
                <p> array candidatos é usado para armazenar informações sobre os candidatos. </p>
                <p> O loop foreach é usado para percorrer cada elemento de um array. Neste caso, está sendo usado para criar um botão de opção para cada candidato na urna eletrônica.</p>
                <p>A função echo é usada para enviar a saída para o navegador. Neste caso, está sendo usado para criar os botões de opção e os rótulos para os candidatos.</p>
                <p> Coletar dados de formulário enviados usando o método POST. Neste caso, está sendo usado para obter o valor da opção selecionada pelo usuário.</p></div>";
                break;
                case '8':
                    echo "<div style='text-align:center;'>Nesta página, foram utilizadas as seguintes
                    estruturas e funções:
                    <p> session_start inicia uma nova sessão ou retoma uma sessão existente. </p>

                    <p> array candidatos é usado para armazenar informações sobre os candidatos.</p>
                    
                    <p> A função isset está sendo usada para verificar se o botão de votação foi clicado e se uma opção de candidato foi selecionada.</p>
                    
                   <p> A função echo é usada para criar os botões de opção e os rótulos para os candidatos. </p>
                    
                  <p>  A função header está sendo usada para redirecionar o usuário para a página inicial quando eles clicam no botão “Voltar para página INICIAL”.</p>
                    
                  <p>  session_destroy está sendo usada para encerrar a sessão atual quando o usuário clica no botão “Voltar para página INICIAL” (logout).</p>
                    
                   <p> exit termina a execução do script. Está sendo usado para garantir que o script pare de ser executado depois que o usuário é redirecionado para a página inicial </p>.</div>";
                    break;
      
    }
}
?>






</body>
</html>
