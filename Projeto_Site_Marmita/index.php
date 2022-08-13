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
          <h1> MARMITAS </h1>
          <article class="flex">

            <div id="Principal">

              <div id=Marmitas>
                <h3><?php echo $marmitas[0]["NOME"]; ?></h3>
                <hr>
                <img src="Marmita/Marmita-1.jpg" alt="Marmita 1" class="IP">
                <hr>
                <br>
                <h4>TAMANHO: <?php echo $marmitas[0]["TAMANHO"]; ?></h4>
                <h4>PREÇO: R$ <?php echo $marmitas[0]["PRECO"]; ?></h4>
                <Button value="<?= $marmitas[1]["id"] ?>"><a href="pag1.php">SAIBA MAIS</a></Button>

              </div>

              <div id=Marmitas>
                <h3><?php echo $marmitas[1]["NOME"]; ?></h3>
                <hr>
                <img src="Marmita/Marmita-2.2.jpg" alt="Marmita 2" class="IP2">
                <hr>
                <br>
                <h4>TAMANHO: <?php echo $marmitas[1]["TAMANHO"]; ?></h4>
                <h4>PREÇO: R$ <?php echo $marmitas[1]["PRECO"]; ?></h4>
                <Button value="<?= $marmitas[2]["id"] ?>"><a href="pag2.php">SAIBA MAIS</a></Button>
              </div>

              <div id=Marmitas>
                <h3><?php echo $marmitas[2]["NOME"]; ?></h3>
                <hr>
                <img src="Marmita/Marmita-3.jpg" alt="Marmita 3" class="IP2">
                <hr>
                <br>
                <h4>TAMANHO: <?php echo $marmitas[2]["TAMANHO"]; ?></h4>
                <h4>PREÇO: R$ <?php echo $marmitas[2]["PRECO"]; ?></h4>
                <Button value="<?= $marmitas[3]["id"] ?>"><a href="pag3.php">SAIBA MAIS</a></Button>
              </div>

              <div id=Marmitas>
                <h3><?php echo $marmitas[3]["NOME"]; ?></h3>
                <hr>
                <img src="Marmita/Marmita-4.jpg" alt="Marmita 4" class="IP">
                <hr>
                <h4>TAMANHO: <?php echo $marmitas[3]["TAMANHO"]; ?></h4>
                <h4>PREÇO: R$ <?php echo $marmitas[3]["PRECO"]; ?></h4>
                <Button value="<?= $marmitas[4]["id"] ?>"><a href="pag4.php">SAIBA MAIS</a></Button>
              </div>

              <div id=Marmitas>
                <h3><?php echo $marmitas[4]["NOME"]; ?></h3>
                <hr>
                <img src="Marmita/Marmita-5.jpg" alt="Marmita 5" class="IP2">
                <hr>
                <h4>TAMANHO: <?php echo $marmitas[4]["TAMANHO"]; ?></h4>
                <h4>PREÇO: R$ <?php echo $marmitas[4]["PRECO"]; ?></h4>
                <Button value="<?= $marmitas[5]["id"] ?>"><a href="pag5.php">SAIBA MAIS</a></Button>
              </div>

              <div id=Marmitas>
                <h3><?php echo $marmitas[5]["NOME"]; ?></h3>
                <hr>
                <img src="Marmita/Marmita-6.png" alt="Marmita 6" class="IP">
                <hr>
                <h4>TAMANHO: <?php echo $marmitas[5]["TAMANHO"]; ?></h4>
                <h4>PREÇO: R$ <?php echo $marmitas[5]["PRECO"]; ?></h4>
                <Button value="<?= $marmitas[6]["id"] ?>"><a href="pag6.php">SAIBA MAIS</a></Button>
              </div>

              <div id=Marmitas>
                <h3><?php echo $marmitas[6]["NOME"]; ?></h3>
                <hr>
                <img src="Marmita/Marmita-7.png" alt="Marmita 7" class="IP">
                <hr>
                <h4>TAMANHO: <?php echo $marmitas[6]["TAMANHO"]; ?></h4>
                <h4>PREÇO: R$ <?php echo $marmitas[6]["PRECO"]; ?></h4>
                <Button value="<?= $marmitas[7]["id"] ?>"><a href="pag7.php">SAIBA MAIS</a></Button>
              </div>

              <div id=Marmitas>
                <h3><?php echo $marmitas[7]["NOME"]; ?></h3>
                <hr>
                <img src="Marmita/Marmita-8.jpg" alt="Marmita 8" class="IP2">
                <hr>
                <h4>TAMANHO: <?php echo $marmitas[7]["TAMANHO"]; ?></h4>
                <h4>PREÇO: R$ <?php echo $marmitas[7]["PRECO"]; ?></h4>
                <Button value="<?= $marmitas[8]["id"] ?>"><a href="pag8.php">SAIBA MAIS</a></Button>
              </div>

              <div id=Marmitas>
                <h3><?php echo $marmitas[8]["NOME"]; ?></h3>
                <hr>
                <img src="Marmita/Marmita-9.png" alt="Marmita 9" class="IP2">
                <h4>TAMANHO: <?php echo $marmitas[8]["TAMANHO"]; ?></h4>
                <h4>PREÇO: R$ <?php echo $marmitas[8]["PRECO"]; ?></h4>
                <Button value="<?= $marmitas[9]["id"] ?>"><a href="pag9.php">SAIBA MAIS</a></Button>
              </div>
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

        </html>