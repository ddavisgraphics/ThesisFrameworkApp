<?php
    require_once "../includes/engine.php";

    if(!session::has('username')){
        header('Location:/?noSession');
    }

    $localvars->set('user', htmlSanitize(session::get('username')));

    templates::display('header');
?>
<section class="wrapper">
    <div class="container">
        <div class="row">
            <div class="picture">
                <img src="/includes/img/computer.png" alt="computer stuff" />
            </div>
            <div class="intro">
                <h2> Setting Up </h2>
                <p> Hello <strong> {local var="user"} </strong>! In the next series of lessons we are going to talk about 2 different frameworks that will shed light on how to create some simple web applications.  Each section will share something common to web applications and then showcase how to use in each scenario.  At the end of each page will be a quick survey, form, and sometimes code box that will allow get your feedback of each framework and how your perception of the framework. </p>

                <h3> Jump To </h3>
                <a href="#lessons" class="btn-primary"> Lessons </a>
                <a href="#survey" class="btn-primary"> Survey  </a>
            </div>
        </div>

        <div id="lessons" class="row">
            <div class="meteor">
                <div class="imgHeader">
                    <img class="meteorLogo" src="/includes/img/meteor.png" />
                </div>

                <h3 class="element-invisible"> Meteor JS </h3>

                <p>
                    Meteor is a full stack JavaScript framework that focuses on rapid development of asynchronus web applications.  It is an open source framework dedicated to providing users with good documentation and the ability to create products quickly and simply.  It is very easy to install and run with many of the same principles of the MEAN Stack.
                </p>

                <div class="code-sample">
                    <h4> <i class="fa fa-apple"></i> Mac / <i class="fa fa-linux"></i> Linux Install </h3>
                    <p> To install linux for these versions all you have to do is run the command located below.  To do this open a terminal window and run past in the command.  The terminal will display a message when you have completed.

                    <?php recurseInsert('codeSnippets/meteorSetup.php','php') ?>

                    <h4> <i class="fa fa-windows"></i> Windows System </h3>

                    <p> The windows install is equally simple, by following the link below you will get an installer that will setup and begin to run the items you need to install meteor on a windows platform.  </p>

                    <a href="https://install.meteor.com/windows" class="btn" target="_blank" style="target-new: tab;"> <i class="fa fa-windows"></i> Windows Installer </a>

                    <h4> Starting a Project </h4>

                    <p> After Installing simply make a new directory, open it in a terminal or command prompt, and type meteor.  This will install all needed files and a simple demo app.  </p>

                    <h4> Want to watch a video demonstration?</h4>

                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/lPxMseQknD0?list=PLTBgNwvH0GyzKwaOMM6elwTvZnQ2fXahW" frameborder="0" allowfullscreen></iframe>
                    </div>

                </div>
            </div>

            <div class="engine">
                <div class="imgHeader">
                    <img class="engineLogo" src="/includes/img/engine.png" />
                </div>
                <h3 class="element-invisible"> EngineAPI </h3>

                <p>
                   EngineAPI is a traditional Linux Apache PHP and MYSQL web stack that focuses on rapid development and security.  It is an open source framework created by West Virginia Unviversity Library to handle a variety of applications that will serve anywhere from 4,000 - 16,000 people on any given day.
                </p>

                    <h5> Step 1 - Install Virtal Box / Vagrant </h5>

                        <a href="https://www.vagrantup.com/" target="_blank" style="target-new: tab;" class="btn"> Vagrant Install </a>

                        <a href="https://www.vagrantup.com/" target="_blank" style="target-new: tab;" class="btn"> Virtual Box Install </a>

                    <h5> Step 2 - Download MVCEngineStart  </h5>
                      <a href="https://github.com/ddavisgraphics/MVCEngineStart" class="btn"> <i class="fa fa-github" target="_blank" style="target-new: tab;"></i> MVCEngine Github Repo </a>

                    <h5> Step 3 - Modify Vagrant File and Bootstrap File </h5>

                    <p> First Modify the Variables in the Bootstrap.sh file.  In the example below I'm using the parts you should change to have to look like [changethis]. </p>

                    <?php recurseInsert('codeSnippets/bootstrapDemo.php','php') ?>

                    <p> Then modify the Vagrant File </p>

                    <?php recurseInsert('codeSnippets/vagrantDemo.php','php') ?>

                    <p> Open up a terminal window, or command line prompt and navigate to your directory.  You can drag the folder into your terminal to open the folder in the command prompt.  Then type, vagrant up.  This will start your virutal machine running in your browser on localhost:3000.  For the time being you will get a blank screen.  </p>

                    <h4> Want to watch a video demonstration?</h4>

                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/U9h2Yrb4n4c?list=PLTBgNwvH0GyxEgi9_BOOa-38ZSGqoAaaS" frameborder="0" allowfullscreen></iframe>
                    </div>
            </div>
        </div>

    </div>
</section>

<section id="survey" class="survey wrapper">
    <div class="container">
             <?php recurseInsert('survey/index.php','php') ?>
    </div>
</section>

<?php
    templates::display('footer');
?>