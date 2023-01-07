<?php

function db()
{
    static $pdo;

    if (! $pdo) {
        // include the database configuration file
        $config = require './config/database.php';

        try {
            // create a new PDO connection
            $pdo = new PDO(
                "{$config['driver']}:host={$config['host']};dbname={$config['database']};charset={$config['charset']}",
                $config['username'],
                $config['password']
            );
        } catch (PDOException $e) {
            // display an error message
            echo 'DB Error: ' . $e->getMessage();
        }
        
    }

    return $pdo;
}

function query($sql, $bindings = [])
{
    $stmt = db()->prepare($sql);
    $stmt->execute($bindings);
    return $stmt;
}

function fetch($sql, $bindings = [])
{
    return query($sql, $bindings)->fetch();
}

function fetchAll($sql, $bindings = [])
{
    return query($sql, $bindings)->fetchAll();
}

function execute($sql, $bindings = [])
{
    return query($sql, $bindings)->rowCount();
}
