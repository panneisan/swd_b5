<?php

require "../core/base.php";
session_start();
require "../core/functions.php";


$posts = json_encode(getPost());// php arr to js obj
echo $posts;
