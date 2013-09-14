<?

/* Кодировка */

class Cookie {
   var $lang = 0; }

class IData {
   var $url = 0;
   var $dir = 0;
   var $realms = 0; }


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
    global $co, $cd, $uc;
    if (file_exists("components/$dc/$co") && file_exists("components/$dc/$cd"))
    {
        include ("components/$dc/$co");
        include ("components/$dc/$cd");
    }
    else if (file_exists("components/404/$co"))
        include ("components/404/$co");

    $uc = true;
}