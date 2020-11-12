<?
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('test.db');
    }
}

$db = new MyDB();

  $res=$db->exec("CREATE TABLE IF NOT EXISTS Products (p_id INTEGER PRIMARY KEY

  AUTOINCREMENT,p_name TEXT NOT NULL,price REAL);");

  

  $db->close();

?>
