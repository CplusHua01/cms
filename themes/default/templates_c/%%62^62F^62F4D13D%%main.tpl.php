<?php /* Smarty version 2.6.25, created on 2015-04-16 15:35:41
         compiled from user/main.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user/top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/themes/default/templates/user/style/sgkcss/jquery.tzSelect.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/themes/default/templates/user/style/sgkcss/sub.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/themes/default/templates/user/style/sgkcss/list.css">
</head>
<body>
<div align='center'>
    <form method='get' action='<?php echo $this->_tpl_vars['url']['root']; ?>
/search/' >
                        <select class="regularSelect" id='searchMode' name="mode">
            <option value="1" selected="selected" data-skip="1">完整扫描</option>
            <option value="1" >完整扫描</option>
            <option value="2">扩展匹配模式(V2)</option>
            <option value="3">布尔查询</option>
            <option value="4">短语匹配</option>
            <option value="5">任意查询词</option>
            <option value="6">所有查询词</option>
        </select>
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['url']['root']; ?>
/themes/default/templates/user/style/sgkjs/jquery-1.4.4.min.js"></script>
        <script src="<?php echo $this->_tpl_vars['url']['root']; ?>
/themes/default/templates/user/style/sgkjs/jquery.tzSelect.js"></script>
        <script src="<?php echo $this->_tpl_vars['url']['root']; ?>
/themes/default/templates/user/style/sgkjs/script.js"></script>
        <input  class="cssInput" id="keyword" name="key" type="text" placeholder="请输入姓名&QQ&电话&身份证&用户名&邮箱">
        <input type="submit" id="she" name="she" value="Normal" class="sub-red"/>
        <input type="submit" id="she16" name="she" value="MD5_16" class="sub-info"/>
        <input type="submit" id="she32" name="she" value="MD5_32" class="sub-suc"/>
    </form>
</div>
</body>
</html>