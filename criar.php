<?php
    include_once("conexao.php");

    $texto = $_POST['nota'];
    $strcon = mysqli_connect('localhost','root','','notas') or die('Erro ao conectar ao banco de dados');
    $sql = "INSERT INTO notas VALUES ";
    $sql .= "('$texto')"; 
    mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($strcon);
    echo "Cliente cadastrado com sucesso!";
    echo "<a href='formulario.html'>Clique aqui para realizar um novo cadastro</a><br>";
echo "<a href='consulta.php'>Clique aqui para realizar uma consulta</a><br>";
?>
