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
        <div class="nav-toggle mobile-only">
            <a href="javascript:void(0);"> <i class="fa fa-bars"></i> </a>
        </div>
    </div>
</header>

<nav class="wrapper nav hidden">
    <div class="container">
        <?php recurseInsert("includes/nav.php","php") ?>
    </div>
</nav>

<section class="feedback">
    <div class="container">
        {local var="giftCheck"}
        {local var="feedback"}
    </div>
</section>