<?

/* кодировка */

class sql extends mysqli {
    public function __construct($host, $user, $pass, $db) {
        parent::init();
        parent::real_connect($host, $user, $pass, $db);
    }
}
/* С функциямии mysqli еще не работал в php.. Будем учиться ;) */