<?php

/**
 * Check whether MySQL connection can be established
 * 
 * @param array $config
 * @return PDO|bool
 */
function create_connection (array $config) {
    extract($config);
    
    try {
        // Supressing stupid warning
        $pdo = @new PDO("mysql:host=$host;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $pdo;
    }
    catch (PDOException $e) {
        throw new Exception('database.errors.connection');
    }
}

/**
 * Create PDO out of specified config
 * 
 * @param array $config
 * @return \PDO
 */
function create_pdo (array $config) {
    extract($config);
    
    $dsn = "mysql:host=$host;dbname=$database;charset=utf8";
    
    // Supressing stupid warning
    $pdo = @new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $pdo;
}

/**
 * Check wheter MySQL database exists
 * 
 * @param \PDO $pdo
 * @param string $database
 * @return bool
 */
function check_database (PDO $pdo, $database) {
    try {
        $pdo->exec("USE $database");
    }
    catch (PDOException $e) {
        throw new Exception('database.errors.database');
    }
}