<?

/* кодировка */

$cookie->lang = ((int)$_COOKIE['lang'] ? (int)$_COOKIE['lang'] : 8); // Set default lang id = 8 - Russian
$cookie->hash = ScreeningText ($_COOKIE['hash']);