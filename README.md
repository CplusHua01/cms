<div id="container">
<h3>Sky_Sgk程序，基与oldcms开发</h3>
<p id="part1">
一、程序结构
<pre><code>
├── 404.html
├── 50x.html
├── captcha.php //验证码获取
├── config.php //配置
├── index.php //首页
├── init.php //初始化
├── libs //外部类
│   ├── Config_File.class.php //smarty
│   ├── Smarty.class.php //smarty
│   ├── Smarty_Compiler.class.php	//smarty
│   ├── debug.tpl	//调试模板
│   ├── internals smarty内部代码
│   ├── kindeditor //编辑器
│   └── plugins //smarty 插件
├── source
│   ├── admin.php //管理员操作核心代码
│   ├── class	//类库
│   │   ├── Captcha.class.php		//验证码类
│   │   ├── DB.class.php			//数据库操作类
│   │   ├── Image.class.php		//图片处理类
│   │   ├── PHPMailer.class.php	//邮件类
│   │   ├── Pager.class.php	//分页类
│   │   ├── Smtp.class.php	//邮件类
│   │   ├── User.class.php	//user 操作类
│   │   └── security.class.php //安全过滤类
│   ├── common.php	//公共处理页面
│   ├── function.php	//方法函数集
│   ├── global.func.php	//全局变量
│   ├── index.php	//首页的核心代码
│   ├── login.php	//登录的核心代码
│   ├── register.php	//注册的核心代码
│   ├── sgk	//社工库配置目录
│   │   ├── sgk.api.php	//spinx的api
│   │   └── sgk.inc.php	//连接的社工库的配置信息
│   └── user.php	//用户操作核心代码
├── themes	//主题
│   └── default	//默认主题
│       ├── templates	//smarty 模板目录
│       │   ├── admin	//admin 模板目录
│       │   │   ├── key.tpl	//邀请码管理模板
│       │   │   ├── login.tpl	//登录模板
│       │   │   ├── main.tpl	//后台首页模板
│       │   │   ├── newTime.tpl	//新建时间轴文章模板
│       │   │   ├── register.tpl //注册模板
│       │   │   ├── style	//样式目录
│       │   │   ├── time.tpl	//修改时间轴文章模板
│       │   │   ├── time_list.tpl	//时间轴列表模板
│       │   │   ├── top.tpl		//通用头模板
│       │   │   └── umanage.tpl		//用户管理模板
│       │   ├── css	//CMS自带样式
│       │   ├── index.tpl	//默认
│       │   ├── notice.tpl	//错误|正确信息显示模板
│       │   ├── user		//user 模板目录
│       │   │   ├── avatar.tpl	//头像模板
│       │   │   ├── main.tpl		//用户首页模板
│       │   │   ├── sgk_data.tpl	//取出数据来显示的模板
│       │   │   ├── style			//样式目录
│       │   │   ├── time.tpl	//时间轴模板
│       │   │   ├── top.tpl		//通用头模板
│       │   │   └── user_setting.tpl	//帐号设置模板
│       │   └── validate.tpl	//验证邮箱模板
│       └── templates_c	//smarty 模板编译目录
├── rewite.txt //伪静态规则		
├── sky.sql
└── upload
   ├── avatar      //头像上传目录
   └── image       //文章图片上传目录
   </code></pre>
</p>
  <p id="part2">
  <pre><code>
二、使用说明
导入sky.sql
修改网站用户配置的数据库---config.php
修改coreseek数据库配置--source/sgk/sgk.inc.php
设置目录upload为可读可写
如需要伪静态，将rewite.txt里面的内容复制即可
其他配置参考config.php
</code></pre>

最后更新：2015年4月16日，遗留问题：社工库查询的传值不对。待修复
可用的搜索连接
http://localhost/cms/search/搜索参数/搜索关键字/搜索模式
详情看 user/main.tpl 和 user.php的sgk