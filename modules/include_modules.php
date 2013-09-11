<?

/* Кодировка */

/* Это пока будет для модулей, которые как то подписанны и добавлены */

if ($p[1])
{
    switch ($p[1])
    {
        case "home": OpenModule ("modules/m_home"); break; // Home page
        case "stat": OpenModule ("modules/m_stat"); break; // stat page
        case "reg": OpenModule ("modules/m_reg"); break; // registration page
        case "ch_info": OpenModule ("modules/m_ch_info"); break; // Characters info page
        case "t_info": OpenModule ("modules/m_t_info"); break; // Arena team info page
        case "g_info": OpenModule ("modules/m_g_info"); break; // guild info page
        default: OpenModule ("modules/m_404"); // Home page
    }
}
else
    OpenModule ("modules/m_home");

/* Это будет для модулей, которые не были ни где добавлены. Будет идти поиск папки с модулем. */