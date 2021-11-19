<?php

require_once('database.php');

function getPosts(){
    $dbh=initDatabse();
    $sth=$dbh->query('SELECT * FROM posts');
    $sth->execute();

    $rows = $sth->fetchAll();
    return($rows);
}

?>