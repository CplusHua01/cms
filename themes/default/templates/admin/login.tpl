<!DOCTYPE html>
<html>  
<head>
    <title>
     后台管理系统
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!--<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />-->
	<link href="{$url.adminStyle}stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="{$url.adminStyle}stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" />
    <link href="{$url.adminStyle}stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" />
    <link href="{$url.adminStyle}stylesheets/style.css" media="all" rel="stylesheet" type="text/css" />
	<script src="{$url.adminStyle}javascripts/jquery.min.js" type="text/javascript"></script>
	<script src="{$url.adminStyle}javascripts/jquery-ui.js" type="text/javascript"></script>
	<script src="{$url.adminStyle}javascripts/bootstrap.min.js" type="text/javascript"></script>
    <script src="{$url.adminStyle}javascripts/raphael.min.js" type="text/javascript"></script>
    <script src="{$url.adminStyle}javascripts/jquery.mousewheel.js" type="text/javascript"></script>
    <script src="{$url.adminStyle}javascripts/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="{$url.adminStyle}javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.vmap.world.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/fullcalendar.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/gcal.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.dataTables.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/datatable-editable.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/excanvas.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.isotope.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/masonry.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/modernizr.custom.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.fancybox.pack.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/select2.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/styleswitcher.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/wysiwyg.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.inputmask.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.validate.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/bootstrap-fileupload.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/bootstrap-datepicker.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/bootstrap-timepicker.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/bootstrap-colorpicker.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/bootstrap-switch.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/daterange-picker.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/date.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/morris.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/skycons.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.sparkline.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/fitvids.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/main.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/respond.js" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">

</head>
  <body class="login1">
    <!-- Login Screen -->
    <div class="login-wrapper">
      <div class="login-container">
        <a href="login"><img width="100" height="30" src="{$url.adminStyle}images/logo-login%402x.png" /></a>
        <form action="login/submit" method="post">
          <div class="form-group">
            <input class="form-control" name="user" placeholder="用户名或者邮箱" type="text">
          </div>
          <div class="form-group">
            <input class="form-control"  name="pwd" placeholder="密  码" type="password"><input type="submit" value="&#xf054;">
          </div>
          <div class="form-options clearfix">
            <a class="pull-right" href="#">忘记密码?</a>
            <div class="text-left">
              <label class="checkbox"><input type="checkbox"><span>记住我</span></label>
            </div>
          </div>
        </form>
        <div class="social-login clearfix">
          <!--<a class="btn btn-primary pull-left facebook" href="index-2.html"><i class="icon-facebook"></i>Facebook login</a><a class="btn btn-primary pull-right twitter" href="index-2.html"><i class="icon-twitter"></i>Twitter login</a>-->
            还没有帐号? <a href="register">现在就注册一个帐号</a>

        </div>

      </div>
    </div>
    <!-- End Login Screen -->
  </body>

</html>