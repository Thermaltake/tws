<?

/* Кодировка */

$dir[0] = "cache_param/caracters";
$dir[1] = "cache_param/world";

foreach ($dir as $key => $value)
{
    if (is_dir($value))
        if ($dh = opendir($value)) {
           while (($file = readdir($dh)) !== false)
               if (filectime($value.$file) < time()-$cache_time[$key] && filetype($value.$file) == 'file')
                   unlink ($value.$file);

           closedir($dh); }
}