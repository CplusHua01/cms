{include file="admin/top.tpl"}
<!-- End Navigation -->
{*{literal}*}
    {*<script>*}
        {*function del(){*}
            {*var aHTML = $('#uuuid').code();*}
            {*$.post(*}
                {*$.post("deluser",{uuuid:aHTML},function(data){*}
                    {*alert("Data Loaded: " + data);*}
                {*})*}
            {*)*}
        {*}*}
    {*</script>*}
{*{/literal}*}

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
                            {section name=index loop=$uinfo }
                                <form action="deluser" method="post">
                                    <tr>
                                        <td>
                                            {$uinfo[index].userName}
                                        </td>
                                        <td>{if $uinfo[index].adminLevel eq 1 }
                                            是
                                            {else}
                                            否
                                            {/if}
                                        </td>
                                        <td>{$uinfo[index].email}</td>
                                        <td>{$uinfo[index].addTime|date_format:'%Y-%m-%d'}</td>
                                        <td>
                                            {if $uinfo[index].validated eq 1}
                                                是
                                            {else}
                                            否
                                            {/if}
                                        </td>
                                        <td>{if $uinfo[index].loginTime eq 0}
                                                还未登录过
                                            {else}
                                            {$uinfo[index].loginTime|date_format:'%Y-%m-%d'}</td>
                                            {/if}
                                        <td>
                                            {if is_null($uinfo[index].ip)}
                                                还未登录过
                                            {else}
                                            {$uinfo[index].ip}
                                            {/if}
                                        </td>
                                        <input type="hidden" name="uuuuid" value="{$uinfo[index].userName}">
                                        <td><button class="btn btn-xs btn-info-outline" name="del" value="del">删除</button></td>
                                        <td><button class="btn btn-xs btn-info-outline" onclick="alert('修改');" >修改</button></td>
                                    </tr>
                                </form>
                            {/section}

                            </tbody>
                        </table>
                        <ul class="pagination" style="float: right">
                            {$unav}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end DataTables Example -->
    </div>
    </div>
        {*<div class="widget-content padded text-center">*}
            {*<div class="page">*}
                {*<ul class="pagination">*}
                    {*{$unav}*}
                {*</ul>*}
            {*</div>*}
        {*</div>*}
</div>
</body>

</html>