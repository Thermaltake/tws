<?

/* Кодировка */

if (is_dir(DIR_MODULES))
    if ($dh = opendir(DIR_MODULES)) {
       while (($file = readdir($dh)) !== false)
           if (filetype(DIR_MODULES.$file) == 'file')
               include (DIR_MODULES.$file);

       closedir($dh); }
