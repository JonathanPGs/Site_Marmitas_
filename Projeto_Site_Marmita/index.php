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

              <a href="#">Home</li>
                <a href="#">Conheça a Dona Rita</li>
                  <a href="#">Contato</li>

            </ul>
          </nav>
          </header>
          <h1> MARMITAS </h1>
          <article class="flex">

            <div id="Principal">

              <div id=Marmitas>

                <img src="Marmita/Marmita-1.jpg" alt="Marmita 1" class="IP">
                <h3><?php echo $marmitas[0]["NOME"]; ?></h3>
                <hr>
                <br>
                <h4>TAMANHO: <?php echo $marmitas[0]["TAMANHO"]; ?></h4>
                <h4>PREÇO: R$ <?php echo $marmitas[0]["PRECO"]; ?></h4>
                <Button>SAIBA MAIS!</Button>

              </div>

              <div id=Marmitas>
                <img src="Marmita/Marmita-2.jpg" alt="Marmita 2">
                <p>L E G E N D A</p>
                <Button>SAIBA MAIS!</Button>
              </div>

              <div id=Marmitas>
                <img src="Marmita/Marmita-3.jpg" alt="Marmita 3">
                <p>L E G E N D A</p>
                <Button>SAIBA MAIS!</Button>
              </div>

              <div id=Marmitas>
                <img src="Marmita/Marmita-4.jpg" alt="Marmita 4">
                <p>L E G E N D A</p>
                <Button>SAIBA MAIS!</Button>
              </div>

              <div id=Marmitas>
                <img src="Marmita/Marmita-5.jpg" alt="Marmita 5">
                <p>L E G E N D A</p>
                <Button>SAIBA MAIS!</Button>
              </div>

              <div id=Marmitas>
                <img src="Marmita/Marmita-6.png" alt="Marmita 6">
                <p>L E G E N D A</p>
                <Button>SAIBA MAIS!</Button>
              </div>

              <div id=Marmitas>
                <img src="Marmita/Marmita-7.png" alt="Marmita 7">
                <p>L E G E N D A</p>
                <Button>SAIBA MAIS!</Button>
              </div>

              <div id=Marmitas>
                <img src="Marmita/Marmita-8.jpg" alt="Marmita 8">
                <p>L E G E N D A</p>
                <Button>SAIBA MAIS!</Button>
              </div>

              <div id=Marmitas>
                <img src="Marmita/Marmita-9.png" alt="Marmita 9">
                <p>L E G E N D A</p>
                <Button>SAIBA MAIS!</Button>
              </div>
            </div>

          </article>

          <footer>
            <h2>Quer saber mais?</h2>
            <p>só entrar em contato atraves do telefone</p>
            <p> Ligue (18) 999785 - 4500 </p>
            <p> manda mensagem no whatsapp 18 99785 - 4500 </p>
          </footer>
        </body>

        </html>