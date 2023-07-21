<?php

$flag="ctfstu{e98f73c7-e4f5-4c69-9b8d-c2a386e25aac}";
if($_SERVER['REMOTE_ADDR']=='127.0.0.1'){
    echo $flag;
}
else{
    die("非本地用户禁止访问");
}

?>