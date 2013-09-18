<?

/* Кодировка */

if (is_dir(DIR_THEME.THEME_NAME))
{
    if ($dh = opendir(DIR_THEME.THEME_NAME))
    {
        while (($file = readdir($dh)) !== false)
        {
            if (filetype(DIR_THEME.THEME_NAME.$file) == 'file')
            {
                include (DIR_THEME.THEME_NAME.$file);
            }
        }
    }
    closedir($dh);
}
else if (is_dir(DIR_THEME."default"))
{
    if ($dh = opendir(DIR_THEME."default"))
    {
        while (($file = readdir($dh)) !== false)
        {
            if (filetype(DIR_THEME."default".$file) == 'file')
            {
                include (DIR_THEME."default".$file);
            }
        }
    }
    closedir($dh);
}
