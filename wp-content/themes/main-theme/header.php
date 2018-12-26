<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<!--Home page style-->
<header>
    <nav class="navbar navbar-expand-sm navbar-default fixed-top">
        <a class="navbar-brand" href="#">
            <img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" alt="devDevil">
        </a>
        
        <button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="mainMenu" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="#">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li> -->
                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
        </div> 
    </nav>

    <div id="banner">
        <div class="banner-content">
            <h1>Saud Al Alawi</h1>
            <h3>Electronics hobbyist, and freelance web developer</h3>
            <a href="#" class="btn btn-default btn-md">My Portfolio</a>
        </div>
    </div>
</header>


