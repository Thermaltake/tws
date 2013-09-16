<?

/* Кодировка */

if (is_dir($add_data))
    if ($dh = opendir($add_data)) {
       while (($file = readdir($dh)) !== false)
           if (filetype($add_data.$file) == 'file')
               include ($value.$file);

       closedir($dh); }
