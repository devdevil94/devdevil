<!DOCTYPE html>


<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<!--Home page style-->

<body <?php body_class(); ?> >
<header>
    <div class="logo">
        <a href="<?php echo site_url(); ?>">
            <img src="<?php echo get_theme_file_uri('images/devdevil_logo.png'); ?>"
            alt="devDevil">
        </a>
    </div>
    <nav class="active">
        <ul class="nav-links">
            <li class="link">
                <a href="<?php echo site_url(); ?>">
                    Home
                </a>
            </li>
            <li class="link">
                <a href="<?php echo site_url('/blog'); ?>">
                    Blog
                </a>
            </li>
            <li class="link">
                <a href="<?php echo get_post_type_archive_link('project'); ?>">
                    Projects
                </a>
            </li>
            <li class="link">
                <a href="<?php echo site_url('/about'); ?>">
                    About
                </a>
            </li>
            <li class="link">
                <a href="<?php echo site_url('/contact'); ?>">
                    Contact
                </a>
            </li>
        </ul>
    </nav>
    <div class="menu-bars">
        <i class="fa fa-bars"></i>
    </div>

</header>


