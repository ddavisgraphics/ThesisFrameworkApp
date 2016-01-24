<?php
    require_once "includes/engine.php";

    if(isset($_POST['MYSQL']) && !isset($_SESSION['data']['username'])){
        $insertSession = User::insertSession($_POST['MYSQL']);

        if(isset($insertSession) && $insertSession !== false){
            $username = dbSanitize($_POST['MYSQL']['username']);
            $options['timeout'] = strtotime('+2 years' , time());
            session::set('username', $username, $options);

            if(isset($_SESSION['data']['username'])){
                header('Location:/setup');
            }
        }
    }

    templates::display('header');

    if(!isset($_SESSION['data']['username'])){
        recurseInsert('registerForm.php', 'php');
    } else {
        recurseInsert('generalFeedback.php', 'php');
    }
?>


<?php
    templates::display('footer');
?>