<?php

define('CAR', 1);

if($_SERVER['SERVER_PORT'] == '2777'){
    include_once('./Controller/admin.php');
}else {
    include_once('./Controller/enduser.php');
}