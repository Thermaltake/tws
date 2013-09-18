<?

/* Кодировка */

class Cookie {
   var $lang = 0; }

class IData {
   var $url = 0;
   var $dir = 0;
   var $realms = 0;
   var $fthemes = 0; }


class cache {}

function ScreeningText($text)
{
   $text = str_replace( "&"				, "&amp;"         , $text );
   $text = str_replace( ">"				, "&gt;"          , $text );
   $text = str_replace( "<"				, "&lt;"          , $text );
   $text = str_replace( "\\\\"	 	, "&#092;"        , $text );
   $text = str_replace( "\'"			, "&#39;"         , $text );
   $text = str_replace( "\""			, "&quot;"        , $text );
   $text = str_replace( '"'				, "&quot;"        , $text );
   $text = str_replace( "$"				, "&#036;"        , $text );
   $text = str_replace( "!"				, "&#33;"         , $text );
   $text = str_replace( "'"				, "&#39;"         , $text );
   $text = str_replace( "\&#39;"  , "&#39;"         , $text );
   $text = str_replace( "\&quot;" , "&quot;"        , $text );
   return $text;
}

function FileSaveText($code, $filename = 'file.txt', $newLine = true, $delete = false)
{
   if ($delete == true)
      unlink($filename);
   $f = fopen($filename, "a");
   fwrite($f, $code);
   if ($newLine == true)
      fwrite($f, "\n");
   fclose($f);
}

function OpenComponent($dc)
{
    global $uc;
    if (file_exists(DIR_COMPONENTS.$dc."/".FILE_CO))
    {
        include (DIR_COMPONENTS.$dc."/".FILE_CO);

        if (file_exists(DIR_COMPONENTS.$dc."/".FILE_CD))
            include (DIR_COMPONENTS.$dc."/".FILE_CD);
    }
    else if (file_exists(DIR_COMPONENTS."404/".FILE_CO))
        include (DIR_COMPONENTS."404/".FILE_CO);

    $uc = true;
}

function IncludeFilesFromArrayASC ($array)
{
    asort ($array);
    foreach ($array as $key)
        include ($key);
}
