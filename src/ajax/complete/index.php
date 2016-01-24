<?php
    require_once "../../includes/engine.php";
    if(!isset($_GET['MYSQL']['username'])  && !isset($_GET['MYSQL']['ipAddress']) && !isset($_GET['MYSQL']['page']) ){
        $complete = false;
    } else {
        $data = dbSanitize($_GET['MYSQL']);
        $complete = User::completed($data['username'],$data['ipAddress'],$data['page']);
    }


    header('Content-Type: application/json');
    print json_encode($complete);
?>