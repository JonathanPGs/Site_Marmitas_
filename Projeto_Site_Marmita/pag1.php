<?php
require_once "Dependencias.php";
require_once "Dados.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quentinhas Dona Rita</title>
  <link rel="shortcut icon" href="imagens/favicon-16x16.png" type="image/x-icon">
</head>

<body>
  <header>
    <img class="img" src="imagens/LOGO NAV.png" alt="logo html 5">
  </header>
  <nav>
    <a class="logo"></a>
    <ul class="nav-list">

      <a href="index.php">Home</li>
        <a href="DonaRita.php">Conheça a Dona Rita</li>
          
    </ul>
  </nav>
  </header>
  <h1> LEGUMES COM FRANGO </h1>
  <article class="flex">
    <table>
      <tr>
        <img src="Marmita/Grande1.jpg" alt="" class="config">

      <tr>
        <th>ACOMPANHAMENTO</th>
        <th>TAMANHO P</th>
        <th>TAMANHO M</th>
        <th>TAMANHO G</th>
      </tr>
      <tr>
        <td><?php echo $LegumesFrango[0]["IGREDIENTE"]; ?></td>
        <td><?php echo $LegumesFrango[0]["TAM-P"]; ?></td>
        <td><?php echo $LegumesFrango[0]["TAM-M"]; ?></td>
        <td><?php echo $LegumesFrango[0]["TAM-G"]; ?></td>
      </tr>
      <tr>
        <td><?php echo $LegumesFrango[1]["IGREDIENTE"]; ?></td>
        <td><?php echo $LegumesFrango[1]["TAM-P"]; ?></td>
        <td><?php echo $LegumesFrango[1]["TAM-M"]; ?></td>
        <td><?php echo $LegumesFrango[1]["TAM-G"]; ?></td>
      </tr>
      <tr>
        <td><?php echo $LegumesFrango[2]["IGREDIENTE"]; ?></td>
        <td><?php echo $LegumesFrango[2]["TAM-P"]; ?></td>
        <td><?php echo $LegumesFrango[2]["TAM-M"]; ?></td>
        <td><?php echo $LegumesFrango[2]["TAM-G"]; ?></td>
      </tr>
      <tr>
        <td><?php echo $LegumesFrango[3]["IGREDIENTE"]; ?></td>
        <td><?php echo $LegumesFrango[3]["TAM-P"]; ?></td>
        <td><?php echo $LegumesFrango[3]["TAM-M"]; ?></td>
        <td><?php echo $LegumesFrango[3]["TAM-G"]; ?></td>
      </tr>
      <tr>
        <td><?php echo $LegumesFrango[4]["IGREDIENTE"]; ?></td>
        <td><?php echo $LegumesFrango[4]["TAM-P"]; ?></td>
        <td><?php echo $LegumesFrango[4]["TAM-M"]; ?></td>
        <td><?php echo $LegumesFrango[4]["TAM-G"]; ?></td>
      </tr>
      <tr>
        <td><?php echo $LegumesFrango[5]["IGREDIENTE"]; ?></td>
        <td><?php echo $LegumesFrango[5]["TAM-P"]; ?></td>
        <td><?php echo $LegumesFrango[5]["TAM-M"]; ?></td>
        <td><?php echo $LegumesFrango[5]["TAM-G"]; ?></td>
      </tr>
      </tr>
    </table>
    <br>
    <div class="opcao">

      <form>
        <h5>Dados</h5>
        <br>
        <label for="fname">Nome Completo:</label><br>
        <input type="text" id="fname" name="fname" value=""><br>
        <label for="lname">Endereço:</label><br>
        <input type="text" id="lname" name="lname" value=""><br>
        <label for="lname">Bairro:</label><br>
        <input type="text" id="lname" name="lname" value=""><br>
        <label for="lname">Nº:</label><br>
        <input type="text" id="lname" name="lname" value=""><br>
        <label for="lname">Complemento:</label><br>
        <input type="text" id="lname" name="lname" value=""><br>
        <label for="lname">Referencia:</label><br>
        <input type="text" id="lname" name="lname" value=""><br>
        <label for="lname">Tel/Cel:</label><br>
        <input type="text" id="lname" name="lname" value=""><br><br>

        <h5>Forma de Pagamento</h5>
        <input type="checkbox" id="DINHEIRO" name="fav_language" value="DINHEIRO">
        <label for="html">DINHEIRO</label><br>
        <input type="checkbox" id="CARTAO" name="fav_language" value="CARTAO">
        <label for="css">CARTAO</label><br>
        <br>
        <h5>TAMANHO DA QUENTINHA</h5>
        <input type="checkbox" id="TAM" name="fav_language" value="TAMA-P">
        <label for="html">QUENTINHA - P</label><br>
        <input type="checkbox" id="TAM" name="fav_language" value="TAMA-M">
        <label for="css">QUENTINHA - M</label><br>
        <input type="checkbox" id="TAM" name="fav_language" value="TAMA-G">
        <label for="css">QUENTINHA - G</label><br>
        <br>
        <h5>TAMANHO DA QUENTINHA</h5>
        <input type="checkbox" id="Entrega" name="fav_language" value="ENTREGA">
        <label for="html"> ENTREGA - TAXA R$ 5,00 </label><br>
        <input type="checkbox" id="TAM" name="fav_language" value="RETIRADA">
        <label for="css">RETIRADA NO LOCAL</label><br>
        <button>FINALIZAR PEDIDO</button>
      </form>
    </div>



  </article>

  <footer id="Rodape">
          <table class="tabelaRodPe">
   <thead>
      <tr>
         <th>Contatos</th>
         <th>E-mail</th>
      </tr>
   </thead>
   <tbody class="text-white">
      <tr>
         <td>(21) 1896-3557</td>
         <td>RitaDasQuentinhas@gmail.com</td>
      </tr>
   </tbody>
   </table>

   
   <footer id="Rodape">
      <p>© Copyright 2022 | Jonathan H. G. Perroni
   </footer>
</body>
<script src="botao.js"> </script>

</html>