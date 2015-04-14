<?php /* Smarty version 2.6.25, created on 2015-04-14 14:49:54
         compiled from user/avatar.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user/top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/swfobject.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['url']['userStyle']; ?>
javascripts/fullAvatarEditor.js"></script><div class="container-fluid main-content">
    <div class="page-title" align="center">
        <h1>
            头像修改
        </h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="widget-container">
                <div class="widget-content padded">
                    <div class="heading">
                        <i class="icon-picture"></i>头像修改
                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo $this->_tpl_vars['Av_y']; ?>
" width="200px" height="200px">

                    </div>

                    <div class="col-md-5">
                                                                                                                        <div style="height: 120px">
                        <h1>:-）</h1>
                        </div>
                        <form enctype="multipart/form-data" method="post" name="upform" action="saveAvatar">
                            <div class="form-group">
                                <div class="col-md-pull-4">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-group">
                                            <div class="form-control">
                                                <i class="icon-file fileupload-exists"></i><span class="fileupload-preview"></span>
                                            </div>
                                            <div class="input-group-btn">
                                                <a class="btn btn-default fileupload-exists" data-dismiss="fileupload" href="#">移除</a><span class="btn btn-default btn-file"><span class="fileupload-new">选择图片</span><span class="fileupload-exists">修改</span><input type="file" name="upimg" accept="image/jpeg,image/png,image/gif"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-lg btn-block btn-primary">保存头像</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

    </html>