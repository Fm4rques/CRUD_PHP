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
        
        define( 'MYSQL_HOST', 'localhost' );
        define( 'MYSQL_USER', 'root' );
        define( 'MYSQL_PASSWORD', '' );
        define( 'MYSQL_DB_NAME', 'cadastro' );  



        $nome = $_GET["nome"];
        $cpf = $_GET["cpf"];
        $email = $_GET["email"];

       
        $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
       
        $sql = "insert into usuarios (nome, cpf, email) values ('{$nome}', '{$cpf}', '{$email}')";
        $stmt = $PDO->prepare( $sql );
        $result = $stmt->execute();
          
    
    if($result) {
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