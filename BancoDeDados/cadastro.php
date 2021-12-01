<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section id="mp">
        <div class="mp__header">
            <div class="mp__header--div-icon">
                <img src="./assets/logo.png" class="mp__header--icon" onclick="window.location.href = './index.php'">
            </div>
            <div class="mp__header--div-title">
                <h1 class="mp__header--title">Página de Cadastro</h1>
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
            <form action="./gravar.php" method="post" id="form">
                <h1 class="mp__main--options--title">Entre com as informações: </h1>

                <div class="form__information">
                    <span>Nome:</span> <input name="nome" type="text" required />
                </div>

                <div class="form__information">
                    <span>Email:</span> <input name="email" type="email" placeholder="example@email.com" required />
                </div>

                <div class="form__information">
                    <span>CPF:</span> <input name="cpf" type="text" placeholder="000.000.000-00" required />
                </div>

                <div class="form__information">
                    <span>RG:</span> <input name="rg" type="text" placeholder="000.000.000-00" required />
                </div>

                <div class="form__information">
                    <span>Telefone:</span> <input name="telefone" type="tel" required />
                </div>

                <div class="form__information">
                    <span>Data de Nascimento:</span> <input name="data_nasc" type="date" required />
                </div>
                
                <div class="form__information form__buttons">
                    <input type="reset" value="Limpar" class="form__button">
                    <input type="submit" value="Cadastrar" class="form__button">
                </div>
            </form>
        </div>

        <div class="mp__footer">
            <p>FOOTER</p>
        </div>
    </section>
</body>
</html>