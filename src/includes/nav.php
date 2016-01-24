<?php
    if(isset($_SESSION['data']['username'])){
?>
    <ul>
        <li> <a href="/setup"> Setup Frameworks </a> </li>
    </ul>
<?php
    } else {
        print "<div class='warning-message'> You must submit the form and register your session in order to start these lessons.  Once completed this message will turn into navigation. </div>";
    }
?>