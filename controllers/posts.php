<?php

require_once('models/posts.php');
require_once('models/comments.php');

function getPostsListController(){
    $query = getPosts();

    require ("views/posts.php");
}