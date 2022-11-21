<?php

include 'conexao.php';

$Cafe = $_GET['nmCafe'];

$query = "SELECT nmCafe FROM tbCafe WHERE nmCafe LIKE '%".$Cafe."%'";
$result= $mysqli -> query($query);

while($row = $result -> fetch_object()){
    echo "<div id='link' onClick='addText(\"".$row -> nmCafe."\");'>" . $row -> nmCafe . "</div>";  
}
/*$pesquisa = "SELECT * FROM tbCafe WHERE nmCafe LIKE '%querystring%'";
$query = mysqli_query($link, $pesquisa);

if (mysqli_num_rows($query) != 1) {

    echo "Fodase";
    exit;
}*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="index.js"></script>
    <!--Boot strap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--link CSS-->
    <link rel="stylesheet" href="index.css">

    <!--LINK fontawesome-->
    <script src="https://kit.fontawesome.com/cc3645eafc.js" crossorigin="anonymous"></script>

    <!--JavaScript Boot strap 5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/Ellipse 1.png" type="image/x-icon">
    <title>Dominus cafés</title>
</head>

<body>
    <header class="fundo">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">

                <div class="col-3 d-block d-lg-none text-center">
                    <i class="fa-solid fa-cart-shopping fs-1 branco mt-4"></i>
                </div>

                <div class="col-6 col-lg-8 text-center text-lg-start">
                    <a href="../codhome/index.html"><img src="img/DOMINUS 20 2.png" alt="Logo" class="img-fluid icone"></a>
                </div>

                <div class="col-3 d-block d-lg-none text-center">
                    <div><i class="fa-solid fa-bars fs-1 branco mt-4" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"></i></div>
                </div>

                <div class="col-10 col-lg-2">
                    <form class="d-flex mt-lg-4 mt-3 mb-3" method="get" action="../php/pesquiseira.php">
                        <input class="form-control me-2" type="text" name="cafe" placeholder="Digite Aqui ...." aria-label="Search">
                        <button class="btn btn-outline-light branco" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>

                <div class="col-4 col-lg-2 mt-lg-4 mt-3 d-none d-lg-block">
                    <div class="d-flex justify-content-evenly">
                        <div><i class="fa-solid fa-cart-shopping fs-1 branco mt-1 mt-lg-0"></i></div>
                        <div><i class="fa-solid fa-bars fs-1 branco mt-1 mt-lg-0" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!--Sub Cabeçalho-->
        <div class="collapse" id="collapseExample">
            <div class="container-fluid fundo linha">
                <div class="row p-1">
                    <div onmouseover="barra()" id="nav-1" class="col-12 col-lg-3 text-center fs-4 branco"><a href="./index.html" class="row d-flex justify-content-center">
                            <h3 class="fs-4">Home</h3>
                            <div id="linha1" class="col-12"></div>
                        </a></div>
                    <div onmouseover="barra()" id="nav-2" class="col-12 col-lg-3 text-center fs-4 branco"><a href="../codprodutos/produto.html" class="row d-flex justify-content-center">
                            <h3 class="fs-4">Produtos</h3>
                            <div id="linha2" class="col-12"></div>
                        </a></div>
                    <div onmouseover="barra()" id="nav-3" class="col-12 col-lg-3 text-center fs-4 branco"><a href="../codihstoria/historia.html#metodos" class="row d-flex justify-content-center">
                            <h3 class="fs-4"> Métodos</h3>
                            <div id="linha3" class="col-12"></div>
                        </a></div>
                    <div onmouseover="barra()" id="nav-4" class="col-12 col-lg-3 text-center fs-4 branco"><a href="../codihstoria/historia.html" class="row d-flex justify-content-center">
                            <h3 class="fs-4">Dominus Cafés</h3>
                            <div id="linha4" class="col-12"></div>
                        </a></div>
                </div>
            </div>
        </div>
        <!--Fim do Sub Cabeçalho-->
    </header>

    <main>
        <h3 class="texto">Home</h3>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/carrosel/CARROSSEL2.png" class="d-block w-100 img-fluid" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/carrosel/CARROSSEL3.png" class="d-block w-100 img-fluid" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/carrosel/CARROSSEL4.png" class="d-block w-100 img-fluid" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="fundo">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 branco text-center">
                    <h3>Sobre Nós</h3>
                    <p>Nosso Café</p>
                    <p>Nossa História</p>
                </div>
                <hr class="branco d-lg-none d-block">
                <div class="col-12 col-lg-3 branco text-center ">
                    <h3>Atendimento</h3>
                    <p>WhatsApp</p>
                    <p>Fale Conosco</p>
                </div>
                <hr class="branco d-lg-none d-block">
                <div class="col-12 col-lg-3 branco text-center ">
                    <h3>Ajuda</h3>
                    <p>Entrega</p>
                    <p>Dúvidas Gerais</p>
                </div>
                <hr class="branco d-lg-none d-block">
                <div class="col-12 col-lg-2 branco text-center ">
                    <h3>Redes Sociais</h3>
                    <div class="d-flex justify-content-laround justify-content-evenly">
                        <i class="fa-brands fa-whatsapp fs-2 pt-1"></i>
                        <a href="https://instagram.com/dominuscafes?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram fs-2 pt-1 insta"></i></a>
                        <i class="fa-brands fa-facebook fs-2 pt-1"></i>
                    </div>

                </div>
            </div>
            <div class="linha">
                <div class="row">
                    <div class="d-flex justify-content-evenly col-12 col-lg-7 branco mt-3">
                        <h6>Políticas de Privacidade</h6>
                        <h6>|</h6>
                        <h6>Termos de Uso</h6>
                        <h6 class="d-none d-lg-block">|</h6>
                    </div>
                    <div class="d-lg-flex justify-content-center col-12 col-lg-5 mt-3 branco text-center">
                        <h6 class="me-lg-1">© 2022 Dominus Cafés.</h6>
                        <h6>Todos os direitos reservados.</h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>