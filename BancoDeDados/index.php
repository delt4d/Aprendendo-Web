<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section id="mp">
        <div class="mp__header">
            <div class="mp__header--div-icon">
                <img src="./assets/logo.png" class="mp__header--icon" onclick="window.location.href = './index.php'">
            </div>
            <div class="mp__header--div-title">
                <h1 class="mp__header--title">Página Principal</h1>
            </div>
            <div class="mp__header--div-links">
                <ul class="mp__header--links__ul">
                    <li class="mp__header--links__item"><a href="./index.php" class="mp__header--links__a">home</a></li>
                    <li class="mp__header--links__item"><a href="./index.php" class="mp__header--links__a">blog</a></li>
                    <li class="mp__header--links__item"><a href="./index.php" class="mp__header--links__a">fale conosco</a></li>
                </ul>
            </div>
        </div>
        <div class="mp__main">
            <section class="mp__main--section-options">
                <h1 class="mp__main--options--title">Escolha uma opção</h1>
                <?php 
                    $links = [['Cadastro', 'cadastro.php'], ['Edição', '#'], ['Relatório', 'relatorio.php'], ['Exclusão', '#']];

                    for($i=0; $i < 4; $i++) {
                        echo '
                            <div
                            class="mp__main-options--option"
                            onclick="window.location.href = `'.$links[$i][1].'`"
                            >
                                <img 
                                src="./assets/maior-que.png"
                                class="mp__main-options--icon"
                                />
                                '.$links[$i][0].'
                            </div> 
                        ';
                    }
                ?>
            </section>
        </div>
        <div class="mp__footer">
            <p>FOOTER</p>
        </div>
    </section>
</body>
</html>