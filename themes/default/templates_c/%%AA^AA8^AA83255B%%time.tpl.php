<?php /* Smarty version 2.6.25, created on 2015-04-14 13:41:39
         compiled from admin/time.tpl */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="container-fluid main-content">
    <div class="page-title" align="center">
        <h1>
            修改文章
        </h1>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <form method="post" action="<?php echo $this->_tpl_vars['url']['root']; ?>
/admin/xx_times">
            <div class="widget-container fluid-height">
                <div class="heading">
                    <div class="col-md-7">
                        <?php $_from = $this->_tpl_vars['edit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['contact']):
        $this->_foreach['outer']['iteration']++;
?>

                        <div class="col-md-2">
                            <h3><i class="icon-4x icon-edit"></i>标题</h3>
                        </div>
                        <?php $_from = $this->_tpl_vars['contact']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                            <?php if ($this->_tpl_vars['key'] == 'id'): ?>
                                <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']; ?>
">
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <div class="col-md-7">
                            <?php $_from = $this->_tpl_vars['contact']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                <?php if ($this->_tpl_vars['key'] == 'title'): ?>
                                    <input name="title" class="form-control"  type="text" value="<?php echo $this->_tpl_vars['item']; ?>
">
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </div>
                    </div>
                </div>
                <div class="widget-content padded">
                    <textarea id="content" name="content" style="width:700px;height:300px;">
                                                    <?php $_from = $this->_tpl_vars['contact']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                                        <?php if ($this->_tpl_vars['key'] == 'content'): ?>
                                                        <?php echo $this->_tpl_vars['item']; ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; endif; unset($_from); ?>


                    </textarea>
                    <?php endforeach; endif; unset($_from); ?>
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

                    <button class="btn btn-lg btn-block btn-primary-outline">点击保存时间轴文章</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>