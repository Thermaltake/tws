<?
$connections_wow_db = array (
    "accounts" => array ( // IF id == accounts { realmd }
        "ip"   => "127.0.0.1", // IP
        "user" => "root", // Database username
        "pass" => "", // Database password
        "db"   => "realmd", // Database name realmd
        ),

    "world" => array ( // IF id == site { site }
        "ip"   => "127.0.0.1", // IP
        "user" => "root", // Database username
        "pass" => "", // Database password
        "db"   => "mangos", // Database name world
        ),

    "0" => array ( // id realm
        "ip"   => "127.0.0.1", // IP
        "user" => "root", // Database username
        "pass" => "", // Database password
        "db"   => "characters_1", // Database realmd
        "gp"   => "8085", // Game Port
        "rn"   => "WoW x1" // Realm name
        ),

    "1" => array ( // id realm
        "ip"   => "127.0.0.1", // IP
        "user" => "root", // Database username
        "pass" => "", // Database password
        "db"   => "characters_2", // Database realmd
        "gp"   => "8086", // Game Port
        "rn"   => "WoW x2" // Realm name
        ),

    "2" => array ( // id realm
        "ip"   => "127.0.0.1", // IP
        "user" => "root", // Database username
        "pass" => "", // Database password
        "db"   => "characters_3", // Database realmd
        "gp"   => "8087", // Game Port
        "rn"   => "WoW x3" // Realm name
        ),
);

$connections = array_merge($connections, $connections_wow_db);