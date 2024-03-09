<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Partidos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;500&display=swap');
*{
    font-family: 'Roboto Condensed', sans-serif;
}
body{
    display: flex;
    flex-direction: column;
    justify-content: left; 
    align-items: left;
    background-image: url(img/background.jpg);
    background-size:cover;
}
.main{
    display: flex;
}
.principal{
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
.aux{
    gap: 50px;
    position: relative;
    bottom: 100px;
}
#posicao{
    position: absolute;
}
#logoimage{
    width: 15em;
}
.botaozao{
    margin-top: 50px;
    margin-left: 25px;
    margin-right: 25px;
    border: 1px solid rgb(0, 0, 0);
    display: block;
    outline: 0;
    padding: 0 56px;
    height: 40px;
    width: 100px;
    line-height: 45px;
    border-radius: 50px;
    font-weight: 500;
    font-size: 16px;
    background: #fff;
    box-shadow: 0 4px 14px 0 rgb(0 0 0 / 10%);
}
.menu{
    margin-left: 25px;
    margin-right: 25px;
}
.botoes{
    margin-top: 5px;
    margin-bottom: 5px;
    margin-left: 15px;
    border: 1px solid rgb(0, 0, 0);
    display: block;
    outline: 0;
    padding: 0 40px;
    height: 37px;
    width: 100px;
    line-height: 45px;
    border-radius: 50px;
    font-weight: 400;
    font-size: 14px;
    background: #fff;
    box-shadow: 0 4px 14px 0 rgb(0 0 0 / 10%);
}
.customize {
    height: 22px;
    width: 22px;
    margin-top: 10px;
    position: absolute;
    z-index: 5;
    opacity: 0;
    cursor: pointer;
}
.customize + .custom {
    position: relative;
    padding-left: 30px;
}
.customize + .custom::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: solid 2px;
    vertical-align: bottom;
}
.customize:checked + .custom::after {
    content: '';
    background-color: blue;
    width: 14px;
    height: 14px;
    border-radius: 50%;
    position: absolute;
    left: 5px;
    bottom: 5px;
}
.botao-submit{
    width: 100px;
    margin-bottom: 5px;
    margin-left: 55px;
    outline:none;
    height: 37px;
    text-align: center;
    width: 100px;
    border-radius:40px;
    background: #fff;
    border: 1px solid rgb(0, 0, 0);
    text-shadow:0;
    cursor: pointer;
}
#divopcao1{
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
#divopcao2{
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
#divopcao3{
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
#divopcao4{
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
#divopcao5{
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
#defaut{
    font-size: 90px;
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
}
#img{
    width: 250px;
    height: 250px;
    border-radius: 50px;
}
.infos{
    justify-content: left;
    display: flex;
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
    <div class="main">
      <div class="principal">
        <div class="aux">
          <img src="img/logo.png" id="logoimage" id="posicao">
          <div class="botaozao">
            PARTIDOS:
          </div>
          <div class="menu">
            <form method="post">
                <div class="botoes">
                    <input class="customize" type="radio" name="partidos" value="1" id="1">
                    <label class="custom" for="partidos">PHTML</label>
                </div>
                <div class="botoes">
                    <input class="customize" type="radio" name="partidos" value="2" id="2">
                    <label class="custom" for="partidos">PCSS</label>
                </div>
                <div class="botoes">
                    <input class="customize" type="radio" name="partidos" value="3" id="3">
                    <label class="custom" for="partidos">PPHP</label>
                </div>
                <div class="botoes">
                    <input class="customize" type="radio" name="partidos" value="4" id="4">
                    <label class="custom" for="partidos">PC++</label>
                </div>
                <div class="botoes">
                    <input class="customize" type="radio" name="partidos" value="5" id="5">
                    <label class="custom" for="partidos">PPYTHON</label>
                </div>
                <div>
                    <input class="botao-submit" type="submit" name="submit" value="ENVIAR">
                </div>
            </form>
          </div>
        </div>
      </div>
      <?php
      if (isset($_POST['submit'])) {
        $selectedOption = $_POST['partidos'];
        switch ($selectedOption) {
        case '1':
            echo
            '<div id="divopcao1">
            <div class="infos">
                <img src="img/html.png" id="img">
                O Partido HTML: Transformando Ideias em Realidade
                No cenário político atual, muitos partidos competem pelo poder e a oportunidade de moldar o futuro de uma nação. No entanto, imagine um partido que é um pouco diferente do que estamos acostumados a ver. Apresentamos o Partido HTML, uma entidade fictícia que representa uma abordagem única e inovadora para a política e a governança.
                O Partido HTML nasceu da ideia de que a sociedade contemporânea enfrenta desafios cada vez mais complexos que demandam soluções igualmente avançadas. Inspirados pelo poder da tecnologia e da internet, o Partido HTML adota os princípios do HyperText Markup Language (HTML), a linguagem fundamental da World Wide Web, para criar um ambiente político inovador e dinâmico.
                Acessibilidade para Todos: O HTML é conhecido por sua acessibilidade universal, permitindo que pessoas com diversas habilidades e origens tenham acesso à informação. Da mesma forma, o Partido HTML se compromete a criar uma sociedade inclusiva, onde todas as vozes são ouvidas e representadas, independentemente de sua origem, gênero, orientação sexual, ou qualquer outra característica.
                Transparência e Abertura: O HTML é transparente e de código aberto, o que significa que qualquer pessoa pode ver e entender seu funcionamento. O Partido HTML se compromete a governar de maneira transparente e a prestar contas a seus eleitores. As políticas e decisões são claramente documentadas e disponibilizadas ao público.
                Colaboração e Flexibilidade: O HTML é uma linguagem flexível que permite a colaboração de várias partes na criação de conteúdo online. Da mesma forma, o Partido HTML acredita na importância da colaboração entre diferentes grupos e partes interessadas para encontrar soluções eficazes para os desafios que nossa sociedade enfrenta.
                Atualização Contínua: O HTML está em constante evolução, adaptando-se às novas demandas e tecnologias. O Partido HTML entende que as políticas e estratégias devem ser atualizadas regularmente para atender às necessidades em constante mudança de nossa sociedade.
                Eficiência e Inovação: O HTML é conhecido por sua eficiência na formatação e organização de conteúdo na web. O Partido HTML procura trazer essa mesma eficiência e inovação para a gestão pública, buscando maneiras de melhorar a eficiência do governo e fornecer serviços de alta qualidade aos cidadãos.
                Embora o Partido HTML seja uma entidade fictícia, sua abordagem única e inspirada na tecnologia pode servir como uma reflexão sobre como a política e a governança podem ser transformadas e adaptadas para enfrentar os desafios do século XXI. A ideia fundamental é a de que a inovação, a acessibilidade e a transparência podem ser os pilares de uma sociedade mais inclusiva e eficaz.
                No entanto, é importante lembrar que a política do mundo real é muito mais complexa do que uma simples linguagem de programação. A criação de um sistema político eficaz requer um compromisso sério e uma colaboração contínua de todas as partes interessadas. O Partido HTML serve como uma visão utópica que nos encoraja a pensar de maneira criativa sobre como podemos melhorar nossas instituições e tornar nossas sociedades mais justas e eficazes.
            </div>
            </div>';
        break;
        case '2':
            echo
            '<div id="divopcao2">
            <div class="infos">
                <img src="img/css.png" id="img">
                O Partido CSS: Estilizando a Política para um Futuro Melhor
                Em um mundo onde a política muitas vezes parece monótona e desatualizada, surge uma abordagem inovadora para a governança: o Partido CSS. Este partido fictício, inspirado nas capacidades do Cascading Style Sheets (CSS), oferece uma perspectiva única para abordar os desafios políticos do século XXI.
                O Partido CSS traz à tona os princípios do CSS, uma linguagem de marcação usada para estilizar a apresentação de documentos web, e os aplica de maneira inovadora no cenário político. Vamos explorar como os princípios do CSS podem moldar uma visão política distinta:
                Estilização da Diversidade: Assim como o CSS permite a estilização diversificada de elementos web, o Partido CSS promove a diversidade e a igualdade. Compromete-se a valorizar e estilizar a pluralidade de origens, gêneros, crenças e orientações de seus cidadãos.
                Elegância e Clareza: O CSS é conhecido por sua capacidade de tornar o conteúdo web elegante e claro. De forma análoga, o Partido CSS visa governar de forma elegante, com políticas claras e compreensíveis para todos. Transparência e comunicação aberta são os alicerces de sua abordagem política.
                Adaptação à Mudança: O CSS é altamente flexível, permitindo a adaptação a diferentes dispositivos e resoluções. O Partido CSS reconhece a importância de se adaptar rapidamente às mudanças e desafios sociais, buscando soluções inovadoras e flexíveis para problemas emergentes.
                Harmonização e Coerência: O CSS permite a harmonização e a coerência no design de páginas da web. Da mesma forma, o Partido CSS promove a harmonização entre diferentes grupos e partes interessadas, buscando a coerência nas políticas e estratégias governamentais.
                Atualização Constante: Como o CSS está sempre evoluindo para atender às demandas em constante mudança da web, o Partido CSS está comprometido com a atualização contínua de suas políticas e estratégias para atender às necessidades em evolução de sua sociedade.
                Criatividade e Inovação: O CSS é uma linguagem criativa que permite a estilização única e atraente. O Partido CSS incentiva a criatividade e a inovação na política, procurando soluções não convencionais para problemas persistentes.
                Embora o Partido CSS seja uma criação fictícia, ele nos lembra que a política também pode ser uma forma de expressão criativa e inovadora. A política moderna enfrenta desafios complexos e em constante mudança, e é importante considerar como as abordagens inovadoras e flexíveis podem ser aplicadas para tornar a governança mais eficaz e inclusiva.
                No entanto, é fundamental ressaltar que a política do mundo real envolve questões muito mais complexas do que a estilização web. A criação de políticas eficazes requer comprometimento, colaboração e consideração cuidadosa de todas as partes interessadas. O Partido CSS serve como um lembrete de que a inovação e a criatividade podem desempenhar um papel significativo na melhoria de nossas instituições e no avanço de nossas sociedades em direção a um futuro melhor.
            </div>
            </div>';
        break;
        case '3':
            echo
            '<div id="divopcao3">
            <div class="infos">
                <img src="img/php.png" id="img">
                O Partido PHP: Codificando uma Política para o Futuro
                No cenário político atual, é comum ver partidos com ideologias e abordagens diversas, cada um buscando moldar o destino de uma nação. Imagine, por um momento, um partido político distinto e imaginário, o Partido PHP, que se inspira nos princípios da linguagem de programação PHP para criar uma abordagem única e inovadora para a governança.
                O Partido PHP nasce da ideia de que a sociedade moderna enfrenta desafios cada vez mais complexos que exigem soluções igualmente sofisticadas. Inspirado na versatilidade e na adaptabilidade da linguagem de programação PHP, este partido propõe uma política governamental com base em princípios que podem ser resumidos da seguinte forma:
                Versatilidade e Inclusão: O PHP é conhecido por ser uma linguagem versátil que pode ser usada em uma ampla variedade de contextos. O Partido PHP promove a inclusão e a versatilidade em suas políticas, buscando soluções que atendam às diversas necessidades e características de sua sociedade.
                Código Aberto e Transparência: Da mesma forma que o PHP é uma linguagem de código aberto, o Partido PHP se compromete a governar com transparência. Todas as políticas e decisões seriam documentadas e disponibilizadas ao público, permitindo que os cidadãos compreendam o funcionamento do governo.
                Integração e Colaboração: O PHP é frequentemente utilizado em sistemas complexos e integrados. O Partido PHP promove a colaboração entre diferentes grupos e partes interessadas para abordar os desafios sociais de maneira integrada e eficaz.
                Adaptação Constante: O PHP é uma linguagem que evolui continuamente para atender às necessidades em constante mudança do desenvolvimento web. O Partido PHP reconhece a importância de se adaptar às mudanças sociais e econômicas e está comprometido com a atualização constante de políticas para atender a essas necessidades.
                Eficiência e Inovação: O PHP é conhecido por ser eficiente e oferecer uma ampla gama de recursos inovadores. O Partido PHP busca governar de maneira eficiente, aproveitando a inovação para enfrentar desafios políticos complexos e melhorar a vida de seus cidadãos.
                Embora o Partido PHP seja uma entidade fictícia, ele nos lembra que a política pode se beneficiar da inovação e da adaptação contínua às mudanças sociais, econômicas e tecnológicas. É importante destacar que a política do mundo real é muito mais complexa do que uma linguagem de programação, e a governança eficaz requer comprometimento, colaboração e consideração cuidadosa de todas as partes interessadas. O Partido PHP oferece uma visão imaginativa de como a política pode ser moldada de maneira inovadora para enfrentar os desafios do século XXI.
            </div>
            </div>';
        break;
        case '4':
            echo
            '<div id="divopcao4">
            <div class="infos">
                <img src="img/c++.png" id="img">
                O Partido C++: Programando Políticas para o Futuro
                Em um cenário político cheio de partidos que competem por ideias e visões, surge uma abordagem única e imaginária: o Partido C++. Inspirado pelos princípios da linguagem de programação C++, esse partido fictício oferece uma perspectiva inovadora para abordar os desafios políticos do século XXI.
                O Partido C++ nasce da ideia de que a sociedade moderna enfrenta desafios cada vez mais complexos que demandam soluções igualmente avançadas. Inspirado na robustez, eficiência e flexibilidade da linguagem de programação C++, esse partido propõe uma política governamental baseada em princípios que podem ser resumidos da seguinte forma:
                Eficiência e Desempenho: O C++ é conhecido por sua eficiência e desempenho. Da mesma forma, o Partido C++ busca governar com eficiência, assegurando que os recursos públicos sejam utilizados de maneira otimizada e que as políticas sejam executadas com alto desempenho.
                Flexibilidade e Adaptabilidade: O C++ é uma linguagem altamente flexível que se adapta a uma variedade de situações. O Partido C++ promove a flexibilidade em suas políticas, adaptando-se às mudanças sociais, econômicas e tecnológicas de maneira ágil e eficaz.
                Segurança e Confiança: Assim como o C++ é valorizado por sua segurança e robustez, o Partido C++ compromete-se a criar um ambiente seguro e confiável para seus cidadãos, protegendo seus direitos e garantindo a segurança pública.
                Estruturas Sólidas: O C++ utiliza estruturas de programação sólidas para gerenciar informações e processos complexos. O Partido C++ aplica princípios sólidos de governança para gerenciar eficazmente as complexidades políticas e sociais.
                Colaboração e Modularidade: O C++ incentiva a colaboração entre diferentes partes do código e a modularidade em seu design. Da mesma forma, o Partido C++ busca a colaboração entre diferentes grupos e partes interessadas na política, dividindo as complexidades em soluções gerenciáveis.
                Atualização Contínua: O C++ está em constante evolução para acompanhar as demandas em mudança do desenvolvimento de software. O Partido C++ reconhece a importância da atualização constante de políticas para se adaptar às necessidades em constante evolução de sua sociedade.
                Embora o Partido C++ seja uma criação fictícia, ele nos lembra que a política pode se beneficiar da inovação, da eficiência e da adaptação contínua às mudanças sociais e tecnológicas. É fundamental ressaltar que a política do mundo real envolve questões complexas e nuances que vão muito além de uma linguagem de programação. A criação de políticas eficazes requer compromisso, colaboração e consideração cuidadosa de todas as partes interessadas. O Partido C++ oferece uma visão imaginativa de como a política pode ser moldada de maneira inovadora para enfrentar os desafios do nosso tempo.
            </div>
            </div>';
        break;
        case '5':
            echo
            '<div id="divopcao5">
            <div class="infos">
                <img src="img/python.png" id="img">
                O Partido Python: Codificando uma Política para um Futuro Melhor
                No cenário político atual, vemos uma miríade de partidos com diferentes abordagens e ideologias competindo pelo poder. Agora, imagine um partido político fictício com uma perspectiva única e inspiradora: o Partido Python. Este partido é inspirado nos princípios da linguagem de programação Python e oferece uma visão inovadora para enfrentar os desafios políticos do século XXI.
                O Partido Python é baseado na ideia de que a sociedade contemporânea enfrenta desafios cada vez mais complexos, que exigem soluções igualmente sofisticadas. Inspirado pela simplicidade, legibilidade e versatilidade da linguagem Python, este partido propõe uma política governamental fundamentada em princípios que podem ser resumidos da seguinte forma:
                Simplicidade e Clareza: Assim como Python é conhecido por sua simplicidade e legibilidade, o Partido Python se compromete a governar de maneira clara e transparente. Suas políticas são formuladas de forma simples e acessível para que todos os cidadãos possam compreendê-las.
                Comunidade e Colaboração: Python é uma linguagem que valoriza a comunidade e a colaboração. O Partido Python promove a colaboração entre diferentes grupos e partes interessadas na sociedade, reconhecendo que soluções eficazes frequentemente resultam de esforços conjuntos.
                Adaptação e Flexibilidade: Python é conhecido por sua flexibilidade e facilidade de adaptação a diferentes contextos. O Partido Python reconhece a importância da adaptação contínua às mudanças sociais, econômicas e tecnológicas, buscando soluções flexíveis para desafios em constante evolução.
                Eficiência e Automatização: Python é valorizado por sua eficiência e capacidade de automatizar tarefas. O Partido Python busca governar de maneira eficiente, aproveitando a automação para melhorar os processos governamentais e otimizar a alocação de recursos.
                Transparência e Código Aberto: Da mesma forma que o Python é uma linguagem de código aberto, o Partido Python se compromete a governar de maneira transparente, com todas as políticas e decisões documentadas e disponíveis ao público.
                Atualização Constante: Python é uma linguagem em constante evolução para atender às necessidades em mudança do desenvolvimento de software. O Partido Python reconhece a importância da atualização constante de políticas para atender às necessidades em constante evolução da sociedade.
                Embora o Partido Python seja uma criação fictícia, ele nos lembra que a política pode se beneficiar da simplicidade, clareza e adaptação contínua às mudanças sociais e tecnológicas. É importante ressaltar que a política do mundo real é muito mais complexa do que uma linguagem de programação. A criação de políticas eficazes requer comprometimento, colaboração e consideração cuidadosa de todas as partes interessadas. O Partido Python oferece uma visão imaginativa de como a política pode ser moldada de maneira inovadora para enfrentar os desafios do nosso tempo.
            </div>
            </div>';
        break;
        default:
            echo
            '<div id="defaut">
            <div class="infos">
                Selecione uma opção e envie :)
            </div>
            </div>';
        }
      }
      ?>
    </div>
  </body>
</html>