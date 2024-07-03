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



<header2>

    <div id="container">	
	
    <!-- Start	Product details -->
        <div class="product-details">
            
            <!-- 	Product Name -->
        <h1>Promoção</h1>
    <!-- 		<span class="hint new">New</span> -->
    <!-- 		<span class="hint free-shipping">Free Shipping</span> -->
    <!-- 		the Product rating -->
        <span class="hint-star star">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </span>
            
        
    <!-- The most important information about the product -->
            <p class="information">" Aproveite esta oferta exclusiva e leve para casa nosso Balde de Vinho Premium com desconto imperdível! Ideal para suas celebrações e momentos especiais, este balde é perfeito para manter seu vinho gelado enquanto você desfruta da companhia de amigos e familiares.  "</p>
    
            
            
    <!-- 		Control -->
    <div class="control">
  
       
        
    </div>
                
    </div>
        
    <!-- 	End	Product details   -->
        
        
        
    <!-- 	Start product image & Information -->
        
    <div class="product-image">
        
        <img src="img/baldevinho.jpg" alt="Omar Dsoky">
        
    <!-- 	product Information-->
    <div class="info">
        <h2>The Description</h2>
        <ul>
            <li><strong>Produto: </strong>Balde de Vinho Premium</li>
            <li><strong>Material: </strong>Aço inoxidável de alta qualidade</li>
            <li><strong>Capacidade: </strong>Para até duas garrafas de vinho</li>
            <li><strong>Válido até: </strong>22/07</li>
            
        </ul>
    </div>
    </div>
    <!--  End product image  -->
    
    
    </div>
    
    </header2>
    


















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