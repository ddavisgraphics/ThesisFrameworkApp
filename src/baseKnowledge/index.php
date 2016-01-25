<?php
    require_once "../includes/engine.php";
    templates::display('header');
?>
<section class="wrapper">
    <div class="container">
        <div class="row">
            <h2> Pre-Framework Knowledge </h2>
            <p> A group of videos that help to build knowledge and information before the framework series. The videos are in a playlist, you can skip forward and backwards through multiple videos. </p>
        </div>

        <div class="row">
            <div class="video-container">
               <iframe src="https://www.youtube.com/embed/pn-0Aagx4cs?list=PLTBgNwvH0GyxH3WmN-qisKZwLB28aY0F9" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

    </div>
</section>

<?php
    templates::display('footer');
?>


