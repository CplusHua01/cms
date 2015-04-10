{include file="user/top.tpl"}
<div class="container-fluid main-content">
    <div class="page-title" align="center">
        <h1>
            时间轴
        </h1>
    </div>
    <ul class="timeline animated">
        {section name=index loop=$timeData }
        <li>
            <div class="timeline-time">
                <strong>{$timeData[index].time|date_format:'%Y-%m-%d'}</strong>{$timeData[index].username}
            </div>
            <div class="timeline-icon">
                <div class="bg-primary">
                    <i class="icon-pencil"></i>
                </div>
            </div>
            <div class="timeline-content">
                <h1>
                    {$timeData[index].title}
                </h1>
                <p>
                    {$timeData[index].content}

                </p>
            </div>
        </li>
        {/section}
    </ul>
</div>
