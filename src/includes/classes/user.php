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
            $email      = dbSanitize($data['email']);

            $sqlArray   = array($user,$ipAddr,$occupation,$html,$job,$degree);
            $sqlResult  = $db->query($sql, $sqlArray);

            if($sqlResult->error()){
                return false;
            } else {
                return true;
            }
        }

        public static function performChecks(){
            if(session::has('username')){
                self::giftCheck(session::get('username'));
            }
            self::checkSession();
        }

        public static function checkSession(){
            $engine    = EngineAPI::singleton();
            $localvars = localvars::getInstance();

            if(!session::has('username')){
                header('Location:/login');
            }

            return true;
        }

        public static function giftCheck($username){
            $engine    = EngineAPI::singleton();
            $localvars = localvars::getInstance();

            $completed = self::numCompleted($username);
            if($completed >= 4){
                $localvars->set('giftCheck', "<div class='giftCheck successMessage hidden'> You are eligible to register for your gift card now! Your chance level is {$completed}.  <a href=
                    '/giftCardReg'> Click here to register now! </a> </div>");
            } else {
                $localvars->set('giftCheck', "<div class='giftCheck warningMessage hidden'> Complete more lessons to get your name registered for a gift card.  You chance level increases with more lessons you complete. </div>");
            }
        }

        public static function checkUser($username,$email){
            $engine    = EngineAPI::singleton();
            $localvars = localvars::getInstance();
            $db        = db::get($localvars->get('dbConnectionName'));

            $sql       = "SELECT * FROM `session` WHERE `username`=? AND email=?";
            $sqlArray  = array($username,$email);

            $sqlResult = $db->query($sql, $sqlArray);

            if($sqlResult->error()){
                return false;
            } elseif($sqlResult->rowCount() < 1) {
                return false;
            } else {
                return true;
            }
        }

        public static function completed($user,$ip,$section){
            $engine    = EngineAPI::singleton();
            $localvars = localvars::getInstance();
            $db        = db::get($localvars->get('dbConnectionName'));

            $sql       = "INSERT INTO completed(username,ipAddr,numCompleted,section) VALUES(?,?,?,?);";

            $sqlArray = array($user,$ip,'1',$section);
            $sqlResult = $db->query($sql, $sqlArray);

            if($sqlResult->error()){
                return false;
            } else {
                return true;
            }
        }

        public static function numCompleted($user){
            $engine    = EngineAPI::singleton();
            $localvars = localvars::getInstance();
            $db        = db::get($localvars->get('dbConnectionName'));
            $sql       = "SELECT * FROM `completed` WHERE username=?";
            $sqlArray  = array(dbSanitize($user));
            $sqlResult = $db->query($sql, $sqlArray);

            if($sqlResult->error()){
                return false;
            } else {
                return $sqlResult->rowCount();
            }
        }
    }
?>
