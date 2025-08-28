<?php 
/** Database configuration file
 * Returns an associative array with database connection parameters
 */
return [
    "host" => $_ENV["DB_HOST"],
    "port" => 3306,
    "database" => $_ENV["DB_NAME"],
    "username_admin" => $_ENV["DB_USER_ADMIN"],
    "password_admin" => $_ENV["MARIADB_ROOT_PASSWORD"],
    "username_guest" => $_ENV["MARIADB_USER"],
    "password_guest" => $_ENV["MARIADB_PASSWORD"],
    "charset" => "utf8mb4",
    "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]
    ];