<?php
    require_once "../includes/engine.php";
    $localvars->set('user', htmlSanitize(session::get('username')));
    templates::display('header');
?>
<section id="{local var="tracker"}" class="wrapper">
    <div class="container">
        <div class="row">
            <div class="picture" style="padding:30px !important;">
                <img src="/includes/img/codeworks.jpg" alt="computer stuff" />
                <p class="micro-text"> Credit: The meme generator </p>
            </div>
            <div class="intro">
                <h2> Logic and Events </h2>
                <p> This often times is the most intresting and intimidating parts of learning to code for the web.  Logic can sometimes be as simple as creating a new variable and printing it to the view, and othertimes as difficult as writing a pattern recognition algorthim.  In our great time we live in a world that finding examples and learning by tinkering has become easier and easier.  There are great resources like <a href="http://stackoverflow.com/"> Stack Overflow </a> that have developers at the ready to help with basic to more complex problems.  My advice jump in head first! </p>

                <h3> Jump To </h3>
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

                <p> Meteor, as many other js apps, run logic driven on events and user interactions.  An example would be clicks, pageloads, keyboard inputs, etc.  JavaScript for years has been focused on making things more interactive, and even when it started out was a way for browsers to validate form input.  Taking this past into consideration it is perfect for instant applications that involve this sort of event loop. <br><br> Meteor runs all of the logic from either the client.js or the server.js files, or by using the native calls Meteor.isServer, Meteor.isClient, Meteor.startup(func).  These will setup up all of the initial logic calls and descide what needs to run and when.  You may also want to store functions to be used later, by adding them ito the Meteor.methods on the server side.  This is where re-usable functions for manipulating data would be stored. </p>

                <div class="code-sample">
                    <h4> Basic Loop Logic </h4>
                    <p>  Here is some logic in meteor that refers to a template and specific variable.  On the template load the helper is going to regiser a variable.  This variable will get the customers data, put it in and build an array of objects to be turned into a dropdown or select menu. </p>

                    <?php recurseInsert('codeSnippets/jsLoopLogic.php','php') ?>

                    <h4> More Complex Event Logic in Meteor </h4>

                    <p> Here is an example of how meteors event logic works, it is very similar to JQuery and JavaScript Objects used as classes.  In a matter of hours you can create a quick application prototype, in a matter of a couple weeks you could secure and release an application in the meteor framework all based on these same priniples and logic. </p>

                    <?php recurseInsert('codeSnippets/jsEventLogic.php','php') ?>
                </div>
            </div>

            <div class="engine">
                <div class="imgHeader">
                    <img class="engineLogo" src="/includes/img/engine.png" />
                </div>
                <h3 class="element-invisible"> EngineAPI </h3>

                <p>
                  PHP is much different in the way it reacts.  By default traditional stacks aren't asynchoronus, they have to require a server request, the server to parse the logic, and spit back out the proper information.  Every page transfer is a new request.  Logic can be stored in PHP Tags, Functions, and Classes.  As long as the pages are going back to the server the logic can be displayed.  Alterantively AJAX can be used to get JSON Data from a PHP page.  This will help an application to seem asynchoronus or pull in instant data.
                </p>

                <div class="code-sample">
                    <h4> Examples of PHP Logic </h4>
                    <p> The most common examples of php are kept within functions of within classes.  This first example gets a company name from the database based on a given parameter.  It uses a validate class to validate if the item is an integer and fetches the item from the db.   </p>

                    <?php recurseInsert('codeSnippets/templateCall.php', 'php') ?>

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