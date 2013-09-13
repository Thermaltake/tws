<?

/* Encoding / Кодировка */

$default_language = '8'; // Default russian id 8
$fail_log = true; // Log fail
$use_captcha = true; // Use captcha for reg and login
$check_reg_double_email = false; // Check in registration duble email
$check_ban_ip_reg = false; // Check ban ip in reg
$time_zone = ''; // Не скоро будет....
$use_caching_MySQL = true; // Caching data from MySQL
$cache_time[0] = '60'; // in sec, 0 - data character stat
$cache_time[1] = '1800'; // in sec, 1 - data world stat

$connections = array (

    "accounts" => array ( // IF id == accounts { realmd }
        "ip"   => "localhost", // IP
        "user" => "root", // Database username
        "pass" => "", // Database password
        "db"   => "realmd", // Database name realmd
        ),

    "site" => array ( // IF id == site { site }
        "ip"   => "localhost", // IP
        "user" => "root", // Database username
        "pass" => "", // Database password
        "db"   => "site", // Database name site
        ),

    "world" => array ( // IF id == site { site }
        "ip"   => "localhost", // IP
        "user" => "root", // Database username
        "pass" => "", // Database password
        "db"   => "mangos", // Database name world
        ),

    /* Configuration realms */
    "0" => array ( // id realm
        "ip"   => "localhost", // IP
        "user" => "root", // Database username
        "pass" => "", // Database password
        "db"   => "characters_1", // Database realmd
        "gp"   => "8085", // Game Port
        "rn"   => "WoW x1" // Realm name
        ),

    /*"1" => array ( // id realm
        "ip"   => "localhost", // IP
        "user" => "root", // Database username
        "pass" => "", // Database password
        "db"   => "characters_2", // Database realmd
        "gp"   => "8086", // Game Port
        "rn"   => "WoW x2" // Realm name
        ),

    "2" => array ( // id realm
        "ip"   => "localhost", // IP
        "user" => "root", // Database username
        "pass" => "", // Database password
        "db"   => "characters_3", // Database realmd
        "gp"   => "8087", // Game Port
        "rn"   => "WoW x3" // Realm name
        ),*/
);
