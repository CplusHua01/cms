<?php /* Smarty version 2.6.25, created on 2015-04-03 10:14:55
         compiled from validate.tpl */ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>验证邮箱</title>
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/templates/css/screen.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/templates/css/print.css" type="text/css">
    <!--[if lt IE 8]><link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/templates/css/ie.css" type="text/css"><![endif]-->
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/templates/css/style.css" type="text/css">
</head>
<body>
<div class="container">
    <div style="margin:50px auto 0 auto" class="success">已经向您的邮箱<?php echo $this->_tpl_vars['email']; ?>
发送了一份验证邮件，请注意查收，邮箱验证以后才可以登录！<a href="<?php echo $this->_tpl_vars['url']['login']; ?>
">登录</a>
        <br>
    </div>
</div>
</body>
</html>