<?php
    require_once "../includes/engine.php";
    templates::display('header');

    if(isset($_POST['MYSQL']) && !session::has('username')){
        $data     = dbSanitize($_POST['MYSQL']);
        $username = $data['username'];
        $email    = $data['email'];

        if(User::checkUser($username, $email) === true){
            $options['timeout'] = strtotime('+2 years' , time());
            session::set('username', $username, $options);
            header('Location:/welcomeback');
        } else {
            header('Location:/login?failed');
        }
    }

    if(isset($_GET['MYSQL']['failed'])){
        $localvars->set('feedback', '<div class="error-message"> Login failed please check your password, or <a href="/"> register your account. </a> </div>');
    }

?>
<section class="wrapper">
    <div class="container">
        <form class="registerUser" action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="feedback">
                {local var="feedback"}
            </div>
            {csrf}
            <div class='username form-group'>
                <label for="username"> Username </label>
                <input type="text" placeholder="username" name="username" />
            </div>

            <div class='username form-group'>
                <label for="email"> Email
                    <div class="micro-text"> Validates your username login to start a new session. </div>
                </label>
                <input type="email" placeholder="jonSnow@ghost.com" name="email" />
            </div>


            <div class="form-group submit">
                <input type="submit" value="Login" >
            </div>
        </form>
    </div>
</section>

<?php
    templates::display('footer');
?>


