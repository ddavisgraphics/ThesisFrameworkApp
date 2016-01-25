<div class="phpEditor sytnaxHighlight bigBox"><?php print htmlspecialchars('
<head>
  <!-- Google that this is a Meteor App -->
    <meta name="fragment" content="!">

  <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<!-- ======================================= -->
<!--      Main Layout Template               -->
<!-- ======================================= -->
<template name="mainLayout">
    <header>
        <div class="container">
            <div class="siteTitle">
                <h1> <i class="fa fa-clock-o"></i> Time Tracker </h1>
                <blockquote>
                    Tracking your time, <br> enabling your productivity.
                </blockquote>
            </div>
            <nav class="actions">
                <ul>
                    <li> <a href="/" class="button"> <i class="fa fa-home"></i> <span class="mobile"> Home </span> </a> </li>
                    <li> <a href="/customer" class="button"> Customers </a> </li>
                    <li> <a href="/projects" class="button"> Customer Projects </a> </li>
                    <li> <a href="/timeTracker" class="button"> Track Time </a> </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="main">
        <div class="container">
            {{>yield}}
        </div>
    </section>

    <footer>
        <p> Copyrights 2015 - David Davis - Meteor Test Dev </p>
    </footer>
</template>'); ?>
</div>
