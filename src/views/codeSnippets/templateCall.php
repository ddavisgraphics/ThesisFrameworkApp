<h4> Template Header </h4>
<div class="phpEditor sytnaxHighlight bigBox"><?php print htmlspecialchars('
<!DOCTYPE html>
<html lang="en">
<head>
    <title>{local var="pageName"}</title>

    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="True">

    <!-- Author, Description, Favicon, and Keywords -->
    <meta name="author" content="{local var="meta_authors"}">
    <meta name="description" content="{local var="meta_description"}">
    <meta name="keywords" content="{local var="meta_keywords"}">

    <!-- Project Specific Head Includes -->
    <?php recurseInsert("headerIncludes.php","php") ?> <!-- Page Specific -->
    <?php recurseInsert("includes/headerIncludes.php","php") ?> <!-- Project Wide -->
    <!--  page specific vars -->
    <?php recurseInsert("pageVars.php", "php"); ?>
</head>

<body>

<header>
    <div class="container">
        <div class="siteTitle">
            <h1> Learning<span>App</span> </h1>
        </div>
        <div class="toggles">
            <div class="gift-toggle">
                <a href="javascript:void(0);"> <i class="fa fa-gift"></i> <span> Gift Card </span></a>
            </div>
            <div class="nav-toggle">
                <a href="javascript:void(0);"> <i class="fa fa-bars"></i> </a>
            </div>
        </div>
    </div>
</header>

<nav class="wrapper nav hidden">
    <div class="container">
        <?php recurseInsert("includes/nav.php","php") ?>
    </div>
</nav>
');?>
</div>

<h4> LocalVars </h4>
<p> Localvars are a way of adding variables to the HTML very similar to spacebars in meteor, and handlebars in other templating engines. Local vars can be set directly, through functions and classes, or by variables. Use the local var  by writing without the spaces <pre>{ local var="pageName" }</pre></p>
<div class="phpEditor"><?php print htmlspecialchars('
<?php $localvars->set("pageName", "SomePage")
    // or using vars
    $pagename  = "somePage";
    $localvars->set("pageName",$pagename);
?>
<!-- Without the spaces between the brackets -->
<title><pre>{ local var="pageName" }</pre></title>
');?>
</div>

<h4> RecurseInserts </h4>

<p> This is a way of injecting content that might change from place to place, or things that could be conditially different for different directories. A recurse insert will find the nearest file in the nearest file path and use that one to over-ride the base files. </p>

<div class="phpEditor sytnaxHighlight"><?php print htmlspecialchars('
<nav class="wrapper nav hidden">
    <?php recurseInsert("includes/nav.php","php") ?>
</nav>
');?>
</div>