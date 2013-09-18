<?

/* Encoding / Кодировка */

$default_language = '8'; // Default russian id 8
$fail_log = true; // Log fail
$use_captcha = true; // Use captcha for reg and login
$check_reg_double_email = false; // Check in registration duble email
$check_ban_ip_reg = false; // Check ban ip in reg
$time_zone = ''; // Не скоро будет....
$use_caching_MySQL = true; // Caching data from MySQL


$cache->dir[0] = "cache_param/caracters";
$cache->dir[1] = "cache_param/world";

$cache->time[0] = '60'; // in sec, 0 - data character stat
$cache->time[1] = '1800'; // in sec, 1 - data world stat

$connections = array (
    "accounts" => array ( // IF id == accounts { realmd }
        "ip"   => "127.0.0.1", // IP
        "user" => "root", // Database username
        "pass" => "", // Database password
        "db"   => "realmd", // Database name realmd
        ),

    "site" => array ( // IF id == site { site }
        "ip"   => "127.0.0.1", // IP
        "user" => "root", // Database username
        "pass" => "", // Database password
        "db"   => "site", // Database name site
        ),

    "world" => array ( // IF id == site { site }
        "ip"   => "127.0.0.1", // IP
        "user" => "root", // Database username
        "pass" => "", // Database password
        "db"   => "mangos", // Database name world
        ),
);
