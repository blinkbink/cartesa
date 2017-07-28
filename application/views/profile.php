<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Halaman Karyawan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(). "assets/images/icons/apple-touch-icon-144-precomposed.png"?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(). "assets/images/icons/apple-touch-icon-114-precomposed.png"?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(). "assets/images/icons/apple-touch-icon-72-precomposed.png"?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(). "assets/images/icons/apple-touch-icon-57-precomposed.png"?>">
    <link rel="shortcut icon" href="<?php echo base_url(). "assets/images/icons/favicon.png"?>">



    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/bootstrap/css/bootstrap.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/bootstrap/css/profile.css"?>">


    <!-- HELPERS -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/helpers/animate.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/helpers/backgrounds.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/helpers/boilerplate.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/helpers/border-radius.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/helpers/grid.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/helpers/page-transitions.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/helpers/spacing.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/helpers/typography.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/helpers/utils.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/helpers/colors.css"?>">

    <!-- ELEMENTS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/badges.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/buttons.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/content-box.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/dashboard-box.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/forms.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/images.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/info-box.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/invoice.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/loading-indicators.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/menus.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/panel-box.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/response-messages.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/responsive-tables.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/ribbon.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/social-box.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/tables.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/tile-box.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/elements/timeline.css"?>">



    <!-- ICONS -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/icons/fontawesome/fontawesome.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/icons/linecons/linecons.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/icons/spinnericon/spinnericon.css"?>">


    <!-- WIDGETS -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/accordion-ui/accordion.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/calendar/calendar.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/carousel/carousel.css"?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/charts/justgage/justgage.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/charts/morris/morris.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/charts/piegage/piegage.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/charts/xcharts/xcharts.css"?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/chosen/chosen.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/colorpicker/colorpicker.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/datatable/datatable.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/datepicker/datepicker.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/datepicker-ui/datepicker.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/daterangepicker/daterangepicker.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/dialog/dialog.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/dropdown/dropdown.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/file-input/fileinput.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/input-switch/inputswitch.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/input-switch/inputswitch-alt.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/ionrangeslider/ionrangeslider.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/jcrop/jcrop.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/jgrowl-notifications/jgrowl.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/loading-bar/loadingbar.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/maps/vector-maps/vectormaps.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/markdown/markdown.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/modal/modal.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/multi-select/multiselect.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/multi-upload/fileupload.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/nestable/nestable.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/noty-notifications/noty.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/popover/popover.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/pretty-photo/prettyphoto.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/progressbar/progressbar.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/range-slider/rangeslider.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/slidebars/slidebars.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/slider-ui/slider.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/tabs-ui/tabs.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/theme-switcher/themeswitcher.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/timepicker/timepicker.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/tocify/tocify.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/tooltip/tooltip.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/touchspin/touchspin.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/uniform/uniform.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/wizard/wizard.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/widgets/xeditable/xeditable.css"?>">

    <!-- SNIPPETS -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/snippets/chat.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/snippets/files-box.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/snippets/login-box.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/snippets/notification-box.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/snippets/progress-box.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/snippets/todo.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/snippets/user-profile.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/snippets/mobile-navigation.css"?>">

    <!-- APPLICATIONS -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/applications/mailbox.css"?>">

    <!-- Admin theme -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/themes/admin/layout.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/themes/admin/color-schemes/default.css"?>">

    <!-- Components theme -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/themes/components/default.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/themes/components/border-radius.css"?>">

    <!-- Admin responsive -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/helpers/responsive-elements.css"?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/helpers/admin-responsive.css"?>">

    <!-- JS Core -->

    <script type="text/javascript" src="<?php echo base_url(). "assets/js-core/jquery-core.js"?>"></script>
    <script type="text/javascript" src="<?php echo base_url(). "assets/js-core/jquery-ui-core.js"?>"></script>
    <script type="text/javascript" src="<?php echo base_url(). "assets/js-core/jquery-ui-widget.js"?>"></script>
    <script type="text/javascript" src="<?php echo base_url(). "assets/js-core/jquery-ui-mouse.js"?>"></script>
    <script type="text/javascript" src="<?php echo base_url(). "assets/js-core/jquery-ui-position.js"?>"></script>
    <script type="text/javascript" src="<?php echo base_url(). "assets/js-core/modernizr.js"?>"></script>
    <script type="text/javascript" src="<?php echo base_url(). "assets/js-core/jquery-cookie.js"?>"></script>

    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>

</head>

<body>
<div id="sb-site">
    <div class="sb-slidebar bg-black sb-right sb-style-overlay">
        <div class="scrollable-content scrollable-slim-sidebar">
            <div class="pad15A">
                <div class="clear"></div>
                <div id="sidebar-toggle-4" class="collapse in">
                    <ul class="notifications-box notifications-box-alt">
                        <li>
                            <span class="bg-purple icon-notification glyph-icon icon-users"></span>
                            <span class="notification-text">This is an error notification</span>
                            <div class="notification-time">
                                a few seconds ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                <i class="glyph-icon icon-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
                            <span class="notification-text">This is a warning notification</span>
                            <div class="notification-time">
                                <b>15</b> minutes ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                <i class="glyph-icon icon-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <span class="bg-green icon-notification glyph-icon icon-random"></span>
                            <span class="notification-text font-green">A success message example.</span>
                            <div class="notification-time">
                                <b>2 hours</b> ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                <i class="glyph-icon icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="page-wrapper">
        <div id="page-header" class="bg-gradient-9">

            <div id="header-logo" class="logo-bg">
                <br>
                <p>Portal Karyawan</p>
            </div>
            <div id="header-nav-left">
                <div class="user-account-btn dropdown">
                    <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                        <img width="28" src="<?php echo base_url()."assets/image-resources/gravatar.jpg"?> alt="Profile image">
                        <span><?php echo $_SESSION['username'] ?></span>
                        <i class="glyph-icon icon-angle-down"></i>
                    </a>
                    <div class="dropdown-menu float-left">
                        <div class="box-sm">
                            <div class="login-box clearfix">
                                <div class="user-img">
                                    <img src="<?php echo base_url(). "assets/image-resources/gravatar.jpg"?> alt="">
                                </div>
                                <div class="user-info">
                            <span>
                                <?php echo $_SESSION['username'] ?>
                                <i>Jabatan</i>
                            </span>
                                    <a href="<?php echo base_url(). "karyawan/kata_sandi"?>" title="Ubah Kata Sandi">Ubah Kata Sandi</a>
                                </div>
                            </div>
                            <div class="divider"></div>

                            <div class="pad5A button-pane button-pane-alt text-center">
                                <a href="<?php echo base_url()."karyawan/logout"?>" class="btn display-block font-normal btn-success">
                                    <i class="glyph-icon icon-power-off"></i>
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- #header-nav-left -->

            <div id="header-nav-right">

                <div class="dropdown" id="notifications-btn">
                    <a data-toggle="dropdown" href="#" title="">
                        <span class="small-badge bg-yellow"></span>
                        <i class="glyph-icon icon-linecons-megaphone"></i>
                    </a>
                    <div class="dropdown-menu box-md float-right">

                        <div class="popover-title display-block clearfix pad10A">
                            Notifications
                            <a class="text-transform-cap font-primary font-normal btn-link float-right" href="#" title="View more options">
                                More options...
                            </a>
                        </div>
                        <div class="scrollable-content scrollable-slim-box">
                            <ul class="no-border notifications-box">
                                <li>
                                    <span class="bg-danger icon-notification glyph-icon icon-bullhorn"></span>
                                    <span class="notification-text">This is an error notification</span>
                                    <div class="notification-time">
                                        a few seconds ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-warning icon-notification glyph-icon icon-users"></span>
                                    <span class="notification-text font-blue">This is a warning notification</span>
                                    <div class="notification-time">
                                        <b>15</b> minutes ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-green icon-notification glyph-icon icon-sitemap"></span>
                                    <span class="notification-text font-green">A success message example.</span>
                                    <div class="notification-time">
                                        <b>2 hours</b> ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-azure icon-notification glyph-icon icon-random"></span>
                                    <span class="notification-text">This is an error notification</span>
                                    <div class="notification-time">
                                        a few seconds ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
                                    <span class="notification-text">This is a warning notification</span>
                                    <div class="notification-time">
                                        <b>15</b> minutes ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-blue icon-notification glyph-icon icon-user"></span>
                                    <span class="notification-text font-blue">Alternate notification styling.</span>
                                    <div class="notification-time">
                                        <b>2 hours</b> ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                                    <span class="notification-text">This is an error notification</span>
                                    <div class="notification-time">
                                        a few seconds ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                                    <span class="notification-text">This is a warning notification</span>
                                    <div class="notification-time">
                                        <b>15</b> minutes ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-green icon-notification glyph-icon icon-user"></span>
                                    <span class="notification-text font-green">A success message example.</span>
                                    <div class="notification-time">
                                        <b>2 hours</b> ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                                    <span class="notification-text">This is an error notification</span>
                                    <div class="notification-time">
                                        a few seconds ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                                    <span class="notification-text">This is a warning notification</span>
                                    <div class="notification-time">
                                        <b>15</b> minutes ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="pad10A button-pane button-pane-alt text-center">
                            <a href="#" class="btn btn-primary" title="View all notifications">
                                View all notifications
                            </a>
                        </div>
                    </div>
                </div>

            </div><!-- #header-nav-right -->

        </div>
        <div id="page-sidebar">
            <div class="scroll-sidebar">

                <ul id="sidebar-menu">
                    <li class="header"><span>Menu</span></li>
                    <li>
                        <a href="<?php echo base_url()."karyawan"?>" title="Admin Dashboard">
                            <i class="glyph-icon icon-linecons-tv"></i>
                            <span>Halaman Utama</span>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="profile" title="Data Pribadi">
                            <i class="glyph-icon icon-linecons-mail"></i>
                            <span>Data Pribadi</span>
                            <!-- <span class="bs-badge badge-danger">3</span>-->
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url()."karyawan/tim"?>" title="Elements">
                            <i class="glyph-icon icon-linecons-youtube"></i>
                            <span>Tim</span>
                        </a>
                    </li>

                    <li class="no-menu">
                        <a href="<?php echo base_url()."karyawan/cuti"?>" title="Frontend template">
                            <i class="glyph-icon icon-linecons-beaker"></i>
                            <span>Cuti Tahunan</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url()."karyawan/permohonan"?>" title="Widgets">
                            <i class="glyph-icon icon-linecons-yen"></i>
                            <span>Sakit dan Ijin Lainnya</span>
                        </a>

                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="<?php echo base_url()."karyawan/sakit"?>" title="Buttons"><span>Sakit</span></a></li>
                                <li><a href="<?php echo base_url()."karyawan/ijin_lainnya"?>" title="Labels &amp; Badges"><span>Ijin Lainnya</span></a></li>
                            </ul>
                        </div><!-- .sidebar-submenu -->
                    </li>
                    <li>
                        <a href="<?php echo base_url()."karyawan/kehadiran  "?>" title="Forms UI">
                            <i class="glyph-icon icon-linecons-eye"></i>
                            <span>Catatan Kehadiran</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url()."karyawan/slip_gaji"?>" title="Advanced tables">
                            <i class="glyph-icon icon-linecons-money"></i>
                            <span>Slip Gaji</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url()."karyawan/pengumuman"?>" title="Pengumuman">
                            <i class="glyph-icon icon-linecons-megaphone"></i>
                            <span>Pengumuman</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url()."karyawan/kalendar"?>" title="Calendar">
                            <i class="glyph-icon icon-linecons-calendar"></i>
                            <span>Kalendar</span>
                        </a>
                    </li>

                </ul><!-- #sidebar-menu -->
            </div>
        </div>

        <?php
            foreach($data as $d) {
                ?>
                <div id="page-content-wrapper">
                    <div id="page-content">

                        <div class="container">

                            <!-- Sparklines charts -->

                            <script type="text/javascript"
                                    src="<?php echo base_url() . "assets/widgets/charts/sparklines/sparklines.js" ?>"></script>
                            <script type="text/javascript"
                                    src="<?php echo base_url() . "assets/widgets/charts/sparklines/sparklines-demo.js" ?>"></script>


                            <!-- Flot charts -->

                            <script type="text/javascript"
                                    src="<?php echo base_url() . "assets/widgets/charts/flot/flot.js" ?>"></script>
                            <script type="text/javascript"
                                    src="<?php echo base_url() . "assets/widgets/charts/flot/flot-resize.js" ?>"></script>
                            <script type="text/javascript"
                                    src="<?php echo base_url() . "assets/widgets/charts/flot/flot-stack.js" ?>"></script>
                            <script type="text/javascript"
                                    src="<?php echo base_url() . "assets/widgets/charts/flot/flot-pie.js" ?>"></script>
                            <script type="text/javascript"
                                    src="<?php echo base_url() . "assets/widgets/charts/flot/flot-tooltip.js" ?>"></script>
                            <script type="text/javascript"
                                    src="<?php echo base_url() . "assets/widgets/charts/flot/flot-demo-1.js" ?>"></script>

                            <!-- PieGage charts -->
                            <script type="text/javascript"
                                    src="<?php echo base_url() . "assets/widgets/charts/piegage/piegage.js" ?>"></script>
                            <script type="text/javascript"
                                    src="<?php echo base_url() . "assets/widgets/charts/piegage/piegage-demo.js" ?>"></script>

                            <div id="page-title">
                                <h2>Data Pribadi</h2>
                            </div>

                            <div align="center" class="col-md-3">
                                <img src="<?php echo base_url() . "assets/images/gg.png" ?>" class="img-thumbnail"
                                     width="150" height="216">
                                <p><?php echo $d['nama'] ?></p>
                            </div>
                            <div class="col-md-4">
                                <table class="table">
                                    <tr>
                                        <td>Pekerjaan</td>
                                        <td><?php echo $d['pekerjaan'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Bagian</td>
                                        <td><?php echo $d['bagian'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td><?php echo $d['jenis_kelamin'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><?php echo $d['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <td><?php echo $d['agama'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Golongan Darah</td>
                                        <td><?php echo $d['golongan_darah'] ?></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-md-4">
                                <table class="table">
                                    <tr>
                                        <td>Status Perkawinan</td>
                                        <td><?php echo $d['status_perkawinan'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>No. KTP</td>
                                        <td><?php echo $d['nomor_ktp'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>No. HP</td>
                                        <td><?php echo $d['nomor_hp'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Mulai Kerja</td>
                                        <td>
                                            <?php
                                                $convert = date( 'j F o', strtotime( $d['tanggal_mulai_kerja'] ) );
                                                echo $convert
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pendidikan Terakhir</td>
                                        <td><?php echo $d['pendidikan_terakhir'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Institusi Pendidikan</td>
                                        <td><?php echo $d['institusi_pendidikan'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <?php
                        foreach ($perubahan as $p)
                            if ($p['status'] == "Menunggu")
                            {
                                ?>
                                    <a href="edit" class="btn display-block font-normal btn-warning" disabled>Perubahan Data Sedang Di Proses</a>
                            <?php
                            }
                            if($p['status'] == "Di Setujui")
                            {
                                ?>
                                    <a href="edit" class="btn display-block font-normal btn-warning">Pengajuan Perubahan Data</a>
                        <?php
                            }
                             ?>
                        <hr>
                        <h3>Informasi Kontak</h3>
                        <hr>
                        <table class="table">
                            <tr>
                                <td>No. HP</td>
                                <td><?php echo $d['nomor_hp'] ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo $d['email'] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat Rumah</td>
                                <td><?php echo $d['alamat_rumah'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Kontak Darurat</td>
                                <td><?php echo $d['nama_kontak_darurat'] ?></td>
                            </tr>
                            <tr>
                                <td>No. Kontak Darurat</td>
                                <td><?php echo $d['nomor_kontak_darurat'] ?></td>
                            </tr>
                        </table>

                        <hr>
                        <h3>Lampiran</h3>
                        <hr>
                        <table class="table">
                            <tr>
                                <td>Curriculum Vitae</td>
                                <td>
                                    <?php
                                    if($d['cv'] != "")
                                    {
                                        echo "<a href='". base_url(). "lampiran/".$d['cv'].".pdf'>Lihat</a>";
                                    }
                                    else
                                    {
                                        echo "<i>File Ini Tidak Tersedia</i>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Transkrip Nilai</td>
                                <td>
                                    <?php
                                    if($d['transkrip_nilai'] != "")
                                    {
                                        echo "<a href='". base_url(). "lampiran/".$d['transkrip_nilai'].".pdf'>Lihat</a>";
                                    }
                                    else
                                    {
                                        echo "<i>File Ini Tidak Tersedia</i>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>KTP</td>
                                <td>
                                    <?php
                                    if($d['KTP'] != "")
                                    {
                                        echo "<a href='". base_url(). "lampiran/".$d['KTP'].".jpg'>Lihat</a>";
                                    }
                                    else
                                    {
                                        echo "<i>File Ini Tidak Tersedia</i>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>File-file Lain</td>
                                <td>
                                    <?php
                                    if($d['lainnya'] != "")
                                    {
                                        echo "<a href='". base_url(). "lampiran/".$d['lainnya'].".pdf'>Lihat</a>";
                                    }
                                    else
                                    {
                                        echo "<i>File Ini Tidak Tersedia</i>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <?php
            }
        ?>
        </div>
    </div>

    <!-- WIDGETS -->
    <script type="text/javascript" src="<?php echo base_url(). "assets/bootstrap/js/bootstrap.js"?>"></script>


    <script type="text/javascript" src="<?php echo base_url(). "assets/widgets/progressbar/progressbar.js"?>"></script>


    <script type="text/javascript" src="<?php echo base_url(). "assets/widgets/superclick/superclick.js"?>"></script>

    <!-- Input switch alternate -->

    <script type="text/javascript" src="<?php echo base_url(). "assets/widgets/input-switch/inputswitch-alt.js"?>"></script>

    <!-- Slim scroll -->

    <script type="text/javascript" src="<?php echo base_url(). "assets/widgets/slimscroll/slimscroll.js"?>"></script>

    <!-- Slidebars -->

    <script type="text/javascript" src="<?php echo base_url(). "assets/widgets/slidebars/slidebars.js"?>"></script>
    <script type="text/javascript" src="<?php echo base_url(). "assets/widgets/slidebars/slidebars-demo.js"?>"></script>

    <!-- PieGage -->

    <script type="text/javascript" src="<?php echo base_url(). "assets/widgets/charts/piegage/piegage.js"?>"></script>
    <script type="text/javascript" src="<?php echo base_url(). "assets/widgets/charts/piegage/piegage-demo.js"?>"></script>

    <!-- Screenfull -->

    <script type="text/javascript" src="<?php echo base_url(). "assets/widgets/screenfull/screenfull.js"?>"></script>

    <!-- Content box -->

    <script type="text/javascript" src="<?php echo base_url(). "assets/widgets/content-box/contentbox.js"?>"></script>

    <!-- Overlay -->

    <script type="text/javascript" src="<?php echo base_url(). "assets/widgets/overlay/overlay.js"?>"></script>

    <!-- Widgets init for demo -->

    <script type="text/javascript" src="<?php echo base_url(). "assets/js-init/widgets-init.js"?>"></script>

    <!-- Theme layout -->

    <script type="text/javascript" src="<?php echo base_url(). "assets/themes/admin/layout.js"?>"></script>

    <!-- Theme switcher -->

    <script type="text/javascript" src="<?php echo base_url(). "assets/widgets/theme-switcher/themeswitcher.js"?>"></script>

</div>
</body>
</html>