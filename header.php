<!DOCTYPE html>
<html>

<head>
    <?php wp_head('')?>
    <meta charset="utf-8">
    <title>WP theme</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css">
</head>

<body>
<div id="all">
    <div class="content1">
        <div id="header">
            <img alt="header" src="<?php bloginfo('template_directory')?>/header.jpg" width="100%">
        </div>
        <div class="nav">
<!--            <ul>-->
<!--                <li class="nieuws"><a class="indy" href="#">nieuws</a></li>-->
<!---->
<!--                <li class="home"><a class="active" href="#">Blog</a></li>-->
<!--                <li class="welkom"><a href="#">Welkom</a>-->
<!--                    <ul class="submenu">-->
<!--                        <li><a href="#">Formule 1</a></li>-->
<!--                        <li><a href="#">Olympische spelen</a></li>-->
<!--                        <li><a href="#">Voetbal</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                -->
<!--                <li class="about"><a href="#">Over mij</a></li>-->
<!--                <li class="contact"><a href="#">Contact</a></li>-->
<!---->
<!--            </ul>-->
            <?php wp_nav_menu(); ?>
        </div>
    </div>