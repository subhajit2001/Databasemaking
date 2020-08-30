<?php
//DataBase name
$database_name="sqlite:my_sqlite.sqlite";

//DataBase Connection
$db = new SQLite3($database_name);

//Create Table "students" into Database if not exists
$query = "CREATE TABLE IF NOT EXISTS students (name STRING,email STRING)";
$db->exec($query);

?>



