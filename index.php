<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPÓRIO MARANGONI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <header class="header1">
        <ul class="menu1">
        
            <a> Contatos: (19)1234-5678</a>
        </ul>
    </header>

    <header class="header">
        
        <a href="#"><img src="img/logocopia.png" width="200"></a>

        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Busque aqui...">
            <button onclick="search()">Envie</button>
        </div>
        <div id="searchResults">
            <!-- Aqui é onde os resultados da busca serão exibidos -->
        </div>
        <nav>
            <ul class="menu">
                <a> Meu carrinho</a>
                <li> <a href="carrinho.php">🛒</a></li>
            </ul>
            
        </nav>    
    </header>
   
    <div class="banner">
        <div class="slide" id="slide1">
          <img src="img/fundoqueijo.png" alt="Imagem 1">
        </div>
        <div class="slide" id="slide2">
          <img src="img/banner3.jpg" alt="Imagem 2">
        </div>
        <div class="slide" id="slide3">
          <img src="img/banner2.jpg" alt="Imagem 3">
        </div>
      </div>

    <h1>NOSSOS PRODUTOS</h1>
  
    <section class="flex">
    <div class="link">
        <a href="produtos.php?tipo=salame" id="salameBotao">
            <img src="img/salames.png" width="400" height="250">
            <p>Salames</p>
        </a>
    </div>
        
    <div class="link">
            <a href="produtos.php?tipo=queijo" id="queijoBotao">
                <img src="img/queijo.jpg" width="400" height="250">
                <p>Queijo</p>
            </a>
        </div>
 
        <div class="link">
        <a href="produtos.php?tipo=pimenta" id="pimentaBotao">
            <img src="img/pimenta.jpg" width="400" height="250">
            <p>Pimenta</p>
        </a>
    </div>

    <div class="link">
        <a href="produtos.php?tipo=doce" id="doceBotao">
            <img src="img/doce.jpg" width="400" height="250">
            <p>Doce</p>
        </a>
    </div>

    <div class="link">
        <a href="produtos.php?tipo=defumado" id="defumadoBotao">
            <img src="img/defumados.jpg" width="400" height="250">
            <p>Defumados</p>
        </a>
    </div>

    <div class="link">
        <a href="produtos.php?tipo=vinho" id="vinhoBotao">
            <img src="img/vinnn.jpg" width="400" height="250">
            <p>Vinho</p>
        </a>
    </div>
</section>
    <br>
    <br>
    <br>
    <br>
    <footer class="footer">
        <a href="#"></a>
        <nav>
            <ul class="menu">

                    <ul class="footer2" >
                        <div class="botao" id="quemSomos">
                            <a href="quemsomos.php">Quem Somos</a>
                        </div>
                    </ul> 
                    <ul class="footer2" >
                        <div class="botao" onclick="abririnformacoes()" id="informacoes">
                        <a href="">Informações</a>
                        </div>
                    </ul>
        </nav>
    </footer>
    <script src="app.js"></script>
</body>
</html>