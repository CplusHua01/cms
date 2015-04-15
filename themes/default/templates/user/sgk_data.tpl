<!DOCTYPE html>
<html>

<head>
    <title>
        {$title}
    </title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />-->
    <link href="{$url.userStyle}stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/style.css" media="all" rel="stylesheet" type="text/css" /><link href="{$url.userStyle}stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" /><link href="{$url.userStyle}stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" /><link href="{$url.userStyle}stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" /><link href="{$url.userStyle}stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />
    <script src="{$url.userStyle}javascripts/jquery.min.js" type="text/javascript"></script>
    <script src="{$url.userStyle}javascripts/jquery-ui.js" type="text/javascript"></script>
    <script src="{$url.userStyle}javascripts/bootstrap.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/raphael.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/selectivizr-min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.mousewheel.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.vmap.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.vmap.world.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script>
    <script src="{$url.userStyle}javascripts/fullcalendar.min.js" type="text/javascript"></script>
    <script src="{$url.userStyle}javascripts/gcal.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.dataTables.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/datatable-editable.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/excanvas.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.isotope.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/isotope_extras.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/modernizr.custom.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.fancybox.pack.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/select2.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/styleswitcher.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/wysiwyg.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/summernote.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.inputmask.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.validate.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/bootstrap-fileupload.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/bootstrap-datepicker.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/bootstrap-timepicker.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/bootstrap-colorpicker.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/bootstrap-switch.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/typeahead.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/daterange-picker.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/date.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/morris.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/skycons.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/fitvids.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/jquery.sparkline.min.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/main.js" type="text/javascript"></script><script src="{$url.userStyle}javascripts/respond.js" type="text/javascript"></script>
</head>
<body style="padding-top:0px">

<div class="col-lg-12">
    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="icon-table"></i>响应式表格
        </div>
        <div class="widget-content padded clearfix">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" align="center">
                    <thead>
                    <th>
                        用户名
                    </th>
                    <th>
                        密码
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        来源
                    </th>
                    <th>
                        其他
                    </th>
                    </thead>
                    <tbody >
                    <tr>
                        <td class="col-md-1" >
                            初雪
                        </td>
                        <td class="col-md-2" >
                            客服
                        </td>
                        <td class="col-md-2" >
                            robert@gmail.com
                        </td>
                        <td class="col-md-2" >
                            8-15-2013
                        </td>
                        <td class="col-md-7" >
                            United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United Kingdom
                        </td>
                    </tr>

                        <tr>
                            <td class="col-md-1" >
                                a
                            </td>
                            <td class="col-md-2" >
                                客服
                            </td>
                            <td class="col-md-2" >
                                robert@gmail.com
                            </td>
                            <td class="col-md-2" >
                                8-15-2013
                            </td>
                            <td class="col-md-7" >
                                United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United United Kingdom
                            </td>
                        </tr>


                    {section name=index loop=$data }
                        {$data[index].username}
                    {/section}




                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</body>
<html>