<?

/* Кодировка */
$start_array = explode(" ",microtime());
$st = $start_array[1] + $start_array[0];


include ("config.php");
include ("core.php");
include ("cache_clean.php");
include ("start_classes.php");
include ("read_cookie.php");
include ("lang.php");
include ("params.php");
include ("additional_data.php");
include ("mysqli.php");
include ("include_modules.php");
include ("components/include_components.php");
include ("themes/include_theme.php");


$start_array = explode(" ",microtime());
echo "<!--
".(($start_array[1] + $start_array[0])-$st)."
".memory_get_peak_usage()."
-->";
