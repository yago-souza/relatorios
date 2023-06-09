<?php

use Relatorios\Infrastructure\Persistence\ConnectionCreator;

require_once "vendor/autoload.php";

#$pdo = new PDO('sqlite:banco');
$path = __DIR__ . '/sql/select.sql';
$pdo = ConnectionCreator::createConnection();


$arquivo = file_get_contents($path);

/*$pdo->query('CREATE TABLE EMPLOYEES
                                   (ID INTEGER PRIMARY KEY,
                                   NOME STRING,
                                   DATA_ADMISSAO STRING,
                                   DATA_DEMISSAO STRING)');
*/

/*$pdo->exec("INSERT INTO EMPLOYEES (NOME,
    DATA_ADMISSAO,
    DATA_DEMISSAO)
    VALUES(
    'YAGO',
    '26/01/2022',
    '31/12/2022'
    )");*/

#$stmt = $pdo->query('SELECT * FROM EMPLOYEES');
$stmt = $pdo->query($arquivo);

var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));