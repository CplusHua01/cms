<?php /* Smarty version 2.6.25, created on 2015-03-31 15:46:00
         compiled from admin/main.html */ ?>
<!DOCTYPE html>
<html>
  
<head>
    <title>
      后台管理面板
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
stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
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
javascripts/datatable-editable.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/excanvas.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.isotope.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/isotope_extras.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/modernizr.custom.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.fancybox.pack.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/select2.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/styleswitcher.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/wysiwyg.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/summernote.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.inputmask.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/jquery.validate.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/bootstrap-fileupload.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/bootstrap-datepicker.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/bootstrap-timepicker.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/bootstrap-colorpicker.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
javascripts/bootstrap-switch.min.js" type="text/javascript"></script><script src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
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
              <li class="dropdown notifications hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-flag"></span>
                  <div class="sr-only">
                      通知
                  </div>
                  <p class="counter">
                    4
                  </p>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">
                    <div class="notifications label label-info">
                        新
                    </div>
                    <p>
                        新用户添加:简·史密斯
                    </p></a>
                    
                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                        新
                    </div>
                    <p>
                        销售目标可用
                    </p></a>
                    
                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      新
                    </div>
                    <p>
                        添加新的性能指标
                    </p></a>
                    
                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      新
                    </div>
                    <p>
                        新的增长数据
                    </p></a>
                    
                  </li>
                </ul>
              </li>
              <li class="dropdown messages hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-envelope"></span>
                  <div class="sr-only">
                      消息
                  </div>
                  <p class="counter">
                    3
                  </p>
                </a>
                <ul class="dropdown-menu messages">
                  <li><a href="#">
                    <img width="34" height="34" src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
images/avatar-male2.png" />今天我们可以见面吗?我想要的...</a>
                  </li>
                  <li><a href="#">
                    <img width="34" height="34" src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
images/avatar-female.png" />重要的数据需要你的分析...</a>
                  </li>
                  <li><a href="#">
                    <img width="34" height="34" src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
images/avatar-male2.png" />今天买7宗罪, 这是一个伟大的主题...</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown settings hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-gear"></span>
                  <div class="sr-only">
                      设置
                  </div>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="settings-link blue" href="javascript:chooseStyle('none', 30)"><span></span>蓝色的</a>
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
                    <a class="settings-link gray" href="javascript:chooseStyle('gray-theme', 30)"><span></span>灰色的</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown user hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img width="34" height="34" src="<?php echo $this->_tpl_vars['url']['adminStyle']; ?>
images/avatar-male.jpg" />约翰。史密斯<b class="caret"></b></a>
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
          <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logo" href="main.html">se7en</a>
          <form class="navbar-form form-inline col-lg-2 hidden-xs">
            <input class="form-control" placeholder="Search" type="text">
          </form>
        </div>
        <div class="container-fluid main-nav clearfix">
          <div class="nav-collapse">
            <ul class="nav">
              <li>
                <a class="current" href="main.html"><span aria-hidden="true" class="se7en-home"></span>指示板</a>
              </li>
              <li><a href="social.html">
                <span aria-hidden="true" class="se7en-feed"></span>社会 Feed</a>
              </li>
              <li class="dropdown"><a data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-star"></span>特性<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="buttons.html">按钮</a>
                  </li>
                  <li>
                    <a href="fontawesome.html">字体的图标</a>
                  </li>
                  <li><a href="glyphicons.html">
                    <span class="notifications label label-warning">新</span>
                    <p>
                      Glyphicons
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="components.html">组件</a>
                  </li>
                  <li>
                    <a href="widgets.html">小部件</a>
                  </li>
                  <li>
                    <a href="typo.html">排版</a>
                  </li>
                  <li>
                    <a href="grid.html">网格布局</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-forms"></span>形式<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="form-components.html">
                    <span class="notifications label label-warning">新</span>
                    <p>
                        表单组件
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="form-advanced.html">高级形式</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-tables"></span>表格<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="tables.html">基本表格</a>
                  </li>
                  <li>
                    <a href="datatables.html">数据表格</a>
                  </li>
                  <li><a href="datatables-editable.html">
                    <div class="notifications label label-warning">
                      新
                    </div>
                    <p>
                        可编辑的 数据表格
                    </p></a>
                    
                  </li>
                </ul>
              </li>
              <li><a href="charts.html">
                <span aria-hidden="true" class="se7en-charts"></span>图表</a>
              </li>
              <li class="dropdown"><a data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-pages"></span>页面<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="chat.html">
                    <span class="notifications label label-warning">新</span>
                    <p>
                      Chat
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="calendar.html">日历</a>
                  </li>
                  <li><a href="timeline.html">
                    <span class="notifications label label-warning">新</span>
                    <p>
                        时间表
                    </p></a>
                    
                  </li>
                  <li><a href="login1.html">
                    <span class="notifications label label-warning">新</span>
                    <p>
                        登录1
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="login2.html">登录2</a>
                  </li>
                  <li><a href="signup1.html">
                    <span class="notifications label label-warning">新</span>
                    <p>
                      注册 1
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="signup2.html">注册 2</a>
                  </li>
                  <li><a href="invoice.html">
                    <span class="notifications label label-warning">新</span>
                    <p>
                        发票
                    </p></a>
                    
                  </li>
                  <li><a href="faq.html">
                    <span class="notifications label label-warning">新</span>
                    <p>
                        常见问题解答
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="filters.html">过滤结果</a>
                  </li>
                  <li>
                    <a href="404-page.html">404 页面</a>
                  </li>
                </ul>
              </li>
              <li><a href="gallery.html">
                <span aria-hidden="true" class="se7en-gallery"></span>画廊</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Navigation -->
      <div class="container-fluid main-content">
        <!-- Statistics -->
        <div class="row">
          <div class="col-lg-12">
            <div class="widget-container stats-container">
              <div class="col-md-4">
                <div class="number">
                  <div class="icon globe"></div>
                  86 天
                </div>
                <div class="text">
                    网站运营时长
                </div>
              </div>
              <div class="col-md-4">
                <div class="number">
                  <div class="icon visitors"></div>
                  613 名
                </div>
                <div class="text">
                    成功注册人数
                </div>
              </div>
              <div class="col-md-4">
                <div class="number">
                  <div class="icon-hdd"></div>
                    9E 条
                </div>
                <div class="text">
                    数据数量
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Statistics -->
        <div class="row">
        </div>
        <div class="row">
          <!-- Area Charts:Morris -->
          <div class="col-md-12">
            <div class="widget-container fluid-height">
              <div class="heading">
                <i class="icon-bar-chart"></i>查询条形图
              </div>
              <div class="widget-content padded text-center">
                <div class="graph-container">
                  <div class="caption"></div>
                  <div class="graph" id="hero-area"></div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <!-- Pie Graph 1 -->
          <div class="col-lg-5">
            <div class="widget-container fluid-height">
              <div class="heading">
                <i class="icon-bar-chart"></i>甜甜圈图
              </div>
              <div class="widget-content clearfix">
                <div class="col-sm-6">
                  <div class="pie-chart1 pie-chart pie-number" data-percent="87">
                    87%
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="pie-chart2 pie-chart pie-number" data-percent="26">
                    26%
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="widget-container fluid-height">
              <!-- Table -->
              <table class="table table-filters">
                <tbody>
                  <tr>
                    <td class="filter-category blue">
                      <div class="arrow-left"></div>
                      <i class="icon-stethoscope"></i>
                    </td>
                    <td>
                        全国分发Co.
                    </td>
                    <td>
                      $9204
                    </td>
                    <td class="hidden-xs">
                      <div class="sparkslim">
                        50,55,60,40,30,35,30,20,25,30,40,20,15
                      </div>
                    </td>
                    <td>
                      <div class="danger">
                        -4%
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="filter-category green">
                      <div class="arrow-left"></div>
                      <i class="icon-coffee"></i>
                    </td>
                    <td>
                        明星组织有限公司.
                    </td>
                    <td>
                      $23,890
                    </td>
                    <td class="hidden-xs">
                      <div class="sparkslim">
                        5,10,15,50,80,50,40,30,50,60,70,75,75
                      </div>
                    </td>
                    <td>
                      <div class="success">
                        +12%
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="filter-category orange">
                      <div class="arrow-left"></div>
                      <i class="icon-gamepad"></i>
                    </td>
                    <td>
                        公司软有限责任公司
                    </td>
                    <td>
                      $10,995
                    </td>
                    <td class="hidden-xs">
                      <div class="sparkslim">
                        100,100,80,70,40,20,20,40,50,60,70
                      </div>
                    </td>
                    <td>
                      <div class="success">
                        +5%
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="filter-category red">
                      <div class="arrow-left"></div>
                      <i class="icon-gift"></i>
                    </td>
                    <td>
                        工艺 Co.
                    </td>
                    <td>
                      $6,790
                    </td>
                    <td class="hidden-xs">
                      <div class="sparkslim">
                        5,10,15,20,30,40,80,100,120,120,140
                      </div>
                    </td>
                    <td>
                      <div class="success">
                        +26%
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="filter-category blue">
                      <div class="arrow-left"></div>
                      <i class="icon-stethoscope"></i>
                    </td>
                    <td>
                        全国分发Co.
                    </td>
                    <td>
                      $9204
                    </td>
                    <td class="hidden-xs">
                      <div class="sparkslim">
                        50,55,60,40,30,35,30,20,25,30,40,20,15
                      </div>
                    </td>
                    <td>
                      <div class="danger">
                        -4%
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="filter-category magenta">
                      <div class="arrow-left"></div>
                      <i class="icon-trophy"></i>
                    </td>
                    <td>
                        Fastnation有限公司.
                    </td>
                    <td>
                      $22,156
                    </td>
                    <td class="hidden-xs">
                      <div class="sparkslim">
                        20,40,50,60,70,80,90,95,100,80,70,60
                      </div>
                    </td>
                    <td>
                      <div class="danger">
                        -4%
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End Pie Graph 1 -->
        </div>
      </div>
    </div>
  </body>

</html>