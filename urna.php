
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URNA</title>
    <style>
       
       /* DIV DA URNA */
       body {
            background-image: url(img/background.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
        }
  
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .urna {
            border: 2px solid #000;
            border-radius: 30px;
            width: 400px;
            height: 820px; 
            padding: 20px;
            text-align: center;
            background-color: #f4f4f4;
            margin-top: 150px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            margin-top:40px;
            margin-right:300px;
        }
       
       
       
       /* PARTE DOS RADIOS */
       .container-checkbox {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            width:600px;
          
            
        }

        .container-checkbox label {
            position: relative;
            color: #000000;
            font-size: 30px;
            border: 2px solid  #0838c8d6;
            border-radius: 5px;
            padding: 10px 50px;
            display: flex;
            align-items: center;
            margin: 5px;
            flex-basis: 45%;
        }

        .container-checkbox input[type="radio"] {
            display: none;
        }

        .container-checkbox label:before {
            content: "";
            height: 30px;
            width: 30px;
            border: 3px solid  #0838c8d6;
            border-radius: 50%;
            margin-right: 20px;
        }

        .container-checkbox input[type="radio"]:checked + label {
            background-color:  #0838c8d6;
            color: white;
        }

        .container-checkbox input[type="radio"]:checked + label:before {
            height: 16px;
            width: 16px;
            border: 10px solid white;
            background-color:  #0838c8d6;
            
        }
/*PARTE DOS RADIOS */


/* PARTE DOS BOTOES */
#verde{
background-color: rgb(0, 255, 64);
border: none;
    color: #fff;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 8px;
    transition: background-color 0.5s ease;
}
#vermelho{
    background-color: rgb(255, 0, 0);
    border: none;
    color: #fff;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 8px;
    transition: background-color 0.5s ease;

}
#verde:hover{
    background-color: #4CAF50;
}

#vermelho:hover{
    background-color: rgb(95, 3, 3);
}

.container-checkbox {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .container-checkbox label {
            margin-right: 20px;
        }

    #logoimage{
    width: 20em;
    margin-bottom:150px;
  
   
}


    </style>
</head>
<body>

<img src="img/logo.png" id="logoimage">
<div class="container">
        <div class="urna">
            <h2>Urna Eletrônica</h2>
            <p>Selecione seu candidato:</p>
           
            <form method="post" action="voto.php">
                <div class="container-checkbox">
                    <?php
                    session_start();
                    

                    $candidatos = array (
                        1 => array("nome" => "Candidato 1", "foto" => "joao.jpg"), 
                        2 => array("nome" => "Candidato 2", "foto" => "maria.jpg"),   
                        3 => array("nome" => "Candidato 3", "foto" => "jose.jpg"),     
                        4 => array("nome" => "Candidato 4", "foto" => "ana.jpg"),       
                        5 => array("nome" => "Candidato 5", "foto" => "pedro.jpg"),   
                        6 => array("nome" => "Candidato 6", "foto" => "marta.jpg"),
                        7 => array("nome" => "Candidato 7", "foto" => "carlos.jpg"),
                        8 => array("nome" => "Candidato 8", "foto" => "lucia.jpg"),
                        9 => array("nome" => "Candidato 9 ", "foto" => "paulo.jpg"),
                        10 => array("nome" => "Candidato 10", "foto" => "paulo_p.jpg")
                    );

                    foreach ($candidatos as $key => $candidato) {
                        echo "<input type='radio' name='candidato' value='$key' id='$key'>";
                        echo "<label for='$key'>{$candidato['nome']}</label>";
                    }
                    ?>
                </div>
                <button type="submit" class="botao" value="Anular voto" name="anular" id="vermelho">Anular</button>
                <button type="submit" class="botao" name="votar" id="verde">Votar</button>
            </form>
        </div>
    </div>
               
</body>
</html>