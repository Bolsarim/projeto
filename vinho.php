<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Salames</title>
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


 <?php
    }
?>
    <ul>
        <li>
            <img src="img/vinhobranco.jpg"   height="150" alt="vinho-branco" loading="laze">
            <p>Vinho Branco</p>
            <p>Preço: R$ 25,00</p>
            <button>Adicionar ao carrinho</button>
        </li>
        
        <li>
            <img src="img/vinhobrancoseco.jpg"   height="150" alt="vinho-branco-seco" loading="laze">
            <p>Vinho Branco Seco</p>
            <p>Preço: R$ 25,00</p>
            <button>Adicionar ao Carrinho</button>
        </li>

        <li>
            <img src="img/vinhorose.jpg"   height="150" alt="vinho-rose" loading="laze">
            <p>Vinho Rose</p>
            <p>Preço: R$ 25,00</p>
            <button>Adicionar ao Carrinho</button>
        </li>

        <li>
            <img src="img/vinhoseco.jpg"   height="150" alt="vinho-seco" loading="laze">
            <p>Vinho Seco</p>
            <p>Preço: R$ 25,00</p>
            <button>Adicionar ao Carrinho</button>
        </li>
        <li>
            <img src="img/vinhosuav.jpg"   height="150" alt="vinho-suave" loading="laze">
            <p>Vinho Suav</p>
            <p>Preço: R$ 25,00</p>
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