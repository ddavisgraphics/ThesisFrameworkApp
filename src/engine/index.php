<?php
    require_once "../includes/engine.php";
    templates::display('header');
?>
<section class="wrapper">
    <div class="container">
         <div class="row">
            <h2> EngineAPI Series </h2>
            <p> A group of videos that builds a basic appliation in the engineAPI framework.  The videos are in a playlist, you can skip forward and backwards through multiple videos. </p>
        </div>

        <div class="row">
            <div class="video-container">
               <iframe  src="https://www.youtube.com/embed/zwN1hbr-AlY?list=PLTBgNwvH0GyxEgi9_BOOa-38ZSGqoAaaS" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<?php
    templates::display('footer');
?>


