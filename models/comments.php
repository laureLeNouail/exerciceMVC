<?php

require_once('database.php');

function getComments($id){
    $dbh=initDatabse();
    $sth=$dbh->query("SELECT * FROM comments WHERE post_id=$id");
    $sth->execute();

    $rows = $sth->fetchAll();
    return $rows;
}


?>
