<?

/* кодировка */

class sql extends mysqli {
    public function __construct($host, $user, $pass, $db) {
        parent::init();
        parent::real_connect($host, $user, $pass, $db);
    }
}


while ($connections[$i->realms])
{
   $con[$i->realms] = new sql($connections[$i->realms]['ip'], $connections[$i->realms]['user'], $connections[$i->realms]['pass'], $connections[$i->realms]['db']);
   $i->realms++;
}
/* С функциямии mysqli еще не работал в php.. Будем учиться ;) */