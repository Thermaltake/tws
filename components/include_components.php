<?

/* Кодировка */

if ($p[1])
{
    switch ($p[1])
    {
        case "home": OpenComponent ("home"); break; // Home page
        case "stat": OpenComponent ("stat"); break; // stat page
        case "reg": OpenComponent ("reg"); break; // registration page
        case "ch_info": OpenComponent ("ch_info"); break; // Characters info page
        case "t_info": OpenComponent ("t_info"); break; // Arena team info page
        case "g_info": OpenComponent ("g_info"); break; // guild info page
        default: break; // Home page
    }

    if ($um == false)
        OpenComponent ($p[1]);
}
else
    OpenComponent ("home");