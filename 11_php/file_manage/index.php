<?php

$randName = rand(1,500)."_folder";
//mkdir($randName);

$current = fopen("aa.txt","w");
fwrite($current,"san kyi tar");
fclose($current);