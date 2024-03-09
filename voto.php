<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADO</title>

    <style>
    .voltar{
        background-color: rgb(0, 0, 255);
        border: black;
        color: #fff;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        margin-left:500px;
        margin-right:500px;
        margin-top:100px;
        cursor: pointer;
        border-radius: 8px;
        transition: background-color 0.5s ease;
        
        font-size:26px;
    
    }    
        
    .voltar a {
        text-decoration: none;
        color: #fff;
    }
    .vota{
        margin-left: 2px; 
    border: solid 3px black;
    border-radius: 30px;
    width: 100%;
    height: 600px;
    position: relative;
    overflow: visible;
    background-color: #0838c8d6;
    margin-top: 60px;
    align-items: center;
    display: inline-block;
    overflow: hidden !important;
    }
    .sair {
            display: block;
            width: 250px;
            height: 50px;
            margin: 20px auto;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            border-radius: 10px;
            padding: 10px;
            transition: all 0.5s;
            cursor: pointer;
            font-size: 18px;
        }


        
    </style>
</head>
<body>
    
</body>
</html>

<?php
session_start(); 

$candidatos = array (
    1 => array("nome" => "Você escolheu o candidato Matheus. Obrigado pelo seu voto!", "foto" => 'img/Matheus_html.jpg'), 
    2 => array("nome" => "Você escolheu o candidato Bob. Obrigado pelo seu voto!", "foto" => "img/bob.jpg"),   
    3 => array("nome" => "Você escolheu o candidato Gabriel. Obrigado pelo seu voto!", "foto" => "img/gabriel_css.jpg"),     
    4 => array("nome" => "Você escolheu o candidato Sirigueijo. Obrigado pelo seu voto!", "foto" => "img/sgs.jpg"),       
    5 => array("nome" => "Você escolheu o candidato Helbert. Obrigado pelo seu voto!", "foto" => "img/helbert_php.jpg"),   
    6 => array("nome" => "Você escolheu o candidato Patrick. Obrigado pelo seu voto!", "foto" => "img/pt.jpg"),
    7 => array("nome" => "Você escolheu o candidato Alex. Obrigado pelo seu voto!", "foto" => "img/alex_c.jpg"),
    8 => array("nome" => "Você escolheu o candidato Lula Molusco. Obrigado pelo seu voto!", "foto" => "img/lu.jpg"),
    9 => array("nome" => "Você escolheu o candidato DARTH VADER. Obrigado pelo seu voto!", "foto" => "img/paulo_p.jpg"),
    10 => array("nome" => "Você escolheu o candidato STORMTROOPERS. Obrigado pelo seu voto!", "foto" => "img/mc.jpg")
);

if (isset($_POST['votar'])) {
    if (isset($_POST['candidato'])) {
        $id_candidato = $_POST['candidato'];
        $candidato = $candidatos[$id_candidato];
        echo "<div class=vota>";
        echo "<div style='text-align:center'>";
        echo "<h1>{$candidato['nome']}</h1>";
        echo "<img src='{$candidato['foto']}' alt='{$candidato['nome']}' style='width:200px;height:200px;'>";
        echo "</div>";
    } else {
        echo "<h1 style='text-align:center'>Nenhum candidato selecionado</h1>";
        echo "<div style='text-align:center'>";
        echo "<img src='img/cancelado.png' alt='voto anulado' style='width:500px;height:500px;'>";
        echo "</div>";
    }
}

echo "<body style='background-image:url(img/background.jpg)'>";
if (isset($_POST['anular'])) {
    echo "<h1 style='text-align:center' target='_blank'>Voto anulado</h1>";
    echo "<div style='text-align:center'>";
    echo "<img src='img/cancelado.png' alt='voto anulado' style='width:500px;height:500px;'>";
    echo "</div>";
    
}
$candidatos = array (
    1 => array("nome" => "Partido:PHTML", "foto" => "img/html.png"), 
    2 => array("nome" => "Partido:PHTML", "foto" => "img/html.png"),   
    3 => array("nome" => "Partido:PCSS", "foto" => "img/css.png"),     
    4 => array("nome" => "Partido:PCSS", "foto" => "img/css.png"),       
    5 => array("nome" => "Partido:PPHP", "foto" => "img/php.png"),   
    6 => array("nome" => "Partido:PPHP", "foto" => "img/php.png"),
    7 => array("nome" => "Partido:PC++", "foto" => "img/c++.png"),
    8 => array("nome" => "Partido:PC++", "foto" => "img/c++.png"),
    9 => array("nome" => "Partido:PPYTHON", "foto" => "img/python.png"),
   10 => array("nome" => "Partido:PPYTHON", "foto" => "img/python.png")
);

if (isset($_POST['votar'])) {
    if (isset($_POST['candidato'])) {
        $id_candidato = $_POST['candidato'];
        $candidato = $candidatos[$id_candidato];
        
        echo "<div style='text-align:center'>";
        echo "<h1>{$candidato['nome']}</h1>";
        echo "<img src='{$candidato['foto']}' alt='{$candidato['nome']}' style='width:200px;height:200px;'>";
        echo "</div>";
        echo "</div>";
    } 
}
?>


<form method="post">
    <input class="sair"  type="submit" name="logout" value="Voltar para página INICIAL">
</form>
<?php


if(isset($_POST['logout'])){
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

