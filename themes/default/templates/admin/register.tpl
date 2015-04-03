<!DOCTYPE html>
<html>
  <head>
    <title>
        注册
    </title>
    <meta charset="utf-8">
    <meta name="keywords" content="注册" />
    <meta name="description" content="注册" />
    <link href="http://fonts.useso.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}/stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}/stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}/stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}/stylesheets/style.css" media="all" rel="stylesheet" type="text/css" /><script src="{$url.adminStyle}javascripts/jquery-1.10.2.min.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/jquery-ui.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/bootstrap.min.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/raphael.min.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/jquery.mousewheel.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/jquery.vmap.min.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/jquery.vmap.world.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/fullcalendar.min.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/gcal.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/jquery.dataTables.min.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/datatable-editable.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/excanvas.min.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/jquery.isotope.min.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/masonry.min.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/modernizr.custom.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/jquery.fancybox.pack.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/select2.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/styleswitcher.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/wysiwyg.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/jquery.inputmask.min.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/jquery.validate.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/bootstrap-fileupload.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/bootstrap-datepicker.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/bootstrap-timepicker.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/bootstrap-colorpicker.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/bootstrap-switch.min.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/daterange-picker.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/date.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/morris.min.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/skycons.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/jquery.sparkline.min.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/main.js" type="text/javascript"></script><script src="{$url.adminStyle}/javascripts/respond.js" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  </head>
  <body class="login1 signup">
    <!-- Login Screen -->
    <div class="login-wrapper">
      <div class="login-container">
        <a href="#"><img width="100" height="30" src="{$url.adminStyle}/images/logo-login@2x.png" /></a>
        <form action="{$url.root}/register-test/submit" method="post">
          <div class="form-group">
            <input class="form-control" type="text" name="user" placeholder="输入您的用户名">
          </div>
            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="输入您的邮箱地址">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="key" placeholder="输入您的邀请码">
            </div>
          <div class="form-group">
            <input class="form-control" type="password" name="pwd" placeholder="输入密码">
          </div>
          <div class="form-group">
            <input class="form-control" type="password" name="pwd2" placeholder="确认密码">
              <input type="submit" value="&#xf054;">
          </div>
          <div class="form-options">

            <!--<label class="checkbox"><input type="checkbox"><span>同意《注册条款》</span></label>-->
              <p style="margin-top: 40px">
                  已经有账户了？ <a href="{$url.root}/login">立即登录</a>
              </p>
          </div>
        </form>

      </div>
    </div>
    <!-- End Login Screen -->
  </body>
</html>