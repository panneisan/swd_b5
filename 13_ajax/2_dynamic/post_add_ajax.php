<?php

require "core/base.php";
require 'core/functions.php';

if(postCreate()){

    echo  success("Aung p Aung p Aung p");

}else{

    echo  error(500,"Internal Serve Error");

}

