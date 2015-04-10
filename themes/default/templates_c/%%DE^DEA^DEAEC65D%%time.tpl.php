<?php /* Smarty version 2.6.25, created on 2015-04-10 10:27:38
         compiled from user/time.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'user/time.tpl', 12, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user/top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="container-fluid main-content">
    <div class="page-title" align="center">
        <h1>
            时间轴
        </h1>
    </div>
    <ul class="timeline animated">
        <?php unset($this->_sections['index']);
$this->_sections['index']['name'] = 'index';
$this->_sections['index']['loop'] = is_array($_loop=$this->_tpl_vars['timeData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <li>
            <div class="timeline-time">
                <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['timeData'][$this->_sections['index']['index']]['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</strong><?php echo $this->_tpl_vars['timeData'][$this->_sections['index']['index']]['username']; ?>

            </div>
            <div class="timeline-icon">
                <div class="bg-primary">
                    <i class="icon-pencil"></i>
                </div>
            </div>
            <div class="timeline-content">
                <h1>
                    <?php echo $this->_tpl_vars['timeData'][$this->_sections['index']['index']]['title']; ?>

                </h1>
                <p>
                    <?php echo $this->_tpl_vars['timeData'][$this->_sections['index']['index']]['content']; ?>


                </p>
            </div>
        </li>
        <?php endfor; endif; ?>
    </ul>
</div>