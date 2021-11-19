<?php

require_once('models/comments.php');


 
function getCommentsOfPostController($postId){
    $query = getComments($postId);
    
    require ("views/comments.php");

}
