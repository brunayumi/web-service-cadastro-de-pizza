<?php
    $conexao = mysqli_connect("localhost", "id10995464_bruna", "bruna", "id10995464_bruna");
                     //("onde está o banco", "usuario do baco", "senha", "nome do banco de dados")
    $sabor  = $_POST[sabor];
    $valor = $_POST[valor];

    $query = "insert into tb_pizza values (null, '$sabor', '$valor')";

    mysqli_query($conexao, $query);

    echo "Registro salvo com sucesso!";
?>