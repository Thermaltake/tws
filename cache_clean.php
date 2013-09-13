<?

/* Кодировка */

$dir[0] = "cache_param/caracters";
$dir[1] = "cache_param/world";

while ($dir[$i->dir])
{
    if (is_dir($dir[$i->dir]))
        if ($dh = opendir($dir[$i->dir])) {
           while (($file = readdir($dh)) !== false)
               if (filectime($dir[$i->dir].$file) < time()-$cache_time[$i->dir] && filetype($dir[$i->dir] . $file) == 'file')
                   unlink ($dir[$i->dir].$file);

           closedir($dh); }
    $i->dir++;
}
