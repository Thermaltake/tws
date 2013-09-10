<?

/* Кодировка */

class Cookie {
   var $lang = 0; }


function ScreeningText ($text)
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
