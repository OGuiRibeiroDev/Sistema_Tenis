<?php

$conexao = mysqli_connect("127.0.0.1", "root", "", "tenis");

if (!$conexao) {
    die('Could not connect: ' . mysqli_error());
}


?>