<?php
    class User {
        public static function insertSession($data){
            $engine    = EngineAPI::singleton();
            $localvars = localvars::getInstance();
            $db        = db::get($localvars->get('dbConnectionName'));

            $sql       = "INSERT INTO session(username,ipAddr,occupation,html,job,degree) VALUES(?,?,?,?,?,?);";

            $user       = dbSanitize($data['username']);
            $occupation = dbSanitize($data['occupation']);

            if($occupation == 'other' && !isnull($data['other-occupation'])){
                $occupation = dbSanitize($data['other-occupation']);
            }

            $ipAddr     = $_SERVER['REMOTE_ADDR'];
            $html       = dbSanitize($data['html-knowledge']);
            $job        = dbSanitize($data['jobPreference']);
            $degree     = dbSanitize($data['degree']);

            $sqlArray   = array($user,$ipAddr,$occupation,$html,$job,$degree);
            $sqlResult  = $db->query($sql, $sqlArray);

            if($sqlResult->error()){
                return false;
            } else {
                return true;
            }
        }
    }
?>