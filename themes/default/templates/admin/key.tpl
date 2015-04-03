<!DOCTYPE html>
<html>

<head>
    <title>
        后台管理面板
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />-->
    <link href="{$url.adminStyle}stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/style.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.adminStyle}stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" /><link href="{$url.adminStyle}stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" /><link href="{$url.adminStyle}stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" /><link href="{$url.adminStyle}stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />
    <script src="{$url.adminStyle}javascripts/jquery.min.js" type="text/javascript"></script>
    <script src="{$url.adminStyle}javascripts/jquery-ui.js" type="text/javascript"></script>
    <script src="{$url.adminStyle}javascripts/bootstrap.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/raphael.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/selectivizr-min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.mousewheel.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.vmap.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.vmap.world.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/fullcalendar.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/gcal.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.dataTables.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/datatable-editable.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/excanvas.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.isotope.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/isotope_extras.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/modernizr.custom.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.fancybox.pack.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/select2.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/styleswitcher.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/wysiwyg.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/summernote.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.inputmask.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.validate.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/bootstrap-fileupload.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/bootstrap-datepicker.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/bootstrap-timepicker.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/bootstrap-colorpicker.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/bootstrap-switch.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/typeahead.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/daterange-picker.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/date.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/morris.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/skycons.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/fitvids.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/jquery.sparkline.min.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/main.js" type="text/javascript"></script><script src="{$url.adminStyle}javascripts/respond.js" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
</head>
<body>
<div class="modal-shiftfix">
    <!-- Navigation -->
    <div class="navbar navbar-fixed-top scroll-hide">
        <div class="container-fluid top-bar">
            <div class="pull-right">
                <ul class="nav navbar-nav pull-right">
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
                        <img width="34" height="34" src="{$url.adminStyle}images/avatar-male.jpg" />{ $user}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">
                                <i class="icon-user"></i>我的帐户</a>
                            </li>
                            <li><a href="#">
                                <i class="icon-gear"></i>帐户设置</a>
                            </li>
                            <li><a href="{$url.root}/logout">
                                <i class="icon-signout"></i>注销</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logo" href="main.tpl">se7en</a>
        </div>
        <div class="container-fluid main-nav clearfix">
            <div class="nav-collapse">
                <ul class="nav">
                    <li>
                        <a href="main"><span aria-hidden="true" class="se7en-home"></span>指示板</a>
                    </li>
                    <li><a href="usermanage" >
                        <span aria-hidden="true" class="icon-group"></span>用户管理</a>
                    </li>
                    <li><a href="key" class="current" >
                        <span aria-hidden="true" class="icon-rocket"></span>邀请码</a>
                    </li>
                    <li><a href="time">
                        <span aria-hidden="true" class="icon-bug"></span>时间轴管理</a>
                    </li>
                    <li><a href="filemanage">
                        <span aria-hidden="true" class="icon-file"></span>文件管理</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Navigation -->
    <div class="container-fluid main-content">
        <div class="page-title">
            <h1 align="center">
                邀请码管理
            </h1>
        </div>
        <!-- DataTables Example -->
        <div class="row">
            <div class="col-lg-12">
                <div class="widget-container fluid-height clearfix">
                    <div class="form-group">
                        <label class="control-label col-md-3"></label>
                        <div class="col-md-7" style="margin-top: 7px">
                            <form action="newKey" method="post">

                            <div class="col-md-10">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="keyNewNum" placeholder="请输入要生成的邀请码的个数，建议一次不超过100个"onkeyup="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d.]/g,''))" maxlength="3">
                                        <span class="input-group-btn"><button class="btn btn-primary-outline" type="submit">一键生成邀请码</button></span></input>
                                </div>


                        </div>
                            </form>

                        </div>
                    <div class="widget-content padded clearfix">
                        <table class="table table-bordered  table-hover">
                            <thead>
                            <th>
                                邀请码生成者
                            </th>
                            <th >
                                邀请码
                            </th>
                            <th>
                                邀请码使用者
                            </th>
                            <th >
                                使用者email
                            </th>
                            <th >
                                邀请码添加时间
                            </th>
                            <th >
                                邀请码使用时间
                            </th>
                            <th>
                                复制
                            </th>
                            </thead>
                            <tbody>
                                    {section name=index loop=$keyinfo }
                                        {if $keyinfo[index].isUsed eq 0}
                                    <tr>
                                        <td>{$keyinfo[index].addKeyUser}</td>
                                        {*<td><a href="{$url.root}/register/key/{$keyinfo[index].inviteKey}" target="_blank">{$keyinfo[index].inviteKey}</a></td>*}
                                        <td>{$keyinfo[index].inviteKey}</td>
                                        <td>Null</td>
                                        <td>Null</td>
                                        <td>{$keyinfo[index].addTime|date_format:'%Y-%m-%d'}</td>
                                        <td>Null</td>
                                        <td><button class="btn btn-xs btn-info-outline" onclick="alert('{$url.root}register/key/{$keyinfo[index].inviteKey}');" >复制</button></td>
                                    </tr>
                                            {else}
                                            <tr style="color: #FF66CC;text-decoration: line-through">
                                            <td>{$keyinfo[index].addKeyUser}</td>
                                            <td>{$keyinfo[index].inviteKey}</td>
                                            <td>{$keyinfo[index].regUserName}</td>
                                            <td>{$keyinfo[index].regUserEmail}</td>
                                            <td>{$keyinfo[index].addTime|date_format:'%Y-%m-%d'}</td>
                                            <td>{$keyinfo[index].regTime|date_format:'%Y-%m-%d'}</td>
                                            <td><button class="btn btn-xs " disabled>已用</button></td>
                                            </tr>
                                        {/if}
                                    {/section}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end DataTables Example -->

    </div>

</div>
</body>

</html>