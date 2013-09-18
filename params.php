<?

/* Кодировка UTF8 / Encoding UTF8 */
$co = 'co.php'; // Component Open
$cd = 'cd.php'; // Component display (html code)
$uc = false; // Не менять!
define ("DIR_ADDITIONAL_DATA", "additional_data/");


$uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
while ($uri[$i->url])
{
    $i->url++;
    $p[$i->url] = $uri[$i->url-1];
}