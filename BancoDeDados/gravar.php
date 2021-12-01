<?php

$id = mysql_connect("localhost", "root", "");
$con = mysql_select_db("conexao_pw", $id);

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$data_nasc = $_POST["data_nasc"];

if ($nome && $telefone && $email && $cpf && rg && $data_nasc) {
    $sql = "insert into aluno (alu_nome, alu_telefone, alu_email, alu_cpf, alu_rg, alu_data) values ('$nome','$telefone','$email','$cpf','$rg','$data_nasc')";

    mysql_query($sql);
    mysql_close($id);
}

header("location: cadastro.php");

