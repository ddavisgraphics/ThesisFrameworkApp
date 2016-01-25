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

    if(isset($_SESSION['data']['username'])){
        header('Location:/welcomeback');
    }

?>
<section class="wrapper">
    <div class="container">
        <h2> Get Started </h2>

        <p> This app is geared towards teaching concepts to designers that will help them to better understand programming concepts using 2 different frameworks.  These frameworks will allow the users to quickly and efficienty learn concepts to focus on the real problems that they are trying to solve. </p>

        <p class="micro-text"> This application uses cookies as a local storage system and to validate that you have submitted the basic information. Please make sure you have cookies enabled. </p>

        <form class="registerUser" action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            {csrf}
            <div class='username form-group'>
                <label for="username"> Username </label>
                <input type="text" placeholder="username" name="username" />
            </div>

            <div class='username form-group'>
                <label for="email"> Valid Email
                    <div class="micro-text"> This is for giftcard and session logins only </div>
                </label>
                <input type="email" placeholder="jonSnow@ghost.com" name="email" />
            </div>

            <div class="occupation form-group">
                <label for="occupation">
                    What is your Occupation?<br>
                    <span class="micro-text"> ( current or desired )</span>
                </label>

                <div class="customSelect">
                    <select class="occupationSelect" name="occupation">
                        <option value="null"> Select an Occupation </option>
                        <option value="Graphic Design"> Graphic Design </option>
                        <option value="Web Design"> Web Design </option>
                        <option value="Multimedia or Games"> Multimedia or Games </option>
                        <option value="other"> Other </option>
                    </select>
                </div>

                <div class="other-option hidden">
                    <input type="text" placeholder="what ocupation?" name="other-occupation"/>
                </div>
            </div>

            <div class="form-group">
                <label for="html-knowledge"> Do you know HTML and CSS?  </label>
                <select class="html-knowledge" name="html-knowledge">
                    <option value="null"> Select an Option </option>
                    <option value="1"> Yes </option>
                    <option value="0"> No </option>
                </select>
            </div>

            <div class="preference form-group">
                <label for="jobPreference"> What industry would you like to work? </label>
                <a href="javascript:void(0);" class="btn" data-job="web"> Web </a>
                <a href="javascript:void(0);" class="btn" data-job="print"> Print </a>
                <a href="javascript:void(0);" class="btn" data-job="multimedia"> Multimedia / Digital </a>
                <a href="javascript:void(0);" class="btn" data-job="no preference"> No Preference </a>
                <input type="hidden" class="hidden" value="" name="jobPreference" id="inputJob" />
            </div>

            <div class="form-group">
                <label for="degree">
                    Do you, or will you graduate with design degree?
                </label>
                <select class="degree" name="degree">
                    <option value="null"> Select an Option </option>
                    <option value="1"> Yes </option>
                    <option value="0"> No </option>
                </select>
            </div>

            <div class="form-group submit">
                <input type="submit" value="Start Lessons" >
            </div>

        </form>

    </div>
</section>

<?php

    templates::display('footer');
?>