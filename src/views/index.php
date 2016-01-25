<?php
    require_once "../includes/engine.php";
    $localvars->set('user', htmlSanitize(session::get('username')));
    templates::display('header');
?>
<section id="{local var="tracker"}" class="wrapper">
    <div class="container">
        <div class="row">
            <div class="picture" style="padding:30px !important;">
                <img src="/includes/img/oatmeal.png" alt="computer stuff" />
                <p class="micro-text"> Credit: The Oatmeal </p>
            </div>
            <div class="intro">
                <h2> Views! </h2>
                <p> The part of the web application that everybody sees.  These should be kept mostly logic free and involve use a variety of different HTML templating setups to make them easy to maintain.  Views are where designers and developers really get to see the hard work that they are doing and is the main part of the application that a user will see.  Your looking at a view now! </p>

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

                <p> Views in Meteor are really easy to make, the simply involve making a template and understanding the templating variables.  To provide context I suggest looking at the routers as well.  Note that the main template below uses a single word that is in {{ }}.  These are templating variables common to many templating systems.  Some people call them handlebars, but in meteor they call them spacebars. This is also how variables or logic will be introduced into your views.  </p>

                <div class="code-sample">
                    <h4> A Main Layout </h4>
                    <p>  While the router will do the big moving of elements, this gives you an idea of what a main layout would look like.  </p>
                    <?php recurseInsert('codeSnippets/jsMainLayout.php','php') ?>

                    <h4> Simple Template </h4>

                    <p>  A simple template might look something like the item below.  It create a standard HMTL page that goes into the yield of the main template.  From there the template loops of a variable of allCustomers and displays the data from each one. </p>

                    <?php recurseInsert('codeSnippets/jsTemplate.php','php') ?>
                </div>


                <h4> Templating Demos </h4>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/FhEKQzvONZ4?list=PLTBgNwvH0GyzKwaOMM6elwTvZnQ2fXahW"  frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/K4IJx67BGYA?list=PLTBgNwvH0GyzKwaOMM6elwTvZnQ2fXahW"  frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="engine">
                <div class="imgHeader">
                    <img class="engineLogo" src="/includes/img/engine.png" />
                </div>
                <h3 class="element-invisible"> EngineAPI </h3>

                <p>
                  There are two different templating aspects in meteor that we use in the video lessons and while making items in MVC format.  While the videos talk about them, there is no video that directly references the templating.  Looking at the setup we see that there is a folder called template and inside of that a default folder with a header and footer file.  These files are used in the templating engine build into engineAPI.  These templates use HTML and PHP to create the headers and footers, most of them are pure HTML with an insert for custom CSS, JS, and Nav.
                </p>

                <div class="code-sample">
                    <h4> Template Header and Footer Files </h4>
                    <p> This section we are going to look at a typical file that uses the engineAPI framework.  A typically page lets says index.php is going to have the following lines in it.  </p>

                    <?php recurseInsert('codeSnippets/engineViews.php','php') ?>


                    <?php recurseInsert('codeSnippets/templateCall.php', 'php') ?>

                </div>

                <h4> Templating EngineAPI </h4>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/04MiAf7-jBY?list=PLTBgNwvH0GyxEgi9_BOOa-38ZSGqoAaaS"  frameborder="0" allowfullscreen></iframe>
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