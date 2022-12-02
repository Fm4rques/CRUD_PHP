<html>
<head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div>
        <div>
        <?php
        $nome = $_GET["nome"];
        $cpf = $_GET["cpf"];
        $email = $_GET["email"];
    
        $conexao = mysqli_connect("127.0.0.1", "root", '', "cadastro");
        $query = mysqli_query($conexao,"insert into usuarios (nome, cpf, email) values ('{$nome}', '{$cpf}', '{$email}')");
        mysqli_close($conexao);
   
    
    if($query) {
        ?>
        <p class="alert-success">
        Nome: <?= $nome; ?>, CPF: <?= $cpf; ?>, E-mail: <?= $email; ?> - Cadastro realizado com sucesso!
        </p>
    <?php
    } else {
    ?>
        <p class="alert-danger">
            ERRO - O produto não foi adicionado!
        </p>

    <?php
    }
        
    ?>
        </div>
    </div>
</body>
</html>