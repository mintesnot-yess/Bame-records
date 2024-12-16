<?php

class Database
{

    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=127.0.0.1;dbname=bame_records;port=3306;";
        $this->connection = new PDO($dsn, 'root', 'root', [

            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query, $params = [])
    {

        $prepare = $this->connection->prepare($query);
        $prepare->execute($params);
        return $prepare;
    }
}

//  $database = new Database;

//  if database is work show it work else show 

//  $names = $database->query('select * from artists');
// if ($names) {
// foreach ($names as $name) {
// echo "<li>" . $name['name'] . "</li>";
// }
// } else {
// echo "its no connect";
// }
 