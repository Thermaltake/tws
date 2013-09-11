<?

/* Кодировка */

if ($p[1])
{
    switch ($p[1])
    {
        case "home": OpenModule ("home"); break; // Home page
        case "stat": OpenModule ("stat"); break; // stat page
        case "reg": OpenModule ("reg"); break; // registration page
        case "ch_info": OpenModule ("ch_info"); break; // Characters info page
        case "t_info": OpenModule ("t_info"); break; // Arena team info page
        case "g_info": OpenModule ("g_info"); break; // guild info page
        default: break; // Home page
    }

    if ($um == false)
        OpenModule ($p[1]);
}
else
    OpenModule ("home");