<div class="phpEditor sytnaxHighlight"><?php print htmlspecialchars('
<?php
   // load a template to use
    templates::load("default");
?>
');?>
</div>

<p> The line above is found in the engine.php file, and calls a template folder.  In our example it lays in the template default folder.  However, more files and folders can be added at any time.  It may require that re-provision your box, or you jump into the terminal and do another symbolic link. </p>

<div class="phpEditor sytnaxHighlight smallBox"><?php print htmlspecialchars('
<?php
    require_once "../includes/engine.php";
    templates::display("header");
?>
<!--  App Body -->
<?php
    templates::display("footer");
?>
');?>
</div>

<p> The require_once code simply initiates engine using a special file, this file is mandatory and set in the MVC Repo that we talked about in the setup. </p>