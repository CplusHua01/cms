<?php /* Smarty version 2.6.25, created on 2015-04-14 13:41:43
         compiled from admin/time_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/time_list.tpl', 37, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="container-fluid main-content">
    <div class="page-title" align="center">
        <h1>
            管理时间轴文章
        </h1>
    </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget-container fluid-height clearfix">
                        <div class="heading">
                            <i class="icon-time"></i>管理时间轴文章
                        </div>
                        <div class="widget-content padded clearfix">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                <th>
                                    文章名称
                                </th>
                                <th>
                                    添加时间
                                </th>
                                <th class="hidden-xs">
                                    添加人
                                </th>
                                <th>操作</th>
                                </thead>
                                <tbody>
                                <?php unset($this->_sections['index']);
$this->_sections['index']['name'] = 'index';
$this->_sections['index']['loop'] = is_array($_loop=$this->_tpl_vars['timesData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                                <tr>
                                    <td>
                                        <?php echo $this->_tpl_vars['timesData'][$this->_sections['index']['index']]['title']; ?>

                                    </td>
                                    <td>
                                        <?php echo ((is_array($_tmp=$this->_tpl_vars['timesData'][$this->_sections['index']['index']]['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>

                                    </td>
                                    <td class="hidden-xs">
                                        <?php echo $this->_tpl_vars['timesData'][$this->_sections['index']['index']]['username']; ?>

                                    </td>
                                    <td class="actions">
                                        <div class="action-buttons">
                                            <a class="table-actions" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/user/time" target="_Blank"><i class="icon-eye-open"></i></a>
                                            <a class="table-actions" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/admin/x_time/<?php echo $this->_tpl_vars['timesData'][$this->_sections['index']['index']]['id']; ?>
" ><i class="icon-pencil"></i></a>
                                            <a class="table-actions" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/admin/delTime/<?php echo $this->_tpl_vars['timesData'][$this->_sections['index']['index']]['id']; ?>
"><i class="icon-trash"></i></a></form>
                                        </div>
                                    </td>
                                </tr>
                                <?php endfor; endif; ?>


                                </tbody>
                            </table>
                            <a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/admin/newTime"> <button class="btn btn-primary"><i class="icon-user"></i>发布新时间轴文章</button></a>
                            <ul class="pagination" style="float: right">
                                <?php echo $this->_tpl_vars['tnav']; ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>