<div id="container">
  <h3>CMS | 版本 1.0 | 开源、简单、安全的PHP开发框架</h3>
  <p id="part1">
    1. 程序文件组织
    <pre><code>| install/                    /* 数据库文件、服务器Rewrite规则 */
  | oldcms.sql                /* 数据库文件 */
  | rewrite.txt               /* Rewrite规则(Apache,Nginx) */
| libs/                       /* Smarty程序目录 */
| source/                     /* 核心类库、方法 */
  | class/                    /* 类库 */
    | Captcha.class.php       /* 验证码类 */
    | DB.class.php            /* 数据库操作类 */
    | Image.class.php         /* 图片上传、缩略图类 */
    | Pager.class.php         /* 分页类 */
    | PHPMailer.class.php     /* 邮件类 */
    | Smtp.class.php          /* 邮件类 */
    | User.class.php          /* 用户类 */
  | common.php                /* 公共处理页面 */
  | function.php              /* 核心方法库 */
  | global.func.php           /* 自定义方法 */
  | index.php                 /* 首页 */
  | login.php                 /* 登录 */
  | register.php              /* 注册 */
| themes/                     /* 主题模板目录 */
  | default/
    | css/
    | img/
    | templates/
      | index.html
| captcha.php                 /* 验证码图片显示 */
| config.php                  /* 数据库配置、网站配置等 */
| init.php                    /* 初始化 */
| index.php                   /* 程序开始页 */</code></pre>
  </p>
  <p id="part2">
    2. 使用流程
    <pre><code>(1) 将/install/oldcms.sql入库，如需Rewrite则按rewrite.txt重写，然后配置/config.php
    相关数据库连接等信息。
(2) 在/index.php里修改$dos数组，同时在/source目录建立相关程序文件，访问url: 
    /index.php?do=index&act=index。
(3) /themes里为Smarty调用的模板目录，结构比较简单。</code></pre>
  </p>
  <p id="part3">
    3. 登录与注册：程序包里默认集成了登录和注册模块，如需使用请看相关文件。
  </p>
  <p id="part4">
    4. 程序安全：为了增强程序的安全，获取$_GET,$_POST,$_COOKIE等变量值时请尽量使用<strong>Val</strong>方法，具体请看/source/function.php，其它获取的变量值过滤可使用StripStr方法。
  </p>
  iiuskytest@163.com    123456a
</div>