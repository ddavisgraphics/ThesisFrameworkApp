<?php
    require_once "../includes/engine.php";
    templates::display('header');
?>
<section class="wrapper">
    <div class="container">
        <div class="row">
            <h2> Meteor Series </h2>
            <p> A group of videos that builds a basic appliation in the meteor framework.  The videos are in a playlist, you can skip forward and backwards through multiple videos. </p>
        </div>

        <div class="row">
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/lPxMseQknD0?list=PLTBgNwvH0GyzKwaOMM6elwTvZnQ2fXahW" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<?php
    templates::display('footer');
?>


