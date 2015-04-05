{include file="admin/top.tpl"}
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
                                    {section name=index loop=$keyinfo }
                                        {if $keyinfo[index].isUsed eq 0}
                                    <tr>
                                        <td>{$keyinfo[index].addKeyUser}</td>
                                        {*<td><a href="{$url.root}/register/key/{$keyinfo[index].inviteKey}" target="_blank">{$keyinfo[index].inviteKey}</a></td>*}
                                        <td>{$keyinfo[index].inviteKey}</td>
                                        <td>Null</td>
                                        <td>Null</td>
                                        <td>{$keyinfo[index].addTime|date_format:'%Y-%m-%d'}</td>
                                        <td>Null</td>
                                        <td><button class="btn btn-xs btn-info-outline" onclick="alert('{$keyinfo[index].inviteKey}');" >复制</button></td>
                                    </tr>
                                            {else}
                                            <tr style="color: #FF66CC;text-decoration: line-through">
                                            <td>{$keyinfo[index].addKeyUser}</td>
                                            <td>{$keyinfo[index].inviteKey}</td>
                                            <td>{$keyinfo[index].regUserName}</td>
                                            <td>{$keyinfo[index].regUserEmail}</td>
                                            <td>{$keyinfo[index].addTime|date_format:'%Y-%m-%d'}</td>
                                            <td>{$keyinfo[index].regTime|date_format:'%Y-%m-%d'}</td>
                                            <td><button class="btn btn-xs " disabled>已用</button></td>
                                            </tr>
                                        {/if}
                                    {/section}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- end DataTables Example -->
            <div class="widget-content padded text-center">
                <div class="page">
                    <ul class="pagination">
                        {$nav}

                    </ul>
                </div>
    </div>
</div>
</body>

</html>