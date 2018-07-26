<!DOCTYPE html>
<html lang="en">
<head>
	<title>
        <?php
wp_title('•', true, 'right');
bloginfo('name');
?>
    </title>
	<meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<?php wp_head();?>
</head>

<body <?php body_class(array('tcl-background'));?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<!--
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name');?></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <?php
wp_nav_menu(array(
  'theme_location' => 'navbar-left',
  'depth'          => 2,
  'menu_class'     => 'nav navbar-nav',
  'fallback_cb'    => 'wp_bootstrap_navwalker::fallback',
  'walker'         => new wp_bootstrap_navwalker())
);
?>
        <?php get_template_part('includes/navbar-search');?>
        <?php
wp_nav_menu(array(
  'theme_location' => 'navbar-right',
  'depth'          => 2,
  'menu_class'     => 'nav navbar-nav navbar-right',
  'fallback_cb'    => 'wp_bootstrap_navwalker::fallback',
  'walker'         => new wp_bootstrap_navwalker())
);
?>
    </div>
  </div>
</nav>-->
    <div class="page">
        <header id="section-header" class="header tcl-section" >
            <div class="tcl-widget tcl-block tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-auto tcl-spacing-left-auto">
                <div class="container-fluid">
                    <div class="row">
                        <div class="tcl-cell col-sm-12" >
                            <div class="tcl-widget tcl-container tcl-container_header_1" >
                                <div class="tcl-widget tcl-row row-fixed tcl-spacing-top-small tcl-spacing-right-auto tcl-spacing-bottom-small tcl-spacing-left-auto" >
                                    <div class="container-fluid">
                                        <div class="row" >
                                            <div class="tcl-widget tcl-row__column tcl-cell col-sm-12" >
                                                <div class="tcl-widget tcl-text tcl-preset-default tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-auto tcl-spacing-left-auto" >
                                                    <div class="tcl-text-content tcl-text-editable">
                                                        <p class="tcl-text_system_12"><span class="tcl-color5_5">Welcome to our Voyage Agency</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tcl-widget tcl-spacer tcl-preset-default tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-auto tcl-spacing-left-auto tcl-visible-on_desktop" >
                                <div class="tcl-spacer-block" style="height:25px"></div>
                            </div>
                            <div class="tcl-widget tcl-row row-fixed tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-auto tcl-spacing-left-auto" >
                                <div class="container-fluid">
                                    <div class="row" >
                                        <div class="tcl-widget tcl-row__column tcl-cell col-sm-4" >
                                            <div class="tcl-widget tcl-row tcl-justify-content_center tcl-spacing-top-small tcl-spacing-right-auto tcl-spacing-bottom-small tcl-spacing-left-auto" >
                                                <div class="container-fluid">
                                                    <div class="row" >
                                                        <div class="tcl-widget tcl-row__column tcl-cell col-xs-3"  style="">
                                                            <div class="tcl-widget tcl-image tcl-preset-default tcl-align-center tcl-align-left_mobile-h tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-auto tcl-spacing-left-auto  ">
                                                                <a class="tcl-image-link tcl-link" href="https://template66409.motopreview.com/">
                <img data-src="http://8mm.208.myftpupload.com/wp-content/uploads/2018/07/mt-1477-home-logo.png" class="tcl-image-picture ed" title="" alt="" src="http://8mm.208.myftpupload.com/wp-content/uploads/2018/07/mt-1477-home-logo.png">
            </a>
                                                            </div>
                                                        </div>
                                                        <div class="tcl-widget tcl-row__column tcl-cell col-xs-9"  style="">
                                                            <div class="tcl-widget tcl-text tcl-preset-default tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-auto tcl-spacing-left-auto" >
                                                                <div class="tcl-text-content tcl-text-editable">
                                                                    <p class="tcl-text_system_1"><a href="https://template66409.motopreview.com/" class="tcl-link">VOYAGE</a></p>
                                                                    <p class="tcl-text_248"><a href="https://template66409.motopreview.com/" class="tcl-link">AGENCY</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tcl-widget tcl-row__column tcl-cell col-sm-8" >
                                            <div class="tcl-widget tcl-row tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-auto tcl-spacing-left-auto" >
                                                <div class="container-fluid">
                                                    <div class="row" >
                                                        <div class="tcl-widget tcl-row__column tcl-cell col-sm-4" >
                                                            <div class="tcl-widget tcl-row tcl-spacing-top-small tcl-spacing-right-auto tcl-spacing-bottom-small tcl-spacing-left-auto" >
                                                                <div class="container-fluid">
                                                                    <div class="row" >
                                                                        <div class="tcl-widget tcl-row__column tcl-cell col-xs-3" >
                                                                            <div class="tcl-widget tcl-text tcl-preset-default tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-auto tcl-spacing-left-auto" >
                                                                                <div class="tcl-text-content tcl-text-editable">
                                                                                    <p class="tcl-text_system_8"><span class="fa"></span>
                                                                                        <br>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tcl-widget tcl-row__column tcl-cell col-xs-9" >
                                                                            <div class="tcl-widget tcl-text tcl-preset-default tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-auto tcl-spacing-left-auto" >
                                                                                <div class="tcl-text-content tcl-text-editable">
                                                                                    <p class="tcl-text_system_2">Phone</p>
                                                                                    <p class="tcl-text_system_13"><a href="tel:1234567890" class="tcl-link">1-888-123-45678</a></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tcl-widget tcl-row__column tcl-cell col-sm-4" >
                                                            <div class="tcl-widget tcl-row tcl-spacing-top-small tcl-spacing-right-auto tcl-spacing-bottom-small tcl-spacing-left-auto" >
                                                                <div class="container-fluid">
                                                                    <div class="row" >
                                                                        <div class="tcl-widget tcl-row__column tcl-cell col-xs-3" >
                                                                            <div class="tcl-widget tcl-text tcl-preset-default tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-auto tcl-spacing-left-auto" >
                                                                                <div class="tcl-text-content tcl-text-editable">
                                                                                    <p class="tcl-text_system_8"><span class="fa"></span>
                                                                                        <br>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tcl-widget tcl-row__column tcl-cell col-xs-9" >
                                                                            <div class="tcl-widget tcl-text tcl-preset-default tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-auto tcl-spacing-left-auto" >
                                                                                <div class="tcl-text-content tcl-text-editable">
                                                                                    <p class="tcl-text_system_2">E-mail us</p>
                                                                                    <p class="tcl-text_system_13"><a href="mailto:info@demolink.org" class="tcl-link">info@demolink.org</a>
                                                                                        <br>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tcl-widget tcl-row__column tcl-cell col-sm-4" >
                                                            <div class="tcl-widget tcl-row tcl-spacing-top-small tcl-spacing-right-auto tcl-spacing-bottom-small tcl-spacing-left-auto" >
                                                                <div class="container-fluid">
                                                                    <div class="row" >
                                                                        <div class="tcl-widget tcl-row__column tcl-cell col-xs-3" >
                                                                            <div class="tcl-widget tcl-text tcl-preset-default tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-auto tcl-spacing-left-auto" >
                                                                                <div class="tcl-text-content tcl-text-editable">
                                                                                    <p class="tcl-text_system_8"><span class="fa"></span>
                                                                                        <br>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tcl-widget tcl-row__column tcl-cell col-xs-9" >
                                                                            <div class="tcl-widget tcl-text tcl-preset-default tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-auto tcl-spacing-left-auto" >
                                                                                <div class="tcl-text-content tcl-text-editable">
                                                                                    <p class="tcl-text_system_2">Opening Time</p>
                                                                                    <p class="tcl-text_system_13">08.00 - 18.00</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tcl-widget tcl-spacer tcl-preset-default tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-auto tcl-spacing-left-auto tcl-visible-on_desktop" >
                                <div class="tcl-spacer-block" style="height:25px"></div>
                            </div>
                            <div class="tcl-widget tcl-container tcl-container_header_595cda162 tcl-sticky__bootstrapped"  style="">
                                <div class="tcl-widget tcl-divider tcl-preset-default tcl-align-left tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-small tcl-spacing-left-auto  ">
                                    <hr class="tcl-divider-line" style="max-width:100%;width:100%;">
                                </div>
                                <div class="tcl-widget tcl-row row-fixed tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-small tcl-spacing-left-auto" >
                                    <div class="container-fluid">
                                        <div class="row" >
                                            <div class="tcl-widget tcl-row__column tcl-cell col-sm-12" >
                                                <div class="tcl-widget tcl-menu tcl-preset-default tcl-align-center tcl-align-center_mobile-h tcl-spacing-top-auto tcl-spacing-right-auto tcl-spacing-bottom-auto tcl-spacing-left-auto">
                                                    <a href="https://template66409.motopreview.com/#" class="tcl-menu-toggle-btn"><i class="tcl-menu-toggle-btn-icon fa fa-bars"></i></a>
                                                    <ul class="tcl-menu-list tcl-menu-list_horizontal">
                                                        <li class="tcl-menu-item tcl-menu-item-has-submenu">
                                                            <a href="https://template66409.motopreview.com/about-us/" class="tcl-menu-link tcl-menu-link-level-1 tcl-menu-link-submenu tcl-link">ABOUT<span class="fa tcl-menu-link-arrow"></span></a>
                                                            <ul class="tcl-menu-sublist">
                                                                <li class="tcl-menu-item">
                                                                    <a href="https://template66409.motopreview.com/archive/" class="tcl-menu-link tcl-menu-link-level-2 tcl-link">Archive</a>
                                                                </li>
                                                                <li class="tcl-menu-item tcl-menu-item-has-submenu">
                                                                    <a href="https://template66409.motopreview.com/events/" class="tcl-menu-link tcl-menu-link-level-2 tcl-menu-link-submenu tcl-link">Events<span class="fa tcl-menu-link-arrow"></span></a>
                                                                    <ul class="tcl-menu-sublist">
                                                                        <li class="tcl-menu-item">
                                                                            <a href="https://template66409.motopreview.com/news/" class="tcl-menu-link tcl-menu-link-level-3 tcl-link">News</a>
                                                                        </li>
                                                                        <li class="tcl-menu-item">
                                                                            <a href="https://template66409.motopreview.com/contacts/" class="tcl-menu-link tcl-menu-link-level-3 tcl-link">Contacts</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="tcl-menu-item">
                                                                    <a href="https://template66409.motopreview.com/services/" class="tcl-menu-link tcl-menu-link-level-2 tcl-link">Services</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="tcl-menu-item">
                                                            <a href="https://template66409.motopreview.com/services/" class="tcl-menu-link tcl-menu-link-level-1 tcl-link">SERVICES</a>
                                                        </li>
                                                        <li class="tcl-menu-item">
                                                            <a href="https://template66409.motopreview.com/visa-categories/" class="tcl-menu-link tcl-menu-link-level-1 tcl-link">VISA CATEGORIES</a>
                                                        </li>
                                                        <li class="tcl-menu-item">
                                                            <a href="https://template66409.motopreview.com/immigration-to/" class="tcl-menu-link tcl-menu-link-level-1 tcl-link">IMMIGRATION TO</a>
                                                        </li>
                                                        <li class="tcl-menu-item">
                                                            <a href="https://template66409.motopreview.com/pricing/" class="tcl-menu-link tcl-menu-link-level-1 tcl-link">PRICING</a>
                                                        </li>
                                                        <li class="tcl-menu-item">
                                                            <a href="https://template66409.motopreview.com/news/" class="tcl-menu-link tcl-menu-link-level-1 tcl-link">NEWS</a>
                                                        </li>
                                                        <li class="tcl-menu-item">
                                                            <a href="https://template66409.motopreview.com/contacts/" class="tcl-menu-link tcl-menu-link-level-1 tcl-link">CONTACTS</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tcl-sticky-pseudo-element" style="display: none; height: 63px; width: 1583px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar,
then you probably don't require a site title. Alternatively you can use the example below.
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name');?></a>
      </h1>
    </div>
  </div>
</div>
-->
