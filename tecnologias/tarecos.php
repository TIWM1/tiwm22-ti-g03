<!DOCTYPE html>
<html lang= "pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <title>TARECOS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header  class="site-header">
  <div class="site-identity">
    <h1><a href="index.php">Tarecos do ISMIAU</a></h1>
  </div>  
  <nav class="site-navigation">
    <ul class="nav">
      <li title= "Acesso à página principal."><a href="index.php">Página Inicial</a></li> 
      <li title= "Conheça os nossos animais!"><a href="tarecos.php">Tarecos</a></li>
      <li title= "Informações sobre a associação."><a href="sobre.php">Sobre Nós</a></li> 
      <li title= "Saiba como doar!"><a href="doacao.php">Doações</a></li> 
    </ul>
  </nav>
</header>
  
<h1 style="text-align:center">TARECOS</h1>
<div class="row" >
  <div class="column">
    <div class="tcard">
    <img src="images/tarecos/gucci.jpg" alt="Gucci" style="width:100%">
      <h3>GUCCI</h3>
      <p>Eu sou a Gucci, tenho 2 anos, ainda sou tão novinha e já passei por tanto. Sofri uma pancada tão forte que parti as duas patinhas de trás e perdi parte da minha caudinha.</p>
    </div>
  </div>

  <div class="column">
  <div class="tcard">
    <img src="images/tarecos/armando.jpg" alt="Armando" style="width:100%">
      <h3>ARMANDO</h3>
      <p>Eu sou o Armando, tenho 5 anos e sou um gatão lindo e maravilhoso que só quer atenção e muito amor humano.
        Estou pronto para encontrar a minha família para sempre.</p>
    </div>
  </div>
  
  <div class="column">
  <div class="tcard">
    <img src="images/tarecos/bia.jpg" alt="Bia" style="width:100%">
      <h3>BIA</h3>
      <p>Eu sou a Bia, tenho 6 anos e já tive uma casa e uma família que cuidou de mim, mas a minha tutora faleceu e felizmente fui acolhida pelos Tarecos do Ismiau.</p>
    </div>
  </div>
</div>
<br>
  <div class="row" >
  <div class="column">
  <div class="tcard">
    <img src="images/tarecos/fred.jpg" alt="Fred" style="width:100%">
      <h3>FRED</h3>
      <p>Eu sou o Fred, tenho 1 ano e só quer amor e mimo! Tive uns problemas de saúde e precisei de retirar dentinhos, mas agora estou pronto para começar uma nova vida.</p>
    </div>
  </div>

  <div class="column">
  <div class="tcard">
    <img src="images/tarecos/chica.jpg" alt="Chica" style="width:100%">
      <h3>CHICA</h3>
      <p>Eu sou a Chica tenho 5 anos, fui deixada na associação Tarecos do Ismiau e estava com problemas de saúde. Não queria comer, mas agora já estou recuperada.</p>
    </div>
  </div>

  <div class="column">
  <div class="tcard">
    <img src="images/tarecos/lilo.jpg" alt="Lilo" style="width:100%">
      <h3>LILO</h3>
      <p>Eu sou o Lilo tenho 6 anos, sou um gato tímido e vivo na associação há bastante tempo. Já vi muitos tarecos chegar e sair para as suas novas casinhas e eu continuo por cá.</p>
    </div>
    <br>
  </div>
</div>
<h1 style="text-align:center">CURIOSIDADE</h1>
<table id="demo" class="table"></table><br>

<footer>
  <a href="tel:+351229866000" title="Ligue-nos!"><h4>+351 229 866 000</h4></a>
  <a href="https://goo.gl/maps/TUgp65ujW35V5Zz86" ><h4>Av. Carlos de Oliveira Campos, 4475-690 Maia</h4></a>
  <a href="mailto:tarecosismiau@gmail.com" title = "Envie-nos um email!"><h4>tarecosismiau@gmail.com</h4></a>
  <h4>Copyright Tarecos ISMIAU</h4>
</footer>

 <script>
 function loadXMLDoc(){
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function(){
                const xmlDoc = xhttp.responseXML;
                const cd = xmlDoc.getElementsByTagName("Idade")
                myFunction(cd)
            }
            xhttp.open("GET", "comparacao_idades.xml")
            xhttp.send();
        }
        
        function myFunction(cd){
            let table ="<thead><tr><th>Gatos</th><th>Humano</th></tr></thead>";
            for(let i = 0 ; i<cd.length ; i++){
                table+= "<tr><td>" + 
                    cd[i].getElementsByTagName("gato")[0].childNodes[0].nodeValue +
                    "</td><td>" +
                    cd[i].getElementsByTagName("humano")[0].childNodes[0].nodeValue +
                    "</td>" 
            }
            document.getElementById("demo").innerHTML=table
        }
        loadXMLDoc();
</script>
</body>
</html>
