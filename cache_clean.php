<?

/* Кодировка */


foreach ($cache->dir as $key => $value)
{
    if (is_dir($value))
        if ($dh = opendir($value)) {
           while (($file = readdir($dh)) !== false)
               if (filectime($value.$file) < time()-$cache->time[$key] && filetype($value.$file) == 'file')
                   unlink ($value.$file);

           closedir($dh); }
}