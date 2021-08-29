<?php

//Função para conectar a um banco de dados
function conectar(){
    $dsn = "mysql:host=localhost;dbname=estetica_agil";
    $user = "root";
    $senha = "";
    $conn = new PDO($dsn,$user,$senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION);
    return $conn;  
}
