<?php
$servidor = "localhost:3306";
$usuario = "root";
$senha = "";
$banco = "helper";

$con = mysqli_connect($servidor,$usuario,$senha,$banco);

$sql = 
    "DROP DATABASE IF EXISTS 'helper'"

    . "CREATE DATABASE 'helper'"

    . "USE DATABASE 'helper'"

    . "CREATE TABLE `cliente` (\n"

    . "  `id_cliente` int(30) NOT NULL, AUTO INCREMENT \n"

    . "  `nome` varchar(40) NOT NULL,\n"

    . "  `email` varchar(244) NOT NULL,\n"

    . "  `senha` varchar(30) NOT NULL\n"

    . "CREATE TABLE `corda` (\n"

    . "  `id_corda` int(30) NOT NULL, AUTO INCREMENT \n"

    . "  `nome` varchar(40) NOT NULL,\n"

    . "  `marca` varchar(40) NOT NULL,\n"

    . "  `link` varchar(30) NOT NULL\n"

    . "CREATE TABLE `metal` (\n"

    . "  `id_metal` int(30) NOT NULL, AUTO INCREMENT \n"

    . "  `nome` varchar(40) NOT NULL,\n"

    . "  `marca` varchar(40) NOT NULL,\n"

    . "  `link` varchar(30) NOT NULL\n"

    . "CREATE TABLE `percussao` (\n"

    . "  `id_percussao` int(30) NOT NULL, AUTO INCREMENT \n"

    . "  `nome` varchar(40) NOT NULL,\n"

    . "  `marca` varchar(40) NOT NULL,\n"

    . "  `link` varchar(30) NOT NULL\n"

    . "CREATE TABLE `teclas` (\n"

    . "  `id_teclas` int(30) NOT NULL, AUTO INCREMENT \n"

    . "  `nome` varchar(40) NOT NULL,\n"

    . "  `marca` varchar(40) NOT NULL,\n"

    . "  `link` varchar(30) NOT NULL\n"

    . ") ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
?>