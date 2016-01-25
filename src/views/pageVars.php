<?php
    $localvars = localvars::getInstance();

    $localvars->set('sessionUsername',session::get('username'));
    $localvars->set('ipAddr', $_SERVER['REMOTE_ADDR']);
    $localvars->set('pageName', 'Views');
?>
<!--set JS Variables -->
<script>
    var sessionUser = '{local var="sessionUsername"}';
    var ipAddr = '{local var="ipAddr"}';
    var pageName = '{local var="pageName"}';
</script>