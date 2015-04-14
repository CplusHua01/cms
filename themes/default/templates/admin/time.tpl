
{include file="admin/top.tpl"}
<div class="container-fluid main-content">
    <div class="page-title" align="center">
        <h1>
            修改文章
        </h1>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <form method="post" action="{$url.root}/admin/xx_times">
            <div class="widget-container fluid-height">
                <div class="heading">
                    <div class="col-md-7">
                        {foreach name=outer item=contact from=$edit}

                        <div class="col-md-2">
                            <h3><i class="icon-4x icon-edit"></i>标题</h3>
                        </div>
                        {foreach key=key item=item from=$contact}
                            {if $key eq 'id'}
                                <input type="hidden" name="id" value="{$item}">
                            {/if}
                        {/foreach}
                        <div class="col-md-7">
                            {foreach key=key item=item from=$contact}
                                {if $key eq 'title'}
                                    <input name="title" class="form-control"  type="text" value="{$item}">
                                {/if}
                            {/foreach}
                        </div>
                    </div>
                </div>
                <div class="widget-content padded">
                    <textarea id="content" name="content" style="width:700px;height:300px;">
                                                    {foreach key=key item=item from=$contact}
                                                        {if $key eq 'content'}
                                                        {$item}
                                                        {/if}
                                                    {/foreach}


                    </textarea>
                    {/foreach}
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
                    <button class="btn btn-lg btn-block btn-primary-outline">点击保存时间轴文章</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>