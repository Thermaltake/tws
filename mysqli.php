<?

/* кодировка */

class sql extends mysqli {
    public function __construct($host, $user, $pass, $db) {
        parent::init();
        parent::real_connect($host, $user, $pass, $db);
    }
}


foreach ($connections as $key => $value)
    $db[$key] = new sql($connections[$key]['ip'], $connections[$key]['user'], $connections[$key]['pass'], $connections[$key]['db']);
