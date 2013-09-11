<?

/* Кодировка */

class Cookie {
   var $lang = 0; }


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

function OpenModule($dm)
{
    global $mo, $md;
    if (file_exists("$dm/$mo") && file_exists("$dm/$md"))
    {
        include ("$dm/$mo");
        include ("$dm/$md");
    }
}