<?php
    if(session::has('username')){
        $localvars  = localvars::getInstance();
        $user =  session::get('username');
        $localvars->set('user',$user);
        $completedModules = User::numCompleted(session::get('username'));

        switch ($completedModules) {
            case  0:
                $progress = "5%";
                break;
            case  1:
                $progress = "10%";
                break;
            case 2:
                $progress = "20%";
                break;
            case 3:
                $progress = "30%";
                break;
            case 4:
                $progress = "40%";
                break;
            case 5:
                $progress = "50%";
                break;
            case 6:
                $progress = "60%";
                break;
            case 7:
                $progress = "70%";
                break;
            case 8:
                $progress = "80%";
                break;
            case 9:
                $progress = "90%";
                break;
            default:
                $progress = "100%";
                break;
        }

        $localvars->set('progress', $progress);
?>


        <div class="progress">
            <h2> {local var="user"} </h2>
            <p> What would you like to do next? </p>

            <h2> Progress </h2>
            <div class="progress-bar">
                <span class="meter" style="width: {local var="progress"}">{local var="progress"}</span>
            </div>
        </div>

        <div class="nav-modules">
             <h2> Learning Modules </h2>
            <div class="btngroup mainlist">
                <a href="/setup" class="btn-primary">     Setup          </a>
                <a href="/routing" class="btn-primary">   Routing        </a>
                <a href="/views" class="btn-primary">     Views          </a>
                <a href="/databases" class="btn-primary"> Databases      </a>
                <a href="/logic" class="btn-primary">     Logic / Events </a>
            </div>

            <h2> Tutorial Series </h2>
            <div class="btngroup sublist">
                <a href="/baseKnowledge" class="btn-primary"> Pre-Framework Series </a>
                <a href="/engine" class="btn-primary"> Engine Series </a>
                <a href="/meteor" class="btn-primary"> Meteor Series </a>
            </div>
        </div>
<?php
    } else {
        print "<div class='warning-message'> You must submit the form and register your session in order to start these lessons.  Once completed this message will turn into navigation. If you have already done this, try <a href='/login'> logging in </a>. </div>";
    }
?>