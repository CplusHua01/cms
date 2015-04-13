<!DOCTYPE html>
<html>

<head>
    <title>
        {$title}
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />-->
    <link href="{$url.userStyle}stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/style.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" /><link href="{$url.userStyle}stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" /><link href="{$url.userStyle}stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" /><link href="{$url.userStyle}stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />
    <script src="{$url.userStyle}javascripts/jquery.min.js" type="text/javascript"></script>
    <script src="{$url.userStyle}javascripts/jquery-ui.js" type="text/javascript"></script>
    <script src="{$url.userStyle}javascripts/bootstrap.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/raphael.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/selectivizr-min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.mousewheel.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.vmap.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.vmap.world.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script>
    <script src="{$url.userStyle}javascripts/fullcalendar.min.js" type="text/javascript"></script>
    <script src="{$url.userStyle}javascripts/gcal.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.dataTables.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/datatable-editable.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/excanvas.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.isotope.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/isotope_extras.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/modernizr.custom.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.fancybox.pack.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/select2.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/styleswitcher.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/wysiwyg.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/summernote.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.inputmask.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.validate.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/bootstrap-fileupload.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/bootstrap-datepicker.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/bootstrap-timepicker.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/bootstrap-colorpicker.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/bootstrap-switch.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/typeahead.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/daterange-picker.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/date.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/morris.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/skycons.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/fitvids.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.sparkline.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/main.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/respond.js" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
</head>
<body>
    <!-- Navigation -->
    <div class="navbar navbar-fixed-top scroll-hide">
        <div class="container-fluid top-bar">
            <div class="pull-right">
                <ul class="nav navbar-nav pull-right">
                    {if $is_admin eq 1}
                        <li class="hidden-xs current">
                            <a class="dropdown-toggle" href="{$url.root}/admin/main"><b>返回后台</b></a>
                        </li>
                    {/if}
                    <li class="dropdown settings hidden-xs">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-gear"></span>
                            <div class="sr-only">
                                设置
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="settings-link blue" href="javascript:chooseStyle('none', 30)"><span></span>蓝色</a>
                            </li>
                            <li>
                                <a class="settings-link green" href="javascript:chooseStyle('green-theme', 30)"><span></span>绿色</a>
                            </li>
                            <li>
                                <a class="settings-link orange" href="javascript:chooseStyle('orange-theme', 30)"><span></span>橙色</a>
                            </li>
                            <li>
                                <a class="settings-link magenta" href="javascript:chooseStyle('magenta-theme', 30)"><span></span>品红色的</a>
                            </li>
                            <li>
                                <a class="settings-link gray" href="javascript:chooseStyle('gray-theme', 30)"><span></span>灰色</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown user hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img width="34" height="34" src="{$Av}" />{ $user}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{$url.root}/user/x_user">
                                    <i class="icon-user"></i>我的帐户</a>
                            </li>
                            <li><a href="{$url.root}/user/newAvatar">
                                    <i class="icon-gear"></i>修改头像</a>
                            </li>
                            <li><a href="{$url.root}/logout">
                                    <i class="icon-signout"></i>注销</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logo" href="main">03sec</a>
        </div>
        <div class="container-fluid main-nav clearfix">
            <div class="nav-collapse">
                <ul class="nav">
                    <li>
                        <a {if $info eq null}
                            class="current"
                        {/if} href="{$url.root}/user/main"><span aria-hidden="true" class="se7en-home"></span>社工库</a>
                    </li>
                    <li><a href="{$url.root}/user/time" {if $info eq 'time'}
                            class="current"
                        {/if} >
                            <span aria-hidden="true" class="icon-bug"></span>时间轴</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- End Navigation -->
</div>
</body>

</html>