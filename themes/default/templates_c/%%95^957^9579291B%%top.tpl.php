<?php /* Smarty version 2.6.25, created on 2015-04-10 09:25:10
         compiled from admin/top.tpl */ ?>
<!DOCTYPE html>
<html>

<head>
    <title>
        <?php echo $this->_tpl_vars['title']; ?>

    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />-->
    <link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/style.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery-ui.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/bootstrap.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/raphael.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/selectivizr-min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.mousewheel.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.vmap.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.vmap.world.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/fullcalendar.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/gcal.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.dataTables.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/datatable-editable.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/excanvas.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/isotope_extras.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/modernizr.custom.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/select2.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/styleswitcher.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['root']; ?>
/libs/kindeditor/kindeditor-all.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['root']; ?>
/libs/kindeditor/lang/zh-CN.js" type="text/javascript"></script>
        <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.inputmask.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/bootstrap-fileupload.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/bootstrap-timepicker.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/bootstrap-colorpicker.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/typeahead.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/daterange-picker.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/date.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/morris.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/skycons.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/fitvids.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.sparkline.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/main.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/respond.js" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
</head>
<body>
<div class="modal-shiftfix">
    <!-- Navigation -->
    <div class="navbar navbar-fixed-top scroll-hide">
        <div class="container-fluid top-bar">
            <div class="pull-right">
                <ul class="nav navbar-nav pull-right">

                    <li class="hidden-xs current">
                        <a class="dropdown-toggle" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/user/main"><b>返回前台</b></a>
                    </li>

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
                            <img width="34" height="34" src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
images/avatar-male.jpg" /><?php echo $this->_tpl_vars['user']; ?>
<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">
                                    <i class="icon-user"></i>我的帐户</a>
                            </li>
                            <li><a href="#">
                                    <i class="icon-gear"></i>帐户设置</a>
                            </li>
                            <li><a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/logout">
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
                        <a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/admin/main" <?php if ($this->_tpl_vars['info'] == null): ?>
                            class="current"
                        <?php endif; ?>
                                ><span aria-hidden="true" class="se7en-home"></span>首页</a>
                    </li>
                    <li><a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/admin/usermanage" <?php if ($this->_tpl_vars['info'] == 'usermanage'): ?>
                            class="current"
                                <?php endif; ?>
                                >
                            <span aria-hidden="true" class="icon-group"></span>用户管理</a>
                    </li>
                    <li><a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/admin/key" <?php if ($this->_tpl_vars['info'] == 'key'): ?>
                            class="current"
                        <?php endif; ?>
                                >
                            <span aria-hidden="true" class="icon-rocket"></span>邀请码</a>
                    </li>
                    <li><a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/admin/time" <?php if ($this->_tpl_vars['info'] == 'time'): ?>
                            class="current"
                                <?php endif; ?>
                                >
                            <span aria-hidden="true" class="icon-bug"></span>时间轴管理</a>
                    </li>
                    <li><a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/admin/filemanage" <?php if ($this->_tpl_vars['info'] == 'filename'): ?>
                            class="current"
                                <?php endif; ?>
                                >
                            <span aria-hidden="true" class="icon-file"></span>文件管理</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>