<?

/* кодировка */

class sql extends mysqli {
    public function __construct($host, $user, $pass, $db) {
        parent::init();
        parent::real_connect($host, $user, $pass, $db);
    }
}

$con['accounts'] = new sql($connections['accounts']['ip'], $connections['accounts']['user'], $connections['accounts']['pass'], $connections['accounts']['db']);
$con['site'] = new sql($connections['site']['ip'], $connections['site']['user'], $connections['site']['pass'], $connections['site']['db']);
$con['world'] = new sql($connections['world']['ip'], $connections['world']['user'], $connections['world']['pass'], $connections['world']['db']);

while ($connections[$i->realms])
{
   $con[$i->realms] = new sql($connections[$i->realms]['ip'], $connections[$i->realms]['user'], $connections[$i->realms]['pass'], $connections[$i->realms]['db']);
   $i->realms++;
}
/* С функциямии mysqli еще не работал в php.. Будем учиться ;) */