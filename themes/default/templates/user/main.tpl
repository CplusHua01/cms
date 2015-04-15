{include file="user/top.tpl"}
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{$url.root}/themes/default/templates/user/style/sgkcss/jquery.tzSelect.css" />
    <link rel="stylesheet" type="text/css" href="{$url.root}/themes/default/templates/user/style/sgkcss/sub.css">
    <link rel="stylesheet" type="text/css" href="{$url.root}/themes/default/templates/user/style/sgkcss/list.css">
</head>
<body>
<div align='center'>
    <form method='post' action='{$url.root}/user/sgk' target=‘_blank‘>
        <select class="regularSelect" id='searchMode' name="mode">
            <option value="SPH_MATCH_FULLSCAN" selected="selected" data-skip="1">完整扫描</option>
            <option value="SPH_MATCH_FULLSCAN" >完整扫描</option>
            <option value="SPH_MATCH_EXTENDED2">扩展匹配模式(V2)</option>
            <option value="SPH_MATCH_BOOLEAN">布尔查询</option>
            <option value="SPH_MATCH_PHRASE">短语匹配</option>
            <option value="SPH_MATCH_ANY">任意查询词</option>
            <option value="SPH_MATCH_ALL">所有查询词</option>
        </select>
        <script type="text/javascript" src="{$url.root}/themes/default/templates/user/style/sgkjs/jquery-1.4.4.min.js"></script>
        <script src="{$url.root}/themes/default/templates/user/style/sgkjs/jquery.tzSelect.js"></script>
        <script src="{$url.root}/themes/default/templates/user/style/sgkjs/script.js"></script>
        <input  class="cssInput" id="keyword" name="key" type="text" placeholder="请输入姓名&QQ&电话&身份证&用户名&邮箱">
        <input type="submit" id="she" name="she" value="搜" class="sub-red"/>
        <input type="submit" id="she16" name="she" value="MD5^16" class="sub-info"/>
        <input type="submit" id="she32" name="she" value="MD5^32" class="sub-suc"/>
    </form>
</div>
</body>
</html>