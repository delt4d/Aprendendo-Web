<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- title -->
    <title>HerFlores Website</title>

    <!-- favicon -->
    <link rel="icon" href="./assets/icon.png">

    <!-- Google Api - Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
        <!-- Poppins -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
        <!-- Righteous -->
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
        
    <!-- owlcarousel -->
    <link rel="stylesheet" href="./owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./owlcarousel/owl.theme.default.min.css">

    <!-- css local -->
    <link rel="stylesheet" href="./css/carousel.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/footer.css">

</head>
<body>
    <!-- loading -->
    <script type="text/javascript">
        var loading = document.createElement("div");
        var loading_title = document.createElement("h1");

        loading.style = `
            position:fixed; 
            top:0; 
            left:0; 
            bottom:0;
            right:0; 
            z-index: 99999999;
            background-color:whitesmoke;
            display: grid;
            place-items: center;
        `;

        loading_title.innerText = "Carregando...";

        loading.appendChild(loading_title);
        document.body.appendChild(loading)
        
        var cont = 1;

        function stopAnimation(animation_id) {
            loading.style.display = 'none';
            clearInterval(animation_id);
        }

        loadingAnimation = setInterval(() => {
            var points;

            if (cont === 1) {
                points = '.';
                cont = 2;
            } 
            else if (cont === 2) {
                points = '..';
                cont = 3;
            } 
            else {
                points = '...';
                cont = 1;
            }
            loading_title.innerText = "Carregando" + points;
        }, 800);

        if (!navigator.onLine) {
            stopAnimation(loadingAnimation);
            alert("Você está offline!");
        }
        
        window.addEventListener("load", () => {
            setTimeout(()=> {
                stopAnimation(loadingAnimation);
            }, 500);
        })
    </script>


    <header id="header">
        <!-- top -->
        <section class="top">
            <div class="top__title">
                <h1 class="top__title--title"><span class="colored">Her</span>Flores</h1>
            </div>

            <div class="top__search">
                <div class="top__search--search-div">
                    <img src="./assets/lupa.png" class="top__search--search-icon" />
                    <input type="text" class="top__search--search" placeholder="O que está procurando?" />
                </div>
            </div>

            <div class="top__buttons">
                <button id="top__buttons--button-call_us" class="top__buttons--button">
                    <img src="./assets/call.png" />
                </button>

                <button id="top__buttons--button-profile" class="top__buttons--button">
                    <img src="./assets/user.png" />
                </button>
                
                <button id="top__buttons--button-cart" class="top__buttons--button">
                    <img src="./assets/cart.png" />
                </button>

                <button id="top__buttons--button-menu" class="top__buttons--button">
                    <img src="./assets/menu.png" />
                </button>
            </div>
        </section>

        <!-- nav -->
        <nav class="nav">
            <ul class="nav__menu">
                <li class="nav__item">
                    <a href="" class="nav__link">Departamentos</a>

                    <ul class="nav__sub-menu">
                        <li class="nav__item"><a href="" class="nav__link">sublink</a></li>
                    </ul>
                </li>

                <li class="nav__item">
                    <a href="" class="nav__link">Ocasiões</a>

                    <ul class="nav__sub-menu">
                        <li class="nav__item"><a href="" class="nav__link">sublink</a></li>
                    </ul>
                </li>
                
                <li class="nav__item">
                    <a href="" class="nav__link">Tipos de Flores</a>

                    <ul class="nav__sub-menu">
                        <li class="nav__item"><a href="" class="nav__link">sublink</a></li>
                    </ul>
                </li>
                
                <li class="nav__item">
                    <a href="" class="nav__link">Kits e Cestas</a>

                    <ul class="nav__sub-menu">
                        <li class="nav__item"><a href="" class="nav__link">sublink</a></li>
                    </ul>
                </li>
                
                <li class="nav__item">
                    <a href="" class="nav__link">Presentes</a>

                    <ul class="nav__sub-menu">
                        <li class="nav__item"><a href="" class="nav__link">sublink</a></li>
                    </ul>
                </li>
                
                <li class="nav__item">
                    <a href="" class="nav__link">Ofertas</a>

                    <ul class="nav__sub-menu">
                        <li class="nav__item"><a href="" class="nav__link">sublink</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- carousel -->
        <div id="carousel" class="owl-carousel owl-theme">

            <img class="img item" id="im-1" src="https://picsum.photos/1600/400?random=1" alt="random-1" onerror="imageLoadError(this);" />
            <img class="img item" id="im-2" src="https://picsum.photos/1600/400?random=2" alt="random-2" onerror="imageLoadError(this);" />
            <img class="img item" id="im-3" src="https://picsum.photos/1600/400?random=3" alt="random-3" onerror="imageLoadError(this);" />
            <img class="img item" id="im-4" src="https://picsum.photos/1600/400?random=4" alt="random-4" onerror="imageLoadError(this);" />
            <img class="img item" id="im-4" src="https://picsum.photos/1600/400?random=5" alt="random-5" onerror="imageLoadError(this);" />
            <img class="img item" id="im-4" src="https://picsum.photos/1600/400?random=6" alt="random-6" onerror="imageLoadError(this);" />

        </div>

        <!-- gift container -->
        <div class="sendGift">
            <form class="sendGift__form">
                <div class="sendGift__icon">
                    <img src="./assets/gift.png" class="sendGift__icon--icon">
                    <p class="sendGift__icon--text">Escolha seu Presente</p>
                </div>

                <div class="sendGift__info-cep">
                    <small>1.CEP de Entrega</small>
                    <input type="text" placeholder="00000-000" />
                    <a href="#" class="small">Não sei o cpf</a>
                </div>

                <div class="sendGift__info-occasion">
                    <small>2.Qual ocasião</small>
                    <select name="occasion">

                        <option value>Qual a ocasião</option>
                        <option value="occasion1">Ocasião 1</option>
                        <option value="occasion2">Ocasião 2</option>
                        <option value="occasion3">Ocasião 3</option>
                        <option value="occasion4">Ocasião 4</option>
                        <option value="occasion5">Ocasião 5</option>

                    </select>
                </div>

                <div class="sendGift__send">
                    <input class="sendGift__send--button" type="button" value="buscar">
                </div>
            </form>
        </div>

        <section id="section-produtos">

            <section class="c-produtos">
                <div class="c-produtos--divtitle">
                    <h1>Novidades</h1>
                </div>

                <div class="produto">
                    <img src="./.lx/lirio.jpg" class="produto--img" />
                    <a href="#" class="produto--descricao">Lindo lírio</a>
                    <a href="#" class="produto--preco">De: R$ 129,90por R$ 116,91</a>
                    <a href="#" class="produto--parcelamento">3 x de R$ 38,97 sem juros</a>
                    <a href="#" class="produto--tipo">Lírios</a>
                </div>

                <div class="produto">
                    <img src="./.lx/lirio.jpg" class="produto--img" />
                    <a href="#" class="produto--descricao">Lindo lírio</a>
                    <a href="#" class="produto--preco">De: R$ 129,90por R$ 116,91</a>
                    <a href="#" class="produto--parcelamento">3 x de R$ 38,97 sem juros</a>
                    <a href="#" class="produto--tipo">Lírios</a>
                </div>

                <div class="produto">
                    <img src="./.lx/lirio.jpg" class="produto--img" />
                    <a href="#" class="produto--descricao">Lindo lírio</a>
                    <a href="#" class="produto--preco">De: R$ 129,90por R$ 116,91</a>
                    <a href="#" class="produto--parcelamento">3 x de R$ 38,97 sem juros</a>
                    <a href="#" class="produto--tipo">Lírios</a>
                </div>

                <div class="produto">
                    <img src="./.lx/lirio.jpg" class="produto--img" />
                    <a href="#" class="produto--descricao">Lindo lírio</a>
                    <a href="#" class="produto--preco">De: R$ 129,90por R$ 116,91</a>
                    <a href="#" class="produto--parcelamento">3 x de R$ 38,97 sem juros</a>
                    <a href="#" class="produto--tipo">Lírios</a>
                </div>

                <div class="produto">
                    <img src="./.lx/lirio.jpg" class="produto--img" />
                    <a href="#" class="produto--descricao">Lindo lírio</a>
                    <a href="#" class="produto--preco">De: R$ 129,90por R$ 116,91</a>
                    <a href="#" class="produto--parcelamento">3 x de R$ 38,97 sem juros</a>
                    <a href="#" class="produto--tipo">Lírios</a>
                </div>

                <div class="produto">
                    <img src="./.lx/lirio.jpg" class="produto--img" />
                    <a href="#" class="produto--descricao">Lindo lírio</a>
                    <a href="#" class="produto--preco">De: R$ 129,90por R$ 116,91</a>
                    <a href="#" class="produto--parcelamento">3 x de R$ 38,97 sem juros</a>
                    <a href="#" class="produto--tipo">Lírios</a>
                </div>

                <div class="produto">
                    <img src="./.lx/lirio.jpg" class="produto--img" />
                    <a href="#" class="produto--descricao">Lindo lírio</a>
                    <a href="#" class="produto--preco">De: R$ 129,90por R$ 116,91</a>
                    <a href="#" class="produto--parcelamento">3 x de R$ 38,97 sem juros</a>
                    <a href="#" class="produto--tipo">Lírios</a>
                </div>
            </section>

            <section class="c-produtos">
                <div class="c-produtos--divtitle">
                    <h1>Para você</h1>
                </div>
                
                <div class="produto">
                    <img src="./.lx/lirio.jpg" class="produto--img" />
                    <a href="#" class="produto--descricao">Lindo lírio</a>
                    <a href="#" class="produto--preco">De: R$ 129,90 por R$ 116,91</a>
                    <a href="#" class="produto--parcelamento">3 x de R$ 38,97 sem juros</a>
                    <a href="#" class="produto--tipo">Lírios</a>
                </div>
            </section>

            <section id="c-produtos--all" class="c-produtos">
                <div class="c-produtos--divtitle">
                    <h1>Todos</h1>
                </div>

                <?php
                    function mostra_produto() {
                        echo '
                            <div class="produto">
                                <img src="./.lx/lirio.jpg" class="produto--img" />
                                <a href="#" class="produto--descricao">Lindo lírio</a>
                                <a href="#" class="produto--preco">De: R$ 129,90 por R$ 116,91</a>
                                <a href="#" class="produto--parcelamento">3 x de R$ 38,97 sem juros</a>
                                <a href="#" class="produto--tipo">Lírios</a>
                            </div>
                        ';
                    }

                    for ($i=0; $i <= 23; $i++) {
                        mostra_produto();
                    }

                ?>
            </section>

        </section>

    </main>
    <footer></footer>

















    <!-- jquery 2.2.0 -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <!-- owl carousel -->
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <!-- main.js -->
    <script src="js/main.js"></script>

</body>
</html>