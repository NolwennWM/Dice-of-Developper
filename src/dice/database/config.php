<?php 
return 
[
    "host"=>$_ENV["DB_HOST"],
    "port"=>3306,
    "database"=> $_ENV["DB_NAME"],
    "username_admin"=> $_ENV["DB_USER_ADMIN"],
    "password_admin"=> $_ENV["DB_PWD_ADMIN"],
    "username_guest"=> $_ENV["DB_USER_GUEST"],
    "password_guest"=> $_ENV["DB_PWD_GUEST"],
    "charset" => "utf8mb4",
    "options" => 
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]
];