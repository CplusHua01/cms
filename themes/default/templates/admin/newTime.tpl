
{include file="admin/top.tpl"}
<div class="container-fluid main-content">
    <div class="page-title" align="center">
        <h1>
            发表时间轴文章
        </h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form method="post" action="{$url.root}/admin/times">
            <div class="widget-container fluid-height">
                <div class="heading">
                    <div class="col-md-7">
                        <div class="col-md-2 ">
                            <h4 style="margin-top: 7px"><a href="javascript:history.go(-1)">返回上一页</a></h4>
                        </div>
                        {*<div class="col-md-2">*}
                            {*<h3><i class="icon-4x icon-edit"></i>标题</h3>*}
                        {*</div>*}
                        <div class="col-md-7">
                            <input name="title" class="form-control" placeholder="请输入标题" type="text">
                        </div>
                    </div>
                </div>
                <div class="widget-content padded">
                    <textarea id="content" name="content" style="width:700px;height:300px;">

                    </textarea>
                    {literal}
                    <script type="text/javascript">
                        KindEditor.ready(function(K) {
                            window.editor = K.create('#content',
                                    {
                                        items:[ 'source', '|','formatblock',  'fontsize',  'bold', 'italic', 'underline', 'strikethrough', '|', 'undo', 'redo', '|', 'code', 'cut', 'copy', 'paste', 'plainpaste',  '|', 'justifyleft', 'justifycenter', 'justifyright', 'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript', 'superscript', 'clearhtml', 'quickformat', 'selectall', '|',  'image', 'multiimage', '|',  'removeformat', 'flash', 'media', 'insertfile', 'table',  'link', 'unlink', 'emoticons','|','fullscreen'],width:'100%',
                                    {/literal}
                                        uploadJson : '{$url.root}/libs/kindeditor/php/upload_json.php'
                                    {literal}
                                    }
                            );
                        });
                    </script>
                    {/literal}
                    <button class="btn btn-lg btn-block btn-primary-outline" onclick="save()">点击发布时间轴文章</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>