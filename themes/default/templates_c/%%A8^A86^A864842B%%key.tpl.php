<?php /* Smarty version 2.6.25, created on 2015-04-06 14:56:05
         compiled from admin/key.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/key.tpl', 59, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
                                    <?php unset($this->_sections['index']);
$this->_sections['index']['name'] = 'index';
$this->_sections['index']['loop'] = is_array($_loop=$this->_tpl_vars['keyinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                        <?php if ($this->_tpl_vars['keyinfo'][$this->_sections['index']['index']]['isUsed'] == 0): ?>
                                    <tr>
                                        <td><?php echo $this->_tpl_vars['keyinfo'][$this->_sections['index']['index']]['addKeyUser']; ?>
</td>
                                                                                <td><?php echo $this->_tpl_vars['keyinfo'][$this->_sections['index']['index']]['inviteKey']; ?>
</td>
                                        <td>Null</td>
                                        <td>Null</td>
                                        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['keyinfo'][$this->_sections['index']['index']]['addTime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</td>
                                        <td>Null</td>
                                        <td><button class="btn btn-xs btn-info-outline" onclick="alert('<?php echo $this->_tpl_vars['keyinfo'][$this->_sections['index']['index']]['inviteKey']; ?>
');" >复制</button></td>
                                    </tr>
                                            <?php else: ?>
                                            <tr style="color: #FF66CC;text-decoration: line-through">
                                            <td><?php echo $this->_tpl_vars['keyinfo'][$this->_sections['index']['index']]['addKeyUser']; ?>
</td>
                                            <td><?php echo $this->_tpl_vars['keyinfo'][$this->_sections['index']['index']]['inviteKey']; ?>
</td>
                                            <td><?php echo $this->_tpl_vars['keyinfo'][$this->_sections['index']['index']]['regUserName']; ?>
</td>
                                            <td><?php echo $this->_tpl_vars['keyinfo'][$this->_sections['index']['index']]['regUserEmail']; ?>
</td>
                                            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['keyinfo'][$this->_sections['index']['index']]['addTime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</td>
                                            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['keyinfo'][$this->_sections['index']['index']]['regTime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</td>
                                            <td><button class="btn btn-xs " disabled>已用</button></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endfor; endif; ?>
                            </tbody>

                        </table>
                        <ul class="pagination" style="float: right">
                            <?php echo $this->_tpl_vars['keynav']; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>