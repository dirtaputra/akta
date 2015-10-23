<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="all">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <title>User Panel</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/typography.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/global.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/elements.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/shortcodes.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/widgets.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/menu.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/jquery.flexslider.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/revolution/settings.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/revolution/fullwidth.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/revolution/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/revolution/absolution_revolution.css"/>
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/jquery.tweet.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/jquery.isotope.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/jquery.jcarousel.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/responsive-gs-12col.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/mediaqueries.css"/>    
</head>
<body>

<header class="header-top">
    <div class="container clr">
        <div class="row no-margin-col">
            <div class="col span_5">
                <div class="floatleft">
                    <ul class="inline-ul no-margin">
                        <li><p class="phone-top nova-text">&nbsp;&nbsp;(+62) 85604210386</p></li>
                        <li><p class="mail-top nova-text">&nbsp;&nbsp;&nbsp;&nbsp;admin@gmail.com</p></li>
                    </ul>          
                </div>
            </div>

            <div class="col span_7">
                <div class="header-social-icons-parent">
                    <div class="header-social-icons clr">
                        <a href="" target="_blank">
                            <div class="social-icon-dribbble"></div>
                        </a>
                        <a href="" target="_blank">
                            <div class="social-icon-facebook"></div>
                        </a>
                        <a href="" target="_blank">
                            <div class="social-icon-twitter"></div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>  
</header>

<header class="header-container">
    <div class="header-elements container">
        <div class="row span_12 no-margin-col">

            <div class="col span_3">
                <div class="logo">
                    <img src="<?php echo base_url(); ?>asset/web/logo.png" alt="logo">
                </div>
            </div>

            <div class="col span_9">
                <nav class="menu-system">
                    <ul class="absolution">
                        <li>
                            <a href="<?php echo base_url(); ?>">
                                <span class="icon"><span class="menu-icon menu-icon-blog"></span></span>HOME
                            </a>
                        </li>                      
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/web/contact">
                                <span class="icon"><span class="menu-icon menu-icon-contact"></span></span>CONTACT
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>
<form method="POST" action="<?php echo base_url()."index.php/crud/do_insert"; ?>">
        <table>
            <tr>
                <td>No Induk</td>
                <td><input type="text" name="nim" /></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td> <input type="text" name="nama" /></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnSubmit" value="Simpan" /></td>
            </tr>
        </table>
        </form>
    </body>