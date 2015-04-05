{include file="admin/top.tpl"}
<div class="container-fluid main-content">
        <!-- Statistics -->
        <div class="row">
          <div class="col-lg-12">
            <div class="widget-container stats-container">
              <div class="col-md-4">
                <div class="number">
                  <div class="icon globe"></div>
                  {$sitedays} 天
                </div>
                <div class="text">
                    网站运营时长
                </div>
              </div>
              <div class="col-md-4">
                <div class="number">
                  <div class="icon visitors"></div>
                  {$num} 名
                </div>
                <div class="text">
                    成功注册人数
                </div>
              </div>
              <div class="col-md-4">
                <div class="number">
                  <div class="icon-hdd"></div>
                    9E 条
                </div>
                <div class="text">
                    数据数量
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Statistics -->
        <div class="row">
        </div>
        <div class="row">
          <!-- Area Charts:Morris -->
          <div class="col-md-12">
            <div class="widget-container fluid-height">
              <div class="heading">
                <i class="icon-bar-chart"></i>查询条形图
              </div>
              <div class="widget-content padded text-center">
                <div class="graph-container">
                  <div class="caption"></div>
                  <div class="graph" id="hero-area"></div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <!-- Pie Graph 1 -->
          <div class="col-lg-5">
            <div class="widget-container fluid-height">
              <div class="heading">
                <i class="icon-bar-chart"></i>甜甜圈图
              </div>
              <div class="widget-content clearfix">
                <div class="col-sm-6">
                  <div class="pie-chart1 pie-chart pie-number" data-percent="87">
                    87%
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="pie-chart2 pie-chart pie-number" data-percent="26">
                    26%
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="widget-container fluid-height">
              <!-- Table -->
              <table class="table table-filters">
                <tbody>
                  <tr>
                    <td class="filter-category blue">
                      <div class="arrow-left"></div>
                      <i class="icon-stethoscope"></i>
                    </td>
                    <td>
                        全国分发Co.
                    </td>
                    <td>
                      $9204
                    </td>
                    <td class="hidden-xs">
                      <div class="sparkslim">
                        50,55,60,40,30,35,30,20,25,30,40,20,15
                      </div>
                    </td>
                    <td>
                      <div class="danger">
                        -4%
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="filter-category green">
                      <div class="arrow-left"></div>
                      <i class="icon-coffee"></i>
                    </td>
                    <td>
                        明星组织有限公司.
                    </td>
                    <td>
                      $23,890
                    </td>
                    <td class="hidden-xs">
                      <div class="sparkslim">
                        5,10,15,50,80,50,40,30,50,60,70,75,75
                      </div>
                    </td>
                    <td>
                      <div class="success">
                        +12%
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="filter-category orange">
                      <div class="arrow-left"></div>
                      <i class="icon-gamepad"></i>
                    </td>
                    <td>
                        公司软有限责任公司
                    </td>
                    <td>
                      $10,995
                    </td>
                    <td class="hidden-xs">
                      <div class="sparkslim">
                        100,100,80,70,40,20,20,40,50,60,70
                      </div>
                    </td>
                    <td>
                      <div class="success">
                        +5%
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="filter-category red">
                      <div class="arrow-left"></div>
                      <i class="icon-gift"></i>
                    </td>
                    <td>
                        工艺 Co.
                    </td>
                    <td>
                      $6,790
                    </td>
                    <td class="hidden-xs">
                      <div class="sparkslim">
                        5,10,15,20,30,40,80,100,120,120,140
                      </div>
                    </td>
                    <td>
                      <div class="success">
                        +26%
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="filter-category blue">
                      <div class="arrow-left"></div>
                      <i class="icon-stethoscope"></i>
                    </td>
                    <td>
                        全国分发Co.
                    </td>
                    <td>
                      $9204
                    </td>
                    <td class="hidden-xs">
                      <div class="sparkslim">
                        50,55,60,40,30,35,30,20,25,30,40,20,15
                      </div>
                    </td>
                    <td>
                      <div class="danger">
                        -4%
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="filter-category magenta">
                      <div class="arrow-left"></div>
                      <i class="icon-trophy"></i>
                    </td>
                    <td>
                        Fastnation有限公司.
                    </td>
                    <td>
                      $22,156
                    </td>
                    <td class="hidden-xs">
                      <div class="sparkslim">
                        20,40,50,60,70,80,90,95,100,80,70,60
                      </div>
                    </td>
                    <td>
                      <div class="danger">
                        -4%
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End Pie Graph 1 -->
        </div>
      </div>
    </div>
  </body>

</html>