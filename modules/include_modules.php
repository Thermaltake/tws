<?

/* Кодировка */

if ($p[1])
{
    switch ($p[1])
    {
        case "home": OpenModule ("modules/home"); break; // Home page
        case "stat": OpenModule ("modules/stat"); break; // stat page
        case "reg": OpenModule ("modules/reg"); break; // registration page
        case "ch_info": OpenModule ("modules/ch_info"); break; // Characters info page
        case "t_info": OpenModule ("modules/t_info"); break; // Arena team info page
        case "g_info": OpenModule ("modules/g_info"); break; // guild info page
        default: OpenModule ("modules/404"); // Home page
    }

    if ($um == false)
        OpenModule ("modules/".$p[1]);
}
else
    OpenModule ("modules/home");