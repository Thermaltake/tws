<?

/* Кодировка */

if (is_dir(DIR_ADDITIONAL_DATA))
    if ($dh = opendir(DIR_ADDITIONAL_DATA)) {
       while (($file = readdir($dh)) !== false)
           if (filetype(DIR_ADDITIONAL_DATA.$file) == 'file')
               include (DIR_ADDITIONAL_DATA.$file);

       closedir($dh); }
unset ($file);
