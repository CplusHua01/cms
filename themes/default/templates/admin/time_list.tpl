
{include file="admin/top.tpl"}
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
                                {section name=index loop=$timesData }

                                <tr>
                                    <td>
                                        {$timesData[index].title}
                                    </td>
                                    <td>
                                        {$timesData[index].time|date_format:'%Y-%m-%d %H:%M:%S'}
                                    </td>
                                    <td class="hidden-xs">
                                        {$timesData[index].username}
                                    </td>
                                    <td class="actions">
                                        <div class="action-buttons">
                                            <a class="table-actions" href="{$url.root}/user/time" target="_Blank"><i class="icon-eye-open"></i></a>
                                            <a class="table-actions" href="{$url.root}/admin/x_time/{$timesData[index].id}" ><i class="icon-pencil"></i></a>
                                            <a class="table-actions" href="{$url.root}/admin/delTime/{$timesData[index].id}"><i class="icon-trash"></i></a></form>
                                        </div>
                                    </td>
                                </tr>
                                {/section}


                                </tbody>
                            </table>
                            <a href="{$url.root}/admin/newTime"> <button class="btn btn-primary"><i class="icon-user"></i>发布新时间轴文章</button></a>
                            <ul class="pagination" style="float: right">
                                {$tnav}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>