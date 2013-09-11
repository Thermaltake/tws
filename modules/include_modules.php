<?

/* Кодировка */

/* Это пока будет для модулей, которые как то подписанны и добавлены */

switch ($p[1])
{
    case "home": include ("modules/m_home/$mo"); break; // Home page
    case "stat": include ("modules/m_stat/$mo"); break; // stat page
    case "reg": include ("modules/m_reg/$mo"); break; // registration page
    case "ch_info": include ("modules/m_ch_info/$mo"); break; // Characters info page
    case "t_info": include ("modules/m_t_info/$mo"); break; // Arena team info page
    case "g_info": include ("modules/m_g_info/$mo"); break; // guild info page
    default "home": include ("modules/m_home/home.php"); // Home page
}

/* Это будет для модулей, которые не были ни где добавлены. Будет идти поиск папки с модулем. */