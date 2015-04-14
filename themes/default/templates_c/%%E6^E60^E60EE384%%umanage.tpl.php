<?php /* Smarty version 2.6.25, created on 2015-04-14 13:41:49
         compiled from admin/umanage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/umanage.tpl', 77, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- End Navigation -->
                                                                                                                
<div class="container-fluid main-content">
    <div class="page-title">
        <h1 align="center">
            网站用户管理
        </h1>
    </div>
    <!-- DataTables Example -->
    <div class="row">
        <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
                <div class="form-group">
                    <label class="control-label col-md-3"></label>
                    <div class="heading">
                        <i class="icon-group"></i>网站用户管理
                    </div>
                    </div>
                    <div class="widget-content padded clearfix">
                        <table class="table table-bordered  table-hover">
                            <thead>
                            <th>
                                用户名
                            </th>
                            <th>
                                管理员权限
                            </th>
                            <th >
                                邮箱
                            </th>
                            <th>
                                注册时间
                            </th>
                            <th >
                                邮箱是否已经验证
                            </th>
                            <th >
                                最后登录时间
                            </th>
                            <th >
                                最后登录IP地址
                            </th>
                            <th>
                                删除
                            </th>
                            <th>
                                修改
                            </th>
                            </thead>
                            <tbody>
                            <?php unset($this->_sections['index']);
$this->_sections['index']['name'] = 'index';
$this->_sections['index']['loop'] = is_array($_loop=$this->_tpl_vars['uinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['index']['show'] = true;
$this->_sections['index']['max'] = $this->_sections['index']['loop'];
$this->_sections['index']['step'] = 1;
$this->_sections['index']['start'] = $this->_sections['index']['step'] > 0 ? 0 : $this->_sections['index']['loop']-1;
if ($this->_sections['index']['show']) {
    $this->_sections['index']['total'] = $this->_sections['index']['loop'];
    if ($this->_sections['index']['total'] == 0)
        $this->_sections['index']['show'] = false;
} else
    $this->_sections['index']['total'] = 0;
if ($this->_sections['index']['show']):

            for ($this->_sections['index']['index'] = $this->_sections['index']['start'], $this->_sections['index']['iteration'] = 1;
                 $this->_sections['index']['iteration'] <= $this->_sections['index']['total'];
                 $this->_sections['index']['index'] += $this->_sections['index']['step'], $this->_sections['index']['iteration']++):
$this->_sections['index']['rownum'] = $this->_sections['index']['iteration'];
$this->_sections['index']['index_prev'] = $this->_sections['index']['index'] - $this->_sections['index']['step'];
$this->_sections['index']['index_next'] = $this->_sections['index']['index'] + $this->_sections['index']['step'];
$this->_sections['index']['first']      = ($this->_sections['index']['iteration'] == 1);
$this->_sections['index']['last']       = ($this->_sections['index']['iteration'] == $this->_sections['index']['total']);
?>
                                <form action="deluser" method="post">
                                    <tr>
                                        <td>
                                            <?php echo $this->_tpl_vars['uinfo'][$this->_sections['index']['index']]['userName']; ?>

                                        </td>
                                        <td><?php if ($this->_tpl_vars['uinfo'][$this->_sections['index']['index']]['adminLevel'] == 1): ?>
                                            是
                                            <?php else: ?>
                                            否
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo $this->_tpl_vars['uinfo'][$this->_sections['index']['index']]['email']; ?>
</td>
                                        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['uinfo'][$this->_sections['index']['index']]['addTime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</td>
                                        <td>
                                            <?php if ($this->_tpl_vars['uinfo'][$this->_sections['index']['index']]['validated'] == 1): ?>
                                                是
                                            <?php else: ?>
                                            否
                                            <?php endif; ?>
                                        </td>
                                        <td><?php if ($this->_tpl_vars['uinfo'][$this->_sections['index']['index']]['loginTime'] == 0): ?>
                                                还未登录过
                                            <?php else: ?>
                                            <?php echo ((is_array($_tmp=$this->_tpl_vars['uinfo'][$this->_sections['index']['index']]['loginTime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</td>
                                            <?php endif; ?>
                                        <td>
                                            <?php if (is_null ( $this->_tpl_vars['uinfo'][$this->_sections['index']['index']]['ip'] )): ?>
                                                还未登录过
                                            <?php else: ?>
                                            <?php echo $this->_tpl_vars['uinfo'][$this->_sections['index']['index']]['ip']; ?>

                                            <?php endif; ?>
                                        </td>
                                        <input type="hidden" name="uuuuid" value="<?php echo $this->_tpl_vars['uinfo'][$this->_sections['index']['index']]['userName']; ?>
">
                                        <td><button class="btn btn-xs btn-info-outline" name="del" value="del">删除</button></td>
                                        <td><button class="btn btn-xs btn-info-outline" onclick="alert('修改');" >修改</button></td>
                                    </tr>
                                </form>
                            <?php endfor; endif; ?>

                            </tbody>
                        </table>
                        <ul class="pagination" style="float: right">
                            <?php echo $this->_tpl_vars['unav']; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end DataTables Example -->
    </div>
    </div>
                                                                                            </div>
</body>

</html>