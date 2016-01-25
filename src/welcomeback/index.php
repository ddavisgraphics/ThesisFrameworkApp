<?php
    require_once "../includes/engine.php";
    templates::display('header');
?>
<section class="wrapper">
    <div class="container">
        <?php  recurseInsert('includes/nav.php', 'php'); ?>
    </div>
</section>

<?php
    templates::display('footer');
?>


