
{include file="admin/top.tpl"}
{literal}
<script>
    var save = function() {
        var aHTML = $('#summernote').code(); //save HTML If you need(aHTML: array).
//        $.ajax({
            $.post("times",{content:aHTML},function(data){
                    alert("Data Loaded: " + data);
                })
//        })
    };
</script>
{/literal}
<div class="container-fluid main-content">
    <div class="page-title">
        <h1>
            发表时间轴文章
        </h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="widget-container fluid-height">
                <div class="heading">
                    <i class="icon-edit"></i>WYSIWYG 富文本编辑器
                </div>
                <div class="widget-content padded">
                    <div id="summernote">
                        编辑文本
                    </div>
                    <button class="btn btn-lg btn-block btn-primary-outline" onclick="save()">点击发布时间轴文章</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>