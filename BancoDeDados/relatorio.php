<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Consulta</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section id="mp">
        <div class="mp__header">
            <div class="mp__header--div-icon">
                <img src="./assets/logo.png" class="mp__header--icon" onclick="window.location.href = './index.php'">
            </div>
            <div class="mp__header--div-title">
                <h1 class="mp__header--title">Relatório</h1>
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
            <section class="mp__main--section-options" style="width: 80%; margin: 2rem auto;">
                <h1 class="mp__main--options--title">Resultados encontrados:</h1>
                
                <div class="table">
                    <span class="table__h">ID</span>
                    <span class="table__h">Nome</span>
                    <span class="table__h">Email</span>
                    <span class="table__h">Cpf</span>
                    <span class="table__h">Rg</span>
                    <span class="table__h">Telefone</span>
                    <span class="table__h">Nascimento</span>

                    <?php
                        $host = 'localhost'; // servidor local
                        $user = 'root';		 // usuário
                        $passwd = '';		 // sua senha
                        $db = 'conexao_pw';	 // banco de dados
                        $table = 'aluno';
                        
                        $con = mysqli_connect($host, $user, $passwd, $db);
                        
                        $query = "SELECT * FROM $table";
                        $result = mysqli_query($con, $query);

                        if ($result) {
                            while ($row=mysqli_fetch_array($result)) {
                                $cod = $row[0];
                                $nome = $row[1];
                                $cpf = $row[2];
                                $rg = $row[3];
                                $data_nasc = $row[4];
                                $telefone = $row[5];
                                $email = $row[6];
                                
                                echo "
                                <span>$cod</span>
                                <span>$nome</span>
                                <span>$email</span>
                                <span>$cpf</span>
                                <span>$rg</span>
                                <span>$telefone</span>
                                <span>$data_nasc</span>
                                ";
                            }
                        }
                    ?>
                </div>
            </section>
        </div>
        <div class="mp__footer">
            <p>FOOTER</p>
        </div>
    </section>
</body>
</html>