<?php
    require_once "../includes/engine.php";

    if(!session::has('username')){
        header('Location:/?noSession');
    }

    $localvars->set('user', htmlSanitize(session::get('username')));

    templates::display('header');
?>
<section class="routing wrapper">
    <div class="container">
        <div class="row">
            <div class="picture">
                <img src="/includes/img/mvc.png" alt="computer stuff" />
            </div>
            <div class="intro">
                <h2> Routing </h2>
                <p> Routing is the way that many MVC applications work to seperate data and logic.  Routing a URL allows you to create "pages" that have certain information passed to them by code, models, or data and still allow the URL to be a "clean" and easy to type.  This allows the user to remember and see URL's that aren't clouded by non-readable characters or query strings.   </p>
            </div>
        </div>
    </div>
</section>
<section class="wrapper section secondary">
    <div class="container">
        <div class="row">
            <div class="routing databaseExample">
                <h2> Packages / Modules </h2>
                <p>
                    In both Meteor and EngineAPI routing is not a native feature.  So we need to be able to leveage different packages or modules that come with the frameworks.  In Meteor that requires adding a package through atmosphere, or by adding a line in the JSON for an NPM library.  In EngineAPI that means simply knowing the module name and instantating the class.
                </p>
            </div>

            <div class="routing databaseExample">
                <h2> Jump To </h2>
                <a href="#lessons" class="btn-primary"> Lessons </a>
                <a href="#survey" class="btn-primary"> Survey  </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div id="lessons" class="row">
            <div class="meteor">
                <div class="imgHeader">
                    <img class="meteorLogo" src="/includes/img/meteor.png" />
                </div>

                <h3 class="element-invisible"> Meteor JS </h3>

                <div class="code-sample">
                    <h4> Iron Router Package </h4>
                    <p> To get started with routing in meteor we first need to install the iron router component.  There is documentation on Meteors website and in the github repo for Iron Router.  While you can do some complex things, when starting with an application its best to go bare bones first, then progressively get fancy. </p>

                    <?php recurseInsert('codeSnippets/ironRouter.php','php') ?>

                    <h4> Creating Routes </h4>
                    <p> After adding the two packages we have created a way for the routing to work and a way to get better search engine optimization for our application, but we haven't created any routes.  The following code showcases how we would create some simple routes in Meteor.
                    </p>

                    <?php recurseInsert('codeSnippets/routesJS.php','php') ?>

                    <h4> Want to Watch the Video?  </h4>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/EcIWc2qpbWQ?list=PLTBgNwvH0GyzKwaOMM6elwTvZnQ2fXahW" frameborder="0" allowfullscreen></iframe>
                    </div>


                </div>


            </div>

            <div class="engine">
                <div class="imgHeader">
                    <img class="engineLogo" src="/includes/img/engine.png" />
                </div>
                <h3 class="element-invisible"> EngineAPI </h3>

                <p>
                  EngineAPI's router is fairly easy to setup, but there is a caveat.  The router doesn't like to recognize some folders as not being part of the route.  To fix this problem folders that contain a css, or js file must have an index.php file that is empty inside of them.  You also have to make sure that the .htaccess file is included, which was part of the MVCEngineStart downloaded from github.  Once you have both of those the router should be easy to set.
                </p>

                <div class="code-sample">
                    <h4> Setup  </h4>
                    <?php recurseInsert('codeSnippets/routerAPI.php','php') ?>

                    <p> Requiring those other functions and classes in your file will allow everything to work in the same way.  So when your referencing a file, your really requesting a PHP file from another location that matches up with your model.  The other objects in the URL are used as variables to determine actions that need to happen to that specific view or model.  </p>

                </div>

                <h4> Watch Router Video ? </h4>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/haLOsade3II?list=PLTBgNwvH0GyxEgi9_BOOa-38ZSGqoAaaS" frameborder="0" allowfullscreen></iframe>
                </div>

                <h4> Watch Controller Video ? </h4>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/quncX36-bxk?list=PLTBgNwvH0GyxEgi9_BOOa-38ZSGqoAaaS" frameborder="0" allowfullscreen></iframe>
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