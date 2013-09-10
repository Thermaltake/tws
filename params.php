<?

/* Кодировка UTF8 / Encoding UTF8 */
$i = 0;

$uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
while ($uri[$i])
{
    $i++;
    $p[$i];
}

$cookie->lang = ((int)$_COOKIE['lang'] ? (int)$_COOKIE['lang'] : 8); // Set default lang id = 8 - Russian
