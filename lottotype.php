<?php include 'layouts/header.php';?>
<div class="wrapper container">
    <?php include 'layouts/nav.php';?>
    <main class="" style="padding-left: 15rem; transition: all 0.3s ease-in-out 0s;">
        <?php include 'layouts/lang.php';?>
        <div class="body-content">

            <style>
                .txtHead {
                    color: #7F0055;
                }
            </style>
            <div style="background: #f2f3f4; padding: 30px; margin-top: 1%; border-radius: .375rem;">
                <h1><b style="color: #19A17A !important;" set-lan="text:3. Seamless API">3. Lotto Type</b></h1>
                <div class="pb-3"></div>
                <div class="col-12" id="tabOne">
                    <lable><b style="color: #19A17A !important;" set-lan="text:3.1 Introduction Seamless API">3.1
                    Key Type</b></lable>
                </div>
                <div class="pb-3"></div>
                <!-- <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label
                            set-lan="html:3.1 Body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            This section is to illustrate the detail of implementing seamless in external partner
                            system.</label>
                    </div>
                </div> -->
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                            <div class="table-wrapper">
                                <table class="table table-borderless table-striped" id="DataTable1">
                                    <thead class="rgba-green-slight">
                                        <tr>
                                            <th style="width:2%" set-lan="html:Parameter" class="txtCenter bRight">
                                            #</th>
                                            <th style="width:5%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Key</th>
                                            <th style="width:5%" set-lan="html:Type" class="txtCenter bRight">Description
                                            </th>
                                            <th set-lan="html:Required" class="bRight txtCenter">
                                            Subtype</th>
                                            <th set-lan="html:Description" class="txtCenter">Government</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bRight">1</td>
                                            <td class="bRight">thailotto</td>
                                            <td class="bRight">หวยไทย</td>
                                            <td class="bRight">top6,top5,top4,row4,top3,bottom3,row3,top2,bottom2,row2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">2</td>
                                            <td class="bRight">laoslotto</td>
                                            <td class="bRight">หวยลาว(แทงแบบไทย)</td>
                                            <td class="bRight">top4,row4,top3,row3,top2,bottom2,row2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">3</td>
                                        <td class="bRight">hanoylotto</td>
                                            <td class="bRight">หวยฮานอย</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">4</td>
                                            <td class="bRight">hanoylottovip</td>
                                            <td class="bRight">หวยฮานอย(วีไอพี)</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">5</td>
                                            <td class="bRight">baaclotto</td>
                                            <td class="bRight">หวย ธกส.</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">6</td>
                                            <td class="bRight">gsblotto</td>
                                            <td class="bRight">ออมสิน</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">7</td>
                                            <td class="bRight">pingponglotto</td>
                                            <td class="bRight">หวยปิงปอง</td>
                                            <td class="bRight">top6,top5,top4,row4,top3,row3,top2,bottom2,row2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">8</td>
                                            <td class="bRight">laoslotto_set</td>
                                            <td class="bRight">หวยลาว(แบบชุด)</td>
                                            <td class="bRight">lottoset, top4,row4,top3,row3,back2,front2</td>
                                            <td class="txtCenter">ชุด</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">9</td>
                                            <td class="bRight">yeekeelotto</td>
                                            <td class="bRight">หวยยี่กี</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">10</td>
                                            <td class="bRight">malaylotto</td>
                                            <td class="bRight">หวยมาเลย์</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">11</td>
                                            <td class="bRight">hanoylotto_set</td>
                                            <td class="bRight">หวยฮานอย(แบบชุด)</td>
                                            <td class="bRight">lottoset, top4,row4,top3,row3,back2,front2</td>
                                            <td class="txtCenter">ชุด</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">12</td>
                                            <td class="bRight">hanoylottovip_set</td>
                                            <td class="bRight">หวยฮานอยวีไอพี(แบบชุด)</td>
                                            <td class="bRight">lottoset, top4,row4,top3,row3,back2,front2</td>
                                            <td class="txtCenter">ชุด</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">13</td>
                                            <td class="bRight">hanoylottospecial_set</td>
                                            <td class="bRight">หวยฮานอยพิเศษ(แบบชุด)</td>
                                            <td class="bRight">lottoset, top4,row4,top3,row3,back2,front2</td>
                                            <td class="txtCenter">ชุด</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">14</td>
                                            <td class="bRight">malaylotto_set</td>
                                            <td class="bRight">หวยมาเลย์(แบบชุด)</td>
                                            <td class="bRight">lottoset, top4,row4,top3,row3,back2,front2</td>
                                            <td class="txtCenter">ชุด</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">15</td>
                                            <td class="bRight">hanoylottospecial</td>
                                            <td class="bRight">หวยฮานอย(พิเศษ)</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">16</td>
                                            <td class="bRight">stockkorea</td>
                                            <td class="bRight">หวยหุ้นเกาหลี</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">17</td>
                                            <td class="bRight">stockchina</td>
                                            <td class="bRight">หวยหุ้นจีน</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">18</td>
                                            <td class="bRight">stockdowjones</td>
                                            <td class="bRight">หวยหุ้นดาวโจนส์</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                        <td class="bRight">19</td>
                                            <td class="bRight">stocktaiwan</td>
                                            <td class="bRight">หวยหุ้นไต้หวัน</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">20</td>
                                            <td class="bRight">stockengland</td>
                                            <td class="bRight">หวยหุ้นอังกฤษ</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">21</td>
                                            <td class="bRight">stockindia</td>
                                            <td class="bRight">หวยหุ้นอินเดีย</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">22</td>
                                            <td class="bRight">stockhangseng</td>
                                            <td class="bRight">หวยหุ้นฮั่งเส็ง</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">23</td>
                                            <td class="bRight">stockegypt</td>
                                            <td class="bRight">หวยหุ้นอียิปต์</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">24</td>
                                            <td class="bRight">stocknikkei</td>
                                            <td class="bRight">หวยหุ้นนิเคอิ</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">25</td>
                                            <td class="bRight">stocksingapore</td>
                                            <td class="bRight">หวยหุ้นสิงค์โปร</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">26</td>
                                            <td class="bRight">stockthai</td>
                                            <td class="bRight">หวยหุ้นไทย</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">27</td>
                                            <td class="bRight">stockgerman</td>
                                            <td class="bRight">หวยหุ้นเยอรมัน</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">28</td>
                                            <td class="bRight">stockrussia</td>
                                            <td class="bRight">หวยหุ้นรัสเซีย</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">29</td>
                                            <td class="bRight">stock</td>
                                            <td class="bRight">รวบหวยหุ้น(ใช้ประเภทนี้ในการตั้งค่าเท่านั้น)</td>
                                            <td class="bRight">top3,row3,top2,bottom2,top1,bottom1</td>
                                            <td class="txtCenter">ไทย</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabTwo">
                    <lable><b style="color: #19A17A !important;" set-lan="text:3.2 Workflow">3.2 Key Sub Type</b>
                    </lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                            <div class="table-wrapper">
                                <table class="table table-borderless table-striped" id="DataTable1">
                                    <thead class="rgba-green-slight">
                                        <tr>
                                            <th style="width:2%" set-lan="html:Parameter" class="txtCenter bRight">
                                            #</th>
                                            <th style="width:5%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Key</th>
                                            <th style="width:5%" set-lan="html:Type" class="txtCenter bRight">Description
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bRight txtCenter">1</td>
                                            <td class="bRight">top6</td>
                                            <td class="bRight">6 ตัวบน</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight txtCenter">2</td>
                                            <td class="bRight">top5</td>
                                            <td class="bRight">5 ตัวบน</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight txtCenter">3</td>
                                            <td class="bRight">top4</td>
                                            <td class="bRight">4 ตัวบน</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight txtCenter">4</td>
                                            <td class="bRight">row4</td>
                                            <td class="bRight">4 โต๊ด</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight txtCenter">5</td>
                                            <td class="bRight">top3</td>
                                            <td class="bRight">3 ตัวบน</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight txtCenter">6</td>
                                            <td class="bRight">bottom3</td>
                                            <td class="bRight">3 ตัวล่าง</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight txtCenter">7</td>
                                            <td class="bRight">row3</td>
                                            <td class="bRight">3 โต๊ด</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight txtCenter">8</td>
                                            <td class="bRight">top2</td>
                                            <td class="bRight">2 ตัวบน</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight txtCenter">9</td>
                                            <td class="bRight">bottom2</td>
                                            <td class="bRight">2 ตัวล่าง</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight txtCenter">10</td>
                                            <td class="bRight">row2</td>
                                            <td class="bRight">2 โต๊ด</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight txtCenter">11</td>
                                            <td class="bRight">back2</td>
                                            <td class="bRight">2 ตัวหลัง</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight txtCenter">12</td>
                                            <td class="bRight">front2</td>
                                            <td class="bRight">2 ตัวหน้า</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight txtCenter">13</td>
                                            <td class="bRight">top1</td>
                                            <td class="bRight">1 ตัวบน</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight txtCenter">14</td>
                                            <td class="bRight">bottom1</td>
                                            <td class="bRight">1 ตัวล่าง</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight txtCenter">15</td>
                                            <td class="bRight">lottoset</td>
                                            <td class="bRight">หวยชุด</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
                
                <div class="btn-toolbar mb-12">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='version.php'">
                            <lan set-lan="html:Back">Back</lan>
                        </button>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='seamlessapi.php'">
                            <lan set-lan="html:Next">Next</lan>
                        </button>
                    </div>
                </div>
        </div>
    </main>
</div>

<?php include 'layouts/footer.php';?>

<script type="text/javascript">
    $(document).ready(function () {
        $("#manu3 , #manu3 > a").addClass("active");
        $("#manu3 > div").css("display", "block");

        $(this).on("click", ".koh-faq-question", function () {
            $(this).parent().find(".koh-faq-answer").slideToggle();
            $(this).find(".fa").toggleClass('active');
        });

        var URL = window.location.href;
        URL = URL.substring(URL.lastIndexOf('#') + 1);

        var page = 3;
        var link = url_link(page, URL);
        $("#" + link + " , #" + link + " > a").addClass("active");
    });
</script>

</body>

</html>