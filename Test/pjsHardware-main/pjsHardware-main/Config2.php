<?php

// Malik

/* SQLTools connection configuration */
$sqlToolsConfig = [
    "mysqlOptions" => [
        "authProtocol" => "default",
        "enableSsl" => "Disabled"
    ],
    "previewLimit" => 50,
    "server" => "localhost",
    "port" => 3306,
    "driver" => "MySQL",
    "name" => "JAMS",
    "database" => "JAMS",
    "username" => "sqluser",
    "password" => "Pa$$w0rd"
];

/* Attempt to connect to MySQL database using SQLTools configuration */
$link = mysqli_connect(
    $sqlToolsConfig["server"],
    $sqlToolsConfig["username"],
    $sqlToolsConfig["password"],
    $sqlToolsConfig["database"],
    $sqlToolsConfig["port"]
);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
