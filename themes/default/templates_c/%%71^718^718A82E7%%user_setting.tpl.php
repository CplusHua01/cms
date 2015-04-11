<?php /* Smarty version 2.6.25, created on 2015-04-11 14:31:22
         compiled from user/user_setting.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user/top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script>

</script>
'; ?>

<div class="container-fluid main-content">
    <div class="page-title" align="center">
        <h1>
            帐号资料修改
        </h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="widget-container">
                <div class="heading">
                    <i class="icon-shield"></i>帐号资料修改

                </div>
                <div class="widget-content padded">
                    <form action="" id="x_user" method="post">
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">用户名</label><input class="form-control" id="uname" name="uname" type="text" disabled value="<?php echo $this->_tpl_vars['username']; ?>
">
                                    </div>
                                    <div class="form-group">
                                        <label for="username">注册时间</label><input class="form-control" id="regData" name="regData" type="text" disabled value="<?php echo $this->_tpl_vars['addTime']; ?>
">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">最后登录IP</label><input class="form-control" id="last_ip" name="last_ip" type="text" disabled value="<?php echo $this->_tpl_vars['lastip']; ?>
">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">邀请人</label><input class="form-control" id="yqr" name="yqr" type="text" disabled value="<?php echo $this->_tpl_vars['key_u']; ?>
">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Email</label><input class="form-control" id="email" name="email" type="text" value="<?php echo $this->_tpl_vars['email']; ?>
">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">旧密码</label><input class="form-control" id="oldPass" name="oldPass" type="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">新密码</label><input class="form-control" id="confirm_password" name="newPass" type="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm_password">确认密码</label><input class="form-control" id="confirm_password" name="cPass" type="password">
                                    </div>
                                </div>
                            </div>
                            <input class="btn btn-lg btn-block btn-primary " type="submit" value="保存修改">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>