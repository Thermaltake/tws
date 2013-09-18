<?

/* Кодировка */

if (is_dir(DIR_THEME.THEME_NAME)) {
    if ($dh = opendir(DIR_THEME.THEME_NAME)) {
        while (($file = readdir($dh)) !== false) {
        echo substr(strrchr($fileName, '.'), 1);
            if (filetype(DIR_THEME.THEME_NAME.$file) == 'file' && substr(strrchr(DIR_THEME.THEME_NAME.$file, '.'), 1) == 'php') {
                $array[] = DIR_THEME.THEME_NAME.$file;
                $i->fthemes++; }
        }

        if ($i->fthemes > 0)
            IncludeFilesFromArrayASC ($array);
    }
    closedir($dh);
}
else if (is_dir(DIR_THEME."default")) {
    if ($dh = opendir(DIR_THEME."default")) {
        while (($file = readdir($dh)) !== false) {
            if (filetype(DIR_THEME."default".$file) == 'file' && substr(strrchr(DIR_THEME."default".$file, '.'), 1) == 'php') {
                $array[] = DIR_THEME."default".$file;
                $i->fthemes++; }
        }

        if ($i->fthemes > 0)
            IncludeFilesFromArrayASC ($array);
    }
    closedir($dh);
}