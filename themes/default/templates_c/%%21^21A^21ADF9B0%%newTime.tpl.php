<?php /* Smarty version 2.6.25, created on 2015-04-09 23:11:17
         compiled from admin/newTime.tpl */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="container-fluid main-content">
    <div class="page-title" align="center">
        <h1>
            发表时间轴文章
        </h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form method="post" action="<?php echo $this->_tpl_vars['url']['root']; ?>
/admin/times">
            <div class="widget-container fluid-height">
                <div class="heading">
                    <div class="col-md-7">
                        <div class="col-md-2 ">
                            <h4 style="margin-top: 7px"><a href="javascript:history.go(-1)">返回上一页</a></h4>
                        </div>
                                                                                                    <div class="col-md-7">
                            <input name="title" class="form-control" placeholder="请输入标题" type="text">
                        </div>
                    </div>
                </div>
                <div class="widget-content padded">
                    <textarea id="content" name="content" style="width:700px;height:300px;">

                    </textarea>
                    <?php echo '
                    <script type="text/javascript">
                        KindEditor.ready(function(K) {
                            window.editor = K.create(\'#content\',
                                    {
                                        items:[ \'source\', \'|\',\'formatblock\',  \'fontsize\',  \'bold\', \'italic\', \'underline\', \'strikethrough\', \'|\', \'undo\', \'redo\', \'|\', \'code\', \'cut\', \'copy\', \'paste\', \'plainpaste\',  \'|\', \'justifyleft\', \'justifycenter\', \'justifyright\', \'justifyfull\', \'insertorderedlist\', \'insertunorderedlist\', \'indent\', \'outdent\', \'subscript\', \'superscript\', \'clearhtml\', \'quickformat\', \'selectall\', \'|\',  \'image\', \'multiimage\', \'|\',  \'removeformat\', \'flash\', \'media\', \'insertfile\', \'table\',  \'link\', \'unlink\', \'emoticons\',\'|\',\'fullscreen\'],width:\'100%\',
                                    '; ?>

                                        uploadJson : '<?php echo $this->_tpl_vars['url']['root']; ?>
/libs/kindeditor/php/upload_json.php'
                                    <?php echo '
                                    }
                            );
                        });
                    </script>
                    '; ?>

                    <button class="btn btn-lg btn-block btn-primary-outline" onclick="save()">点击发布时间轴文章</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>