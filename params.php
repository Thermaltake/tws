<?

/* Кодировка UTF8 / Encoding UTF8 */
$co = 'co.php'; // Component Open
$cd = 'cd.php'; // Component display (html code)
$uc = false; // Не менять!
define ("DIR_ADDITIONAL_DATA", "additional_data/");
define ("DIR_COMPONENTS",      "components/");
define ("DIR_MODULES",         "modules/");

define ("FILE_CO", "co.php");
define ("FILE_CD", "cd.php");


$uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
while ($uri[$i->url])
{
    $i->url++;
    $p[$i->url] = $uri[$i->url-1];
}