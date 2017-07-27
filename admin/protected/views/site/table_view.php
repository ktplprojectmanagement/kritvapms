<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | Buttons Datatable </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN LAYOUT FIRST STYLES -->
        <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
        <!-- END LAYOUT FIRST STYLES -->
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/layouts/layout5/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/layouts/layout5/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN CONTAINER -->
        <div class="wrapper">
            <!-- BEGIN HEADER -->
            <header class="page-header">
                <nav class="navbar mega-menu" role="navigation">
                    <div class="container-fluid">
                        <div class="clearfix navbar-fixed-top">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="toggle-icon">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </span>
                            </button>
                            <!-- End Toggle Button -->
                            <!-- BEGIN LOGO -->
                            <a id="index" class="page-logo" href="index.html">
                                <img src="../assets/layouts/layout5/img/logo.png" alt="Logo"> </a>
                            <!-- END LOGO -->
                            <!-- BEGIN SEARCH -->
                            <form class="search" action="extra_search.html" method="GET">
                                <input type="name" class="form-control" name="query" placeholder="Search...">
                                <a href="javascript:;" class="btn submit md-skip">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                            <!-- END SEARCH -->
                            <!-- BEGIN TOPBAR ACTIONS -->
                            <div class="topbar-actions">
                                <!-- BEGIN GROUP NOTIFICATION -->
                                <div class="btn-group-notification btn-group" id="header_notification_bar">
                                    <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <i class="icon-bell"></i>
                                        <span class="badge">7</span>
                                    </button>
                                    <ul class="dropdown-menu-v2">
                                        <li class="external">
                                            <h3>
                                                <span class="bold">12 pending</span> notifications</h3>
                                            <a href="#">view all</a>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu-list scroller" style="height: 250px; padding: 0;" data-handle-color="#637283">
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-success md-skip">
                                                                <i class="fa fa-plus"></i>
                                                            </span> New user registered. </span>
                                                        <span class="time">just now</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-danger md-skip">
                                                                <i class="fa fa-bolt"></i>
                                                            </span> Server #12 overloaded. </span>
                                                        <span class="time">3 mins</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-warning md-skip">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span> Server #2 not responding. </span>
                                                        <span class="time">10 mins</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-info md-skip">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </span> Application error. </span>
                                                        <span class="time">14 hrs</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-danger md-skip">
                                                                <i class="fa fa-bolt"></i>
                                                            </span> Database overloaded 68%. </span>
                                                        <span class="time">2 days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-danger md-skip">
                                                                <i class="fa fa-bolt"></i>
                                                            </span> A user IP blocked. </span>
                                                        <span class="time">3 days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-warning md-skip">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span> Storage Server #4 not responding dfdfdfd. </span>
                                                        <span class="time">4 days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-info md-skip">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </span> System Error. </span>
                                                        <span class="time">5 days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-danger md-skip">
                                                                <i class="fa fa-bolt"></i>
                                                            </span> Storage server failed. </span>
                                                        <span class="time">9 days</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END GROUP NOTIFICATION -->
                                <!-- BEGIN GROUP INFORMATION -->
                                <div class="btn-group-red btn-group">
                                    <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <ul class="dropdown-menu-v2" role="menu">
                                        <li class="active">
                                            <a href="#">New Post</a>
                                        </li>
                                        <li>
                                            <a href="#">New Comment</a>
                                        </li>
                                        <li>
                                            <a href="#">Share</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#">Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Feedbacks
                                                <span class="badge badge-danger">2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END GROUP INFORMATION -->
                                <!-- BEGIN USER PROFILE -->
                                <div class="btn-group-img btn-group">
                                    <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <span>Hi, Marcus</span>
                                        <img src="../assets/layouts/layout5/img/avatar1.jpg" alt=""> </button>
                                    <ul class="dropdown-menu-v2" role="menu">
                                        <li>
                                            <a href="page_user_profile_1.html">
                                                <i class="icon-user"></i> My Profile
                                                <span class="badge badge-danger">1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="app_calendar.html">
                                                <i class="icon-calendar"></i> My Calendar </a>
                                        </li>
                                        <li>
                                            <a href="app_inbox.html">
                                                <i class="icon-envelope-open"></i> My Inbox
                                                <span class="badge badge-danger"> 3 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="app_todo_2.html">
                                                <i class="icon-rocket"></i> My Tasks
                                                <span class="badge badge-success"> 7 </span>
                                            </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="page_user_lock_1.html">
                                                <i class="icon-lock"></i> Lock Screen </a>
                                        </li>
                                        <li>
                                            <a href="page_user_login_1.html">
                                                <i class="icon-key"></i> Log Out </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END USER PROFILE -->
                                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                <button type="button" class="quick-sidebar-toggler md-skip" data-toggle="collapse">
                                    <span class="sr-only">Toggle Quick Sidebar</span>
                                    <i class="icon-logout"></i>
                                </button>
                                <!-- END QUICK SIDEBAR TOGGLER -->
                            </div>
                            <!-- END TOPBAR ACTIONS -->
                        </div>
                        <!-- BEGIN HEADER MENU -->
                        <div class="nav-collapse collapse navbar-collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown dropdown-fw  ">
                                    <a href="javascript:;" class="text-uppercase">
                                        <i class="icon-home"></i> Dashboard </a>
                                    <ul class="dropdown-menu dropdown-menu-fw">
                                        <li>
                                            <a href="index.html">
                                                <i class="icon-bar-chart"></i> Default </a>
                                        </li>
                                        <li>
                                            <a href="dashboard_2.html">
                                                <i class="icon-bulb"></i> Dashboard 2 </a>
                                        </li>
                                        <li>
                                            <a href="dashboard_3.html">
                                                <i class="icon-graph"></i> Dashboard 3 </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-fw  ">
                                    <a href="javascript:;" class="text-uppercase">
                                        <i class="icon-puzzle"></i> Features </a>
                                    <ul class="dropdown-menu dropdown-menu-fw">
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-diamond"></i> UI Features </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="ui_colors.html"> Color Library </a>
                                                </li>
                                                <li>
                                                    <a href="ui_general.html"> General Components </a>
                                                </li>
                                                <li>
                                                    <a href="ui_buttons.html"> Buttons </a>
                                                </li>
                                                <li>
                                                    <a href="ui_buttons_spinner.html"> Spinner Buttons </a>
                                                </li>
                                                <li>
                                                    <a href="ui_confirmations.html"> Popover Confirmations </a>
                                                </li>
                                                <li>
                                                    <a href="ui_icons.html"> Font Icons </a>
                                                </li>
                                                <li>
                                                    <a href="ui_socicons.html"> Social Icons </a>
                                                </li>
                                                <li>
                                                    <a href="ui_typography.html"> Typography </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tabs_accordions_navs.html"> Tabs, Accordions & Navs </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tree.html"> Tree View </a>
                                                </li>
                                                <li>
                                                    <a href="ui_timeline.html"> Timeline 1 </a>
                                                </li>
                                                <li>
                                                    <a href="ui_timeline_2.html"> Timeline 2 </a>
                                                </li>
                                                <li>
                                                    <a href="ui_timeline_horizontal.html"> Horizontal Timeline </a>
                                                </li>
                                                <li>
                                                    <a href="ui_page_progress_style_1.html"> Page Progress Bar - Flash </a>
                                                </li>
                                                <li>
                                                    <a href="ui_page_progress_style_2.html"> Page Progress Bar - Big Counter </a>
                                                </li>
                                                <li>
                                                    <a href="ui_blockui.html"> Block UI </a>
                                                </li>
                                                <li>
                                                    <a href="ui_bootstrap_growl.html"> Bootstrap Growl Notifications </a>
                                                </li>
                                                <li>
                                                    <a href="ui_notific8.html"> Notific8 Notifications </a>
                                                </li>
                                                <li>
                                                    <a href="ui_toastr.html"> Toastr Notifications </a>
                                                </li>
                                                <li>
                                                    <a href="ui_bootbox.html"> Bootbox Dialogs </a>
                                                </li>
                                                <li>
                                                    <a href="ui_alerts_api.html"> Metronic Alerts API </a>
                                                </li>
                                                <li>
                                                    <a href="ui_session_timeout.html"> Session Timeout </a>
                                                </li>
                                                <li>
                                                    <a href="ui_idle_timeout.html"> User Idle Timeout </a>
                                                </li>
                                                <li>
                                                    <a href="ui_modals.html"> Modals </a>
                                                </li>
                                                <li>
                                                    <a href="ui_extended_modals.html"> Extended Modals </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tiles.html"> Tiles </a>
                                                </li>
                                                <li>
                                                    <a href="ui_timeline.html"> Timeline </a>
                                                </li>
                                                <li>
                                                    <a href="ui_datepaginator.html"> Date Paginator </a>
                                                </li>
                                                <li>
                                                    <a href="ui_nestable.html"> Nestable List </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-puzzle"></i> Components </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="components_date_time_pickers.html"> Date & Time Pickers </a>
                                                </li>
                                                <li>
                                                    <a href="components_color_pickers.html"> Color Pickers </a>
                                                </li>
                                                <li>
                                                    <a href="components_select2.html"> Select2 Dropdowns </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_select.html"> Bootstrap Select </a>
                                                </li>
                                                <li>
                                                    <a href="components_multi_select.html"> Multi Select </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_select_splitter.html"> Select Splitter </a>
                                                </li>
                                                <li>
                                                    <a href="components_typeahead.html"> Typeahead Autocomplete </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_tagsinput.html"> Bootstrap Tagsinput </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_switch.html"> Bootstrap Switch </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_maxlength.html"> Bootstrap Maxlength </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_fileinput.html"> Bootstrap File Input </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_touchspin.html"> Bootstrap Touchspin </a>
                                                </li>
                                                <li>
                                                    <a href="components_form_tools.html"> Form Widgets & Tools </a>
                                                </li>
                                                <li>
                                                    <a href="components_context_menu.html"> Context Menu </a>
                                                </li>
                                                <li>
                                                    <a href="components_editors.html"> Markdown & WYSIWYG Editors </a>
                                                </li>
                                                <li>
                                                    <a href="components_code_editors.html"> Code Editors </a>
                                                </li>
                                                <li>
                                                    <a href="components_ion_sliders.html"> Ion Range Sliders </a>
                                                </li>
                                                <li>
                                                    <a href="components_noui_sliders.html"> NoUI Range Sliders </a>
                                                </li>
                                                <li>
                                                    <a href="components_knob_dials.html"> Knob Circle Dials </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-settings"></i> Form Stuff </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="form_controls.html"> Bootstrap Form
                                                        <br>Controls </a>
                                                </li>
                                                <li>
                                                    <a href="form_controls_md.html"> Material Design
                                                        <br>Form Controls </a>
                                                </li>
                                                <li>
                                                    <a href="form_validation.html"> Form Validation </a>
                                                </li>
                                                <li>
                                                    <a href="form_validation_states_md.html"> Material Design
                                                        <br>Form Validation States </a>
                                                </li>
                                                <li>
                                                    <a href="form_validation_md.html"> Material Design
                                                        <br>Form Validation </a>
                                                </li>
                                                <li>
                                                    <a href="form_layouts.html"> Form Layouts </a>
                                                </li>
                                                <li>
                                                    <a href="form_input_mask.html"> Form Input Mask </a>
                                                </li>
                                                <li>
                                                    <a href="form_editable.html"> Form X-editable </a>
                                                </li>
                                                <li>
                                                    <a href="form_wizard.html"> Form Wizard </a>
                                                </li>
                                                <li>
                                                    <a href="form_icheck.html"> iCheck Controls </a>
                                                </li>
                                                <li>
                                                    <a href="form_image_crop.html"> Image Cropping </a>
                                                </li>
                                                <li>
                                                    <a href="form_fileupload.html"> Multiple File Upload </a>
                                                </li>
                                                <li>
                                                    <a href="form_dropzone.html"> Dropzone File Upload </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="?p=">
                                                <i class="icon-wallet"></i> Portlets </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="portlet_boxed.html"> Boxed Portlets </a>
                                                </li>
                                                <li>
                                                    <a href="portlet_light.html"> Light Portlets </a>
                                                </li>
                                                <li>
                                                    <a href="portlet_solid.html"> Solid Portlets </a>
                                                </li>
                                                <li>
                                                    <a href="portlet_ajax.html"> Ajax Portlets </a>
                                                </li>
                                                <li>
                                                    <a href="portlet_draggable.html"> Draggable Portlets </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-bar-chart"></i> Charts </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="charts_amcharts.html"> amChart </a>
                                                </li>
                                                <li>
                                                    <a href="charts_flotcharts.html"> Flot Charts </a>
                                                </li>
                                                <li>
                                                    <a href="charts_flowchart.html"> Flow Charts </a>
                                                </li>
                                                <li>
                                                    <a href="charts_google.html"> Google Charts </a>
                                                </li>
                                                <li>
                                                    <a href="charts_echarts.html"> eCharts </a>
                                                </li>
                                                <li>
                                                    <a href="charts_morris.html"> Morris Charts </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"> HighCharts </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-cloud-upload"></i> Elements </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="elements_steps.html"> Steps </a>
                                                </li>
                                                <li>
                                                    <a href="elements_lists.html"> Lists </a>
                                                </li>
                                                <li>
                                                    <a href="elements_ribbons.html"> Ribbons </a>
                                                </li>
                                                <li>
                                                    <a href="elements_overlay.html"> Overlays </a>
                                                </li>
                                                <li>
                                                    <a href="elements_cards.html"> User Cards </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-pointer"></i> Maps </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="maps_google.html"> Google Maps </a>
                                                </li>
                                                <li>
                                                    <a href="maps_vector.html"> Vector Maps </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-fw  active open selected">
                                    <a href="javascript:;" class="text-uppercase">
                                        <i class="icon-briefcase"></i> Tables </a>
                                    <ul class="dropdown-menu dropdown-menu-fw">
                                        <li>
                                            <a href="table_static_basic.html"> Basic Tables </a>
                                        </li>
                                        <li>
                                            <a href="table_static_responsive.html"> Responsive Tables </a>
                                        </li>
                                        <li>
                                            <a href="table_bootstrap.html"> Bootstrap Tables </a>
                                        </li>
                                        <li class="dropdown more-dropdown-sub active">
                                            <a href="javascript:;"> Datatables </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="table_datatables_managed.html"> Managed Datatables </a>
                                                </li>
                                                <li class="active">
                                                    <a href="table_datatables_buttons.html"> Buttons Extension </a>
                                                </li>
                                                <li>
                                                    <a href="table_datatables_colreorder.html"> Colreorder Extension </a>
                                                </li>
                                                <li>
                                                    <a href="table_datatables_rowreorder.html"> Rowreorder Extension </a>
                                                </li>
                                                <li>
                                                    <a href="table_datatables_scroller.html"> Scroller Extension </a>
                                                </li>
                                                <li>
                                                    <a href="table_datatables_fixedheader.html"> FixedHeader Extension </a>
                                                </li>
                                                <li>
                                                    <a href="table_datatables_responsive.html"> Responsive Extension </a>
                                                </li>
                                                <li>
                                                    <a href="table_datatables_editable.html"> Editable Datatables </a>
                                                </li>
                                                <li>
                                                    <a href="table_datatables_ajax.html"> Ajax Datatables </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-fw  ">
                                    <a href="javascript:;" class="text-uppercase">
                                        <i class="icon-layers"></i> Pages </a>
                                    <ul class="dropdown-menu dropdown-menu-fw">
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-basket"></i> eCommerce </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="ecommerce_index.html">
                                                        <i class="icon-home"></i> Dashboard </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_orders.html">
                                                        <i class="icon-basket"></i> Orders </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_orders_view.html">
                                                        <i class="icon-tag"></i> Order View </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_products.html">
                                                        <i class="icon-graph"></i> Products </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_products_edit.html">
                                                        <i class="icon-graph"></i> Product Edit </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> Apps </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="app_todo.html">
                                                        <i class="icon-clock"></i> Todo 1 </a>
                                                </li>
                                                <li>
                                                    <a href="app_todo_2.html">
                                                        <i class="icon-check"></i> Todo 2 </a>
                                                </li>
                                                <li>
                                                    <a href="app_inbox.html">
                                                        <i class="icon-envelope"></i> Inbox </a>
                                                </li>
                                                <li>
                                                    <a href="app_calendar.html">
                                                        <i class="icon-calendar"></i> Calendar </a>
                                                </li>
                                                <li>
                                                    <a href="app_ticket.html">
                                                        <i class="icon-notebook"></i> Support </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> User </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="page_user_profile_1.html"> Profile 1 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_profile_1_account.html"> Profile 1 Account </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_profile_1_help.html"> Profile 1 Help </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_profile_2.html"> Profile 2 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_login_1.html"> Login Page 1 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_login_2.html"> Login Page 2 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_login_3.html"> Login Page 3 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_login_4.html"> Login Page 4 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_login_5.html"> Login Page 5 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_login_6.html"> Login Page 6 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_lock_1.html"> Lock Screen 1 </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_lock_2.html"> Lock Screen 2 </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-social-dribbble"></i> General </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="page_general_about.html"> About </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_contact.html"> Contact </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_portfolio_1.html"> Portfolio 1 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_portfolio_2.html"> Portfolio 2 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_portfolio_3.html"> Portfolio 3 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_portfolio_4.html"> Portfolio 4 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_search.html"> Search 1 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_search_2.html"> Search 2 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_search_3.html"> Search 3 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_search_4.html"> Search 4 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_search_5.html"> Search 5 </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_pricing.html"> Pricing </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_faq.html"> FAQ </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_blog.html"> Blog </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_blog_post.html"> Blog Post </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_invoice.html"> Invoice </a>
                                                </li>
                                                <li>
                                                    <a href="page_general_invoice_2.html"> Invoice 2 </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-settings"></i> System </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="layout_blank_page.html"> Blank Page </a>
                                                </li>
                                                <li>
                                                    <a href="page_system_coming_soon.html"> Coming Soon </a>
                                                </li>
                                                <li>
                                                    <a href="page_system_404_1.html"> 404 Page 1 </a>
                                                </li>
                                                <li>
                                                    <a href="page_system_404_2.html"> 404 Page 2 </a>
                                                </li>
                                                <li>
                                                    <a href="page_system_404_3.html"> 404 Page 3 </a>
                                                </li>
                                                <li>
                                                    <a href="page_system_500_1.html"> 500 Page 1 </a>
                                                </li>
                                                <li>
                                                    <a href="page_system_500_2.html"> 500 Page 2 </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown more-dropdown">
                                    <a href="javascript:;" class="text-uppercase"> More </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Link 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Link 2</a>
                                        </li>
                                        <li>
                                            <a href="#">Link 3</a>
                                        </li>
                                        <li>
                                            <a href="#">Link 4</a>
                                        </li>
                                        <li>
                                            <a href="#">Link 5</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!--/container-->
                </nav>
            </header>
            <!-- END HEADER -->
            <div class="container-fluid">
                <div class="page-content">
                    <!-- BEGIN BREADCRUMBS -->
                    <div class="breadcrumbs">
                        <h1>Buttons Datatable </h1>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                            </li>
                            <li class="active">Datatables</li>
                        </ol>
                        <!-- Sidebar Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".page-sidebar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>
                        <!-- Sidebar Toggle Button -->
                    </div>
                    <!-- END BREADCRUMBS -->
                    <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
                    <div class="page-content-container">
                        <div class="page-content-row">
                            <!-- BEGIN PAGE SIDEBAR -->
                            <div class="page-sidebar">
                                <nav class="navbar" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <ul class="nav navbar-nav margin-bottom-35">
                                        <li class="active">
                                            <a href="index.html">
                                                <i class="icon-home"></i> Home </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-note "></i> Reports </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-user"></i> User Activity </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-basket "></i> Marketplace </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-bell"></i> Templates </a>
                                        </li>
                                    </ul>
                                    <h3>Quick Actions</h3>
                                    <ul class="nav navbar-nav">
                                        <li>
                                            <a href="#">
                                                <i class="icon-envelope "></i> Inbox
                                                <label class="label label-danger">New</label>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-paper-clip "></i> Task </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-star"></i> Projects </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-pin"></i> Events
                                                <span class="badge badge-success">2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- END PAGE SIDEBAR -->
                            <div class="page-content-col">
                                <!-- BEGIN PAGE BASE CONTENT -->
                                <div class="m-heading-1 border-green m-bordered">
                                    <h3>DataTables Buttons Extension</h3>
                                    <p> A common UI paradigm to use with interactive tables is to present buttons that will trigger some action - that may be to alter the table's state, modify the data in the table, gather the data from the table or even
                                        to activate some external process. Showing such buttons is an interface that end users are comfortable with, making them feel at home with the table. </p>
                                    <p> For more info please check out
                                        <a class="btn red btn-outline" href="http://datatables.net/extensions/buttons/" target="_blank">the official documentation</a>
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-dark">
                                                    <i class="icon-settings font-dark"></i>
                                                    <span class="caption-subject bold uppercase">Buttons</span>
                                                </div>
                                                <div class="tools"> </div>
                                            </div>
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover" id="sample_1">
                                                    <thead>
                                                        <tr>
                                                            <th> Rendering engine </th>
                                                            <th> Browser </th>
                                                            <th> Platform(s) </th>
                                                            <th> Engine version </th>
                                                            <th> CSS grade </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> Internet Explorer 4.0 </td>
                                                            <td> Win 95+ </td>
                                                            <td> 4 </td>
                                                            <td> X </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> Internet Explorer 5.0 </td>
                                                            <td> Win 95+ </td>
                                                            <td> 5 </td>
                                                            <td> C </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> Internet Explorer 5.5 </td>
                                                            <td> Win 95+ </td>
                                                            <td> 5.5 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> Internet Explorer 6 </td>
                                                            <td> Win 98+ </td>
                                                            <td> 6 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> Internet Explorer 7 </td>
                                                            <td> Win XP SP2+ </td>
                                                            <td> 7 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> AOL browser (AOL desktop) </td>
                                                            <td> Win XP </td>
                                                            <td> 6 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Firefox 1.0 </td>
                                                            <td> Win 98+ / OSX.2+ </td>
                                                            <td> 1.7 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Firefox 1.5 </td>
                                                            <td> Win 98+ / OSX.2+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Firefox 2.0 </td>
                                                            <td> Win 98+ / OSX.2+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Firefox 3.0 </td>
                                                            <td> Win 2k+ / OSX.3+ </td>
                                                            <td> 1.9 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Camino 1.0 </td>
                                                            <td> OSX.2+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Camino 1.5 </td>
                                                            <td> OSX.3+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Netscape 7.2 </td>
                                                            <td> Win 95+ / Mac OS 8.6-9.2 </td>
                                                            <td> 1.7 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Netscape Browser 8 </td>
                                                            <td> Win 98SE+ </td>
                                                            <td> 1.7 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Netscape Navigator 9 </td>
                                                            <td> Win 98+ / OSX.2+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.0 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.1 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.1 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.2 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.2 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.3 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.3 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.4 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.4 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.5 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.5 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.6 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.6 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.7 </td>
                                                            <td> Win 98+ / OSX.1+ </td>
                                                            <td> 1.7 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.8 </td>
                                                            <td> Win 98+ / OSX.1+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Seamonkey 1.1 </td>
                                                            <td> Win 98+ / OSX.2+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Epiphany 2.20 </td>
                                                            <td> Gnome </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> Safari 1.2 </td>
                                                            <td> OSX.3 </td>
                                                            <td> 125.5 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> Safari 1.3 </td>
                                                            <td> OSX.3 </td>
                                                            <td> 312.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> Safari 2.0 </td>
                                                            <td> OSX.4+ </td>
                                                            <td> 419.3 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> Safari 3.0 </td>
                                                            <td> OSX.4+ </td>
                                                            <td> 522.1 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> OmniWeb 5.5 </td>
                                                            <td> OSX.4+ </td>
                                                            <td> 420 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> iPod Touch / iPhone </td>
                                                            <td> iPod </td>
                                                            <td> 420.1 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> S60 </td>
                                                            <td> S60 </td>
                                                            <td> 413 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 7.0 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 7.5 </td>
                                                            <td> Win 95+ / OSX.2+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 8.0 </td>
                                                            <td> Win 95+ / OSX.2+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 8.5 </td>
                                                            <td> Win 95+ / OSX.2+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 9.0 </td>
                                                            <td> Win 95+ / OSX.3+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 9.2 </td>
                                                            <td> Win 88+ / OSX.3+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 9.5 </td>
                                                            <td> Win 88+ / OSX.3+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera for Wii </td>
                                                            <td> Wii </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Nokia N800 </td>
                                                            <td> N800 </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Nintendo DS browser </td>
                                                            <td> Nintendo DS </td>
                                                            <td> 8.5 </td>
                                                            <td> C/A
                                                                <sup>1</sup>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END EXAMPLE TABLE PORTLET-->
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                        <div class="portlet box green">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-globe"></i>Buttons </div>
                                                <div class="tools"> </div>
                                            </div>
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover" id="sample_2">
                                                    <thead>
                                                        <tr>
                                                            <th> Rendering engine </th>
                                                            <th> Browser </th>
                                                            <th> Platform(s) </th>
                                                            <th> Engine version </th>
                                                            <th> CSS grade </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> Internet Explorer 4.0 </td>
                                                            <td> Win 95+ </td>
                                                            <td> 4 </td>
                                                            <td> X </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> Internet Explorer 5.0 </td>
                                                            <td> Win 95+ </td>
                                                            <td> 5 </td>
                                                            <td> C </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> Internet Explorer 5.5 </td>
                                                            <td> Win 95+ </td>
                                                            <td> 5.5 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> Internet Explorer 6 </td>
                                                            <td> Win 98+ </td>
                                                            <td> 6 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> Internet Explorer 7 </td>
                                                            <td> Win XP SP2+ </td>
                                                            <td> 7 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> AOL browser (AOL desktop) </td>
                                                            <td> Win XP </td>
                                                            <td> 6 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Firefox 1.0 </td>
                                                            <td> Win 98+ / OSX.2+ </td>
                                                            <td> 1.7 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Firefox 1.5 </td>
                                                            <td> Win 98+ / OSX.2+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Firefox 2.0 </td>
                                                            <td> Win 98+ / OSX.2+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Firefox 3.0 </td>
                                                            <td> Win 2k+ / OSX.3+ </td>
                                                            <td> 1.9 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Camino 1.0 </td>
                                                            <td> OSX.2+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Camino 1.5 </td>
                                                            <td> OSX.3+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Netscape 7.2 </td>
                                                            <td> Win 95+ / Mac OS 8.6-9.2 </td>
                                                            <td> 1.7 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Netscape Browser 8 </td>
                                                            <td> Win 98SE+ </td>
                                                            <td> 1.7 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Netscape Navigator 9 </td>
                                                            <td> Win 98+ / OSX.2+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.0 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.1 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.1 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.2 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.2 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.3 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.3 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.4 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.4 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.5 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.5 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.6 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.6 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.7 </td>
                                                            <td> Win 98+ / OSX.1+ </td>
                                                            <td> 1.7 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.8 </td>
                                                            <td> Win 98+ / OSX.1+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Seamonkey 1.1 </td>
                                                            <td> Win 98+ / OSX.2+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Epiphany 2.20 </td>
                                                            <td> Gnome </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> Safari 1.2 </td>
                                                            <td> OSX.3 </td>
                                                            <td> 125.5 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> Safari 1.3 </td>
                                                            <td> OSX.3 </td>
                                                            <td> 312.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> Safari 2.0 </td>
                                                            <td> OSX.4+ </td>
                                                            <td> 419.3 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> Safari 3.0 </td>
                                                            <td> OSX.4+ </td>
                                                            <td> 522.1 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> OmniWeb 5.5 </td>
                                                            <td> OSX.4+ </td>
                                                            <td> 420 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> iPod Touch / iPhone </td>
                                                            <td> iPod </td>
                                                            <td> 420.1 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> S60 </td>
                                                            <td> S60 </td>
                                                            <td> 413 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 7.0 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 7.5 </td>
                                                            <td> Win 95+ / OSX.2+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 8.0 </td>
                                                            <td> Win 95+ / OSX.2+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 8.5 </td>
                                                            <td> Win 95+ / OSX.2+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 9.0 </td>
                                                            <td> Win 95+ / OSX.3+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 9.2 </td>
                                                            <td> Win 88+ / OSX.3+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 9.5 </td>
                                                            <td> Win 88+ / OSX.3+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera for Wii </td>
                                                            <td> Wii </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Nokia N800 </td>
                                                            <td> N800 </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Nintendo DS browser </td>
                                                            <td> Nintendo DS </td>
                                                            <td> 8.5 </td>
                                                            <td> C/A
                                                                <sup>1</sup>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END EXAMPLE TABLE PORTLET-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Begin: life time stats -->
                                        <div class="portlet light portlet-fit portlet-datatable bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-settings font-green"></i>
                                                    <span class="caption-subject font-green sbold uppercase">Trigger Tools From Dropdown Menu</span>
                                                </div>
                                                <div class="actions">
                                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                        <label class="btn btn-transparent grey-salsa btn-outline btn-circle btn-sm active">
                                                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                        <label class="btn btn-transparent grey-salsa btn-outline btn-circle btn-sm">
                                                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a class="btn red btn-outline btn-circle" href="javascript:;" data-toggle="dropdown">
                                                            <i class="fa fa-share"></i>
                                                            <span class="hidden-xs"> Trigger Tools </span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right" id="sample_3_tools">
                                                            <li>
                                                                <a href="javascript:;" data-action="0" class="tool-action">
                                                                    <i class="icon-printer"></i> Print</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-action="1" class="tool-action">
                                                                    <i class="icon-check"></i> Copy</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-action="2" class="tool-action">
                                                                    <i class="icon-doc"></i> PDF</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-action="3" class="tool-action">
                                                                    <i class="icon-paper-clip"></i> Excel</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-action="4" class="tool-action">
                                                                    <i class="icon-cloud-upload"></i> CSV</a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;" data-action="5" class="tool-action">
                                                                    <i class="icon-refresh"></i> Reload</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-container">
                                                    <table class="table table-striped table-bordered table-hover" id="sample_3">
                                                        <thead>
                                                            <tr>
                                                                <th> Rendering engine </th>
                                                                <th> Browser </th>
                                                                <th> Platform(s) </th>
                                                                <th> Engine version </th>
                                                                <th> CSS grade </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td> Trident </td>
                                                                <td> Internet Explorer 4.0 </td>
                                                                <td> Win 95+ </td>
                                                                <td> 4 </td>
                                                                <td> X </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Trident </td>
                                                                <td> Internet Explorer 5.0 </td>
                                                                <td> Win 95+ </td>
                                                                <td> 5 </td>
                                                                <td> C </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Trident </td>
                                                                <td> Internet Explorer 5.5 </td>
                                                                <td> Win 95+ </td>
                                                                <td> 5.5 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Trident </td>
                                                                <td> Internet Explorer 6 </td>
                                                                <td> Win 98+ </td>
                                                                <td> 6 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Trident </td>
                                                                <td> Internet Explorer 7 </td>
                                                                <td> Win XP SP2+ </td>
                                                                <td> 7 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Trident </td>
                                                                <td> AOL browser (AOL desktop) </td>
                                                                <td> Win XP </td>
                                                                <td> 6 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Firefox 1.0 </td>
                                                                <td> Win 98+ / OSX.2+ </td>
                                                                <td> 1.7 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Firefox 1.5 </td>
                                                                <td> Win 98+ / OSX.2+ </td>
                                                                <td> 1.8 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Firefox 2.0 </td>
                                                                <td> Win 98+ / OSX.2+ </td>
                                                                <td> 1.8 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Firefox 3.0 </td>
                                                                <td> Win 2k+ / OSX.3+ </td>
                                                                <td> 1.9 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Camino 1.0 </td>
                                                                <td> OSX.2+ </td>
                                                                <td> 1.8 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Camino 1.5 </td>
                                                                <td> OSX.3+ </td>
                                                                <td> 1.8 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Netscape 7.2 </td>
                                                                <td> Win 95+ / Mac OS 8.6-9.2 </td>
                                                                <td> 1.7 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Netscape Browser 8 </td>
                                                                <td> Win 98SE+ </td>
                                                                <td> 1.7 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Netscape Navigator 9 </td>
                                                                <td> Win 98+ / OSX.2+ </td>
                                                                <td> 1.8 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Mozilla 1.0 </td>
                                                                <td> Win 95+ / OSX.1+ </td>
                                                                <td> 1 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Mozilla 1.1 </td>
                                                                <td> Win 95+ / OSX.1+ </td>
                                                                <td> 1.1 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Mozilla 1.2 </td>
                                                                <td> Win 95+ / OSX.1+ </td>
                                                                <td> 1.2 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Mozilla 1.3 </td>
                                                                <td> Win 95+ / OSX.1+ </td>
                                                                <td> 1.3 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Mozilla 1.4 </td>
                                                                <td> Win 95+ / OSX.1+ </td>
                                                                <td> 1.4 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Mozilla 1.5 </td>
                                                                <td> Win 95+ / OSX.1+ </td>
                                                                <td> 1.5 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Mozilla 1.6 </td>
                                                                <td> Win 95+ / OSX.1+ </td>
                                                                <td> 1.6 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Mozilla 1.7 </td>
                                                                <td> Win 98+ / OSX.1+ </td>
                                                                <td> 1.7 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Mozilla 1.8 </td>
                                                                <td> Win 98+ / OSX.1+ </td>
                                                                <td> 1.8 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Seamonkey 1.1 </td>
                                                                <td> Win 98+ / OSX.2+ </td>
                                                                <td> 1.8 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gecko </td>
                                                                <td> Epiphany 2.20 </td>
                                                                <td> Gnome </td>
                                                                <td> 1.8 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Webkit </td>
                                                                <td> Safari 1.2 </td>
                                                                <td> OSX.3 </td>
                                                                <td> 125.5 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Webkit </td>
                                                                <td> Safari 1.3 </td>
                                                                <td> OSX.3 </td>
                                                                <td> 312.8 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Webkit </td>
                                                                <td> Safari 2.0 </td>
                                                                <td> OSX.4+ </td>
                                                                <td> 419.3 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Webkit </td>
                                                                <td> Safari 3.0 </td>
                                                                <td> OSX.4+ </td>
                                                                <td> 522.1 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Webkit </td>
                                                                <td> OmniWeb 5.5 </td>
                                                                <td> OSX.4+ </td>
                                                                <td> 420 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Webkit </td>
                                                                <td> iPod Touch / iPhone </td>
                                                                <td> iPod </td>
                                                                <td> 420.1 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Webkit </td>
                                                                <td> S60 </td>
                                                                <td> S60 </td>
                                                                <td> 413 </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Presto </td>
                                                                <td> Opera 7.0 </td>
                                                                <td> Win 95+ / OSX.1+ </td>
                                                                <td> - </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Presto </td>
                                                                <td> Opera 7.5 </td>
                                                                <td> Win 95+ / OSX.2+ </td>
                                                                <td> - </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Presto </td>
                                                                <td> Opera 8.0 </td>
                                                                <td> Win 95+ / OSX.2+ </td>
                                                                <td> - </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Presto </td>
                                                                <td> Opera 8.5 </td>
                                                                <td> Win 95+ / OSX.2+ </td>
                                                                <td> - </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Presto </td>
                                                                <td> Opera 9.0 </td>
                                                                <td> Win 95+ / OSX.3+ </td>
                                                                <td> - </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Presto </td>
                                                                <td> Opera 9.2 </td>
                                                                <td> Win 88+ / OSX.3+ </td>
                                                                <td> - </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Presto </td>
                                                                <td> Opera 9.5 </td>
                                                                <td> Win 88+ / OSX.3+ </td>
                                                                <td> - </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Presto </td>
                                                                <td> Opera for Wii </td>
                                                                <td> Wii </td>
                                                                <td> - </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Presto </td>
                                                                <td> Nokia N800 </td>
                                                                <td> N800 </td>
                                                                <td> - </td>
                                                                <td> A </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Presto </td>
                                                                <td> Nintendo DS browser </td>
                                                                <td> Nintendo DS </td>
                                                                <td> 8.5 </td>
                                                                <td> C/A
                                                                    <sup>1</sup>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End: life time stats -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="note note-danger">
                                            <p> NOTE: The below datatable is not connected to a real database so the filter and sorting is just simulated for demo purposes only. </p>
                                        </div>
                                        <!-- Begin: life time stats -->
                                        <div class="portlet light portlet-fit portlet-datatable bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-settings font-dark"></i>
                                                    <span class="caption-subject font-dark sbold uppercase">Ajax Datatable</span>
                                                </div>
                                                <div class="actions">
                                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                        <label class="btn btn-transparent grey-salsa btn-outline btn-circle btn-sm active">
                                                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                        <label class="btn btn-transparent grey-salsa btn-outline btn-circle btn-sm">
                                                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a class="btn red btn-outline btn-circle" href="javascript:;" data-toggle="dropdown">
                                                            <i class="fa fa-share"></i>
                                                            <span class="hidden-xs"> Tools </span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right" id="datatable_ajax_tools">
                                                            <li>
                                                                <a href="javascript:;" data-action="0" class="tool-action">
                                                                    <i class="icon-printer"></i> Print</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-action="1" class="tool-action">
                                                                    <i class="icon-check"></i> Copy</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-action="2" class="tool-action">
                                                                    <i class="icon-doc"></i> PDF</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-action="3" class="tool-action">
                                                                    <i class="icon-paper-clip"></i> Excel</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-action="4" class="tool-action">
                                                                    <i class="icon-cloud-upload"></i> CSV</a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;" data-action="5" class="tool-action">
                                                                    <i class="icon-refresh"></i> Reload</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-container">
                                                    <div class="table-actions-wrapper">
                                                        <span> </span>
                                                        <select class="table-group-action-input form-control input-inline input-small input-sm">
                                                            <option value="">Select...</option>
                                                            <option value="Cancel">Cancel</option>
                                                            <option value="Cancel">Hold</option>
                                                            <option value="Cancel">On Hold</option>
                                                            <option value="Close">Close</option>
                                                        </select>
                                                        <button class="btn btn-sm green table-group-action-submit">
                                                            <i class="fa fa-check"></i> Submit</button>
                                                    </div>
                                                    <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_ajax">
                                                        <thead>
                                                            <tr role="row" class="heading">
                                                                <th width="2%">
                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                        <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />
                                                                        <span></span>
                                                                    </label>
                                                                </th>
                                                                <th width="5%"> Record&nbsp;# </th>
                                                                <th width="15%"> Date </th>
                                                                <th width="200"> Customer </th>
                                                                <th width="10%"> Ship&nbsp;To </th>
                                                                <th width="10%"> Price </th>
                                                                <th width="10%"> Amount </th>
                                                                <th width="10%"> Status </th>
                                                                <th width="10%"> Actions </th>
                                                            </tr>
                                                            <tr role="row" class="filter">
                                                                <td> </td>
                                                                <td>
                                                                    <input type="text" class="form-control form-filter input-sm" name="order_id"> </td>
                                                                <td>
                                                                    <div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
                                                                        <input type="text" class="form-control form-filter input-sm" readonly name="order_date_from" placeholder="From">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn btn-sm default" type="button">
                                                                                <i class="fa fa-calendar"></i>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                    <div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
                                                                        <input type="text" class="form-control form-filter input-sm" readonly name="order_date_to" placeholder="To">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn btn-sm default" type="button">
                                                                                <i class="fa fa-calendar"></i>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control form-filter input-sm" name="order_customer_name"> </td>
                                                                <td>
                                                                    <input type="text" class="form-control form-filter input-sm" name="order_ship_to"> </td>
                                                                <td>
                                                                    <div class="margin-bottom-5">
                                                                        <input type="text" class="form-control form-filter input-sm" name="order_price_from" placeholder="From" /> </div>
                                                                    <input type="text" class="form-control form-filter input-sm" name="order_price_to" placeholder="To" /> </td>
                                                                <td>
                                                                    <div class="margin-bottom-5">
                                                                        <input type="text" class="form-control form-filter input-sm margin-bottom-5 clearfix" name="order_quantity_from" placeholder="From" /> </div>
                                                                    <input type="text" class="form-control form-filter input-sm" name="order_quantity_to" placeholder="To" /> </td>
                                                                <td>
                                                                    <select name="order_status" class="form-control form-filter input-sm">
                                                                        <option value="">Select...</option>
                                                                        <option value="pending">Pending</option>
                                                                        <option value="closed">Closed</option>
                                                                        <option value="hold">On Hold</option>
                                                                        <option value="fraud">Fraud</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <div class="margin-bottom-5">
                                                                        <button class="btn btn-sm green btn-outline filter-submit margin-bottom">
                                                                            <i class="fa fa-search"></i> Search</button>
                                                                    </div>
                                                                    <button class="btn btn-sm red btn-outline filter-cancel">
                                                                        <i class="fa fa-times"></i> Reset</button>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody> </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End: life time stats -->
                                    </div>
                                </div>
                                <!-- END PAGE BASE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END SIDEBAR CONTENT LAYOUT -->
                </div>
                <!-- BEGIN FOOTER -->
                <p class="copyright">2015 © Metronic by keenthemes.
                    <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                </p>
                <a href="#index" class="go2top">
                    <i class="icon-arrow-up"></i>
                </a>
                <!-- END FOOTER -->
            </div>
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
            <div class="page-quick-sidebar">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                            <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                            <span class="badge badge-success">7</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-bell"></i> Alerts </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-info"></i> Notifications </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-speech"></i> Activities </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-settings"></i> Settings </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                            <h3 class="list-heading">Staff</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">8</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Bob Nilson</h4>
                                        <div class="media-heading-sub"> Project Manager </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Nick Larson</h4>
                                        <div class="media-heading-sub"> Art Director </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">3</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Hubert</h4>
                                        <div class="media-heading-sub"> CTO </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ella Wong</h4>
                                        <div class="media-heading-sub"> CEO </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="list-heading">Customers</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">2</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lara Kunis</h4>
                                        <div class="media-heading-sub"> CEO, Loop Inc </div>
                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="label label-sm label-success">new</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ernie Kyllonen</h4>
                                        <div class="media-heading-sub"> Project Manager,
                                            <br> SmartBizz PTL </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lisa Stone</h4>
                                        <div class="media-heading-sub"> CTO, Keort Inc </div>
                                        <div class="media-heading-small"> Last seen 13:10 PM </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">7</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Portalatin</h4>
                                        <div class="media-heading-sub"> CFO, H&D LTD </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Irina Savikova</h4>
                                        <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">4</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Maria Gomez</h4>
                                        <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="page-quick-sidebar-item">
                            <div class="page-quick-sidebar-chat-user">
                                <div class="page-quick-sidebar-nav">
                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                        <i class="icon-arrow-left"></i>Back</a>
                                </div>
                                <div class="page-quick-sidebar-chat-user-messages">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> When could you send me the report ? </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> Its almost done. I will be sending it shortly </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> Alright. Thanks! :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:16</span>
                                            <span class="body"> You are most welcome. Sorry for the delay. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> No probs. Just take your time :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body"> Alright. I just emailed it to you. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> Great! Thanks. Will check it right away. </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body"> Please let me know if you have any comment. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-quick-sidebar-chat-user-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn green">
                                                <i class="icon-paper-clip"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                        <div class="page-quick-sidebar-alerts-list">
                            <h3 class="list-heading">General</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                    <span class="label label-sm label-warning "> Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-warning"> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h3 class="list-heading">System</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                    <span class="label label-sm label-warning "> Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-default "> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                        <div class="page-quick-sidebar-settings-list">
                            <h3 class="list-heading">General Settings</h3>
                            <ul class="list-items borderless">
                                <li> Enable Notifications
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Allow Tracking
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Log Errors
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Auto Sumbit Issues
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Enable SMS Alerts
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            </ul>
                            <h3 class="list-heading">System Settings</h3>
                            <ul class="list-items borderless">
                                <li> Security Level
                                    <select class="form-control input-inline input-sm input-small">
                                        <option value="1">Normal</option>
                                        <option value="2" selected>Medium</option>
                                        <option value="e">High</option>
                                    </select>
                                </li>
                                <li> Failed Email Attempts
                                    <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                <li> Secondary SMTP Port
                                    <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                <li> Notify On System Error
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Notify On SMTP Error
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            </ul>
                            <div class="inner-content">
                                <button class="btn btn-success">
                                    <i class="icon-settings"></i> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
       
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
        
    </body>

</html>