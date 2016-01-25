<?php
    require_once "../../includes/engine.php";
    if(!isset($_GET['MYSQL']['username'])  && !isset($_GET['MYSQL']['ipAddress']) && !isset($_GET['MYSQL']['page']) ){
        $complete = false;
    } else {
        $data = dbSanitize($_GET['MYSQL']);
        $complete = User::completed($data['username'],$data['ipAddress'],$data['page']);


        if(session::has('completePages')){
            $newSessPages = session::get('completePages');
        } else {
            $newSessPages = array();
        }

        $pageCompleted  = $data['page'];
        if(!in_array($pageCompleted, $newSessPages)){
            $newSessPages[] = $pageCompleted;
        }
        session::set('completePages', $newSessPages);
    }


    header('Content-Type: application/json');
    print json_encode($complete);
?>