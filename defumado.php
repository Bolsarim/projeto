<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Pimenta</title>
    <link rel="stylesheet" href="salame.css">
</head>
<body>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <header class="header">
        
        <a href="#"><img src="img/logocopia.png" width="200"></a>
        <nav>


            <ul class="menu" >
                <div class="botao" onclick="abririndex()" id="inicioBotão">
                    <a href="">INICIO</a>
                </div>

                <ul class="carrinho">
                     <a href="carrinho.php">🛒</a>
                </ul>
            </div>
            </ul>
        </nav>
    </header>
    <?php
    include "conexao.php";
    $sql = "select * from produtos order by preco asc, id desc";
    $resultado = mysqli_query($conexao, $sql);
   
    while($umaTarefa = mysqli_fetch_assoc($resultado)){
    ?>

    <td><?= $umaTarefa['tipo'];?></td>
    <td><?= $umaTarefa['produto'];?></td>
    <td><?= $umaTarefa['preco'];?></td>
    <td><?= $umaTarefa['imagem'];?></td>

 <?php
    }
?>
    <ul>
    <li>
        <img src="img/carnedeporcodefumada.JPG"  width="200" height="150" alt="pimenta-branca" loading="laze">
        <p>Pimenta Branca</p>
        <p>Preço: R$ 18,00</p>
        <button>Adicionar ao carrinho</button>
    </li>
    
    <li>
        <img src="img/charcutaria-copa-defumada-de-carne-suina-maturada-.jpg"  width="200" height="150" alt="pimenta-laranja" loading="laze">
        <p>Pimenta Laranja</p>
        <p>Preço: R$ 18,00</p>
        <button>Adicionar ao Carrinho</button>
    </li>

    <li>
        <img src="img/peru.jpg"  width="200" height="150" alt="pimenta-marrom" loading="laze">
        <p>Pimenta Marrom</p>
        <p>Preço: R$ 18,00</p>
        <button>Adicionar ao Carrinho</button>
    </li>

    <li>
        <img src="img/linguica pernil.jpg"  width="200" height="150" alt="pimenta-verde" loading="laze">
        <p>Pimenta Verde</p>
        <p>Preço: R$ 18,00</p>
        <button>Adicionar ao Carrinho</button>
    </li>
    <li>
        <img src="img/costelinhadefumada.jpg"  width="200" height="150" alt="pimenta-vermelha" loading="laze">
        <p>Pimenta Vermelha</p>
        <p>Preço: R$ 20,00</p>
        <button>Adicionar ao Carrinho</button>
    </li>
    </ul>
    <br>
    <br>
    <br>
    <br>
    <footer class="footer">
        <a href="#"></a>
        <nav>
            <ul class="menu">
    
            </ul>
        </nav>
    </footer>
    <script src="inicio.js"></script>
</body>
</html>