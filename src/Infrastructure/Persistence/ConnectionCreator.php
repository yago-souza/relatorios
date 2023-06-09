<?php

namespace Relatorios\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{
    public static function createConnection(): \PDO
    {
        $databasePath = __DIR__ . '/../../../banco';
        $connection = new PDO('sqlite:' . $databasePath);
        return $connection;return $connection;
    }
}