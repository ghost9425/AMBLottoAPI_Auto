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
                <h1><b style="color: #19A17A !important;" set-lan="text:4. Seamless API">4. Seamless API</b></h1>
                <div class="pb-3"></div>
                <div class="col-12" id="tabOne">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.1 Introduction Seamless API">4.1
                            Introduction Seamless API</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label
                            set-lan="html:4.1 Body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ในส่วนนี้จะแสดงรายละเอียดเพื่ออธิบายการทำงานของระบบ seamless ระบบของคู่ธุรกิจ</label>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabTwo">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.2 Workflow">4.2 Workflow</b>
                    </lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label
                            set-lan="html:4.2 Body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ข้อมูลเบื้องต้นแสดงการทำงานในการเรียกใช้ API ของระบบคู่ธุรกิจ เพื่อให้ระบบสามารถเรียกใช้ API ได้ภายใต้เงื่อนไขได้อย่างถูกต้อง</label>
                    </div>
                    <div class="col-12">
                        <img src="./API_files/SeamlessFlow.png" style="width: 80%; margin-left: 10%;">
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabThree">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.3 Setting">4.3 Setting</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label
                            set-lan="html:0. *">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            *หากคุณมีบัญชีหลัก โปรดสร้างบัญชีตัวแทน API 
                            ภายใต้บัญชีหลักของคุณและเข้าสู่ระบบด้วยบัญชีตัวแทน API ที่สร้างขึ้นก่อน 
                            แล้วทำตามขั้นตอนการตั้งค่า ดังนี้
</label>
                        <label
                            set-lan="html:1.	Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.เข้าสู่ระบบ</label>
                        <div class="col-12">
                            <img src="./API_files/Login001.png" style="width: 30%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label
                            set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            2.คลิกเมนูบัญชีและเลือกเมนูโปรไฟล์</label>
                        <div class="col-12">
                            <img src="./API_files/Account002.png" style="width: 80%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label id="tabZero"
                            set-lan="html:4. Define">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.กำหนดข้อมูล API ต่อไปนี้</label>
                        <div class="col-12">
                            <label
                                set-lan="html:4.1 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                3.1 คุณสามารถเพิ่มที่อยู่ IP ได้โดยกรอกข้อมูลที่ Callback Url</label>
                        </div>
                        <div class="col-12">
                            <label
                                set-lan="html:4.2 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                3.2 คุณสามารถคลิกปุ่ม “บันทึก” เพื่อบันทึกข้อมูล</label>
                        </div>
                        <div class="col-12">
                            <img src="./API_files/3.png" style="width: 80%; margin-left: 10%;">
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabFour">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.4 login request">4.4 login
                            request</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://dev-api.pirate168.com/apiRoute/member/loginRequest
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable1">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="txtCenter bRight">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="txtCenter bRight">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">
                                            Description</th>
                                        <th set-lan="html:Remark" class="txtCenter">Remark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Agent account , Account length is restricted to 36 chars at most.</td>
                                        <td class="bRight txtCenter">-</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">System generate key ID after crate Agent</td>
                                        <td class="bRight txtCenter">-</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                        <td class="bRight txtCenter">-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;"
                                            set-lan="text:Example Request Body">Example Request Body</b><i
                                            class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="3_4A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"compseamless"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"3e5ecb1f7d639dff2e3bcc05948726a8e7cafa0a75a07117b9562c4b7bc67c665a409cec17f9dfa02"</span>,
    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Type" class="bRight txtCenter">Description
                                        </th>
                                        <th set-lan="html:Remark" class="txtCenter">Remark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                        <td class="bRight txtCenter">-</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Information message.</td>
                                        <td class="bRight txtCenter">-</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object response.</td>
                                        <td class="bRight txtCenter">-</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                        <td class="bRight txtCenter">-</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from AMBLotto system.</td>
                                        <td class="bRight txtCenter">-</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                        <td class="bRight txtCenter">-</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">tkUuid</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Can use only 1 time. limit to 24 hours from generate time.</td>
                                        <td class="bRight txtCenter">-</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">url</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">AMBLotto link</td>
                                        <td class="bRight txtCenter">-</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">urlFullPage</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">AMBLotto link fullpage</td>
                                        <td class="bRight txtCenter">-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>missing filed 'playerUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">41001</td>
                                        <td>Error Request body is not an object.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61001</td>
                                        <td>Invalid UserAgent or ApiKey</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61001</td>
                                        <td>request error Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61001</td>
                                        <td>request error callback url requst error destination error</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71005</td>
                                        <td>playerUsername must be between 4 and 24 characters long.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71006</td>
                                        <td>username must not contain any special characters and can only contain letters a-z and numbers 0-9.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Response
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="3_4B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-attr">"data"</span>: { <span class="hljs-string">"SUCCESS"</span>,
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"67239355aa8af3f4a6678e31cc3eb83a1612322fc2bf6b8f268b1660f1f37e"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"member1@compseamless"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1"</span>,
        <span class="hljs-attr">"tkUuid"</span>: <span class="hljs-string">"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg"</span>,
        <span class="hljs-attr">"url"</span>: <span class="hljs-string">"https://dev-front.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg&header=off"</span>,
        <span class="hljs-attr">"urlFullPage"</span>: <span class="hljs-string">"https://dev-front.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg&header=on"</span>
    },
    <span class="hljs-attr">"mgs"</span>: <span class="hljs-string">"success"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:** Optional">** Optional for
                                direct/re-direct link.</b></lable>
                    </div>
                    <div class="form-group col-12">
                        <label
                            set-lan="html:You can add">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            You can add a value (BAC, DRA, SIC, ROU, MUL) to the parameter in the of the link
                            (&amp;game=) to redirect players to the specific games</label>
                    </div>
                    <div class="col-8">
                        <a href="https://service-api.prettygaming.asia/img/zip/game_icons.rar" style="float: right;"
                            class="Point" download=""><i class="fa fa-download" aria-hidden="true"></i>
                            <label class="Point">&nbsp;Download Icon</label></a>
                    </div>
                    <div class="form-group col-3"></div>
                    <div class="form-group col-2"></div>
                    <div class="form-group col-6">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th class="bRight txtCenter" style="width: 200px;">Name</th>
                                        <th class="bRight txtCenter" style="width: 210px;">Value of parameter</th>
                                        <th class="txtCenter" style="width: 210px;">Image icon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtMid">Baccarat</td>
                                        <td class="bRight txtCenter txtMid">BAC</td>
                                        <td class="bRight txtCenter bBottom" style="background-color: gray;">
                                            <img src="./API_files/baccarat.png" class="IconSize"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">Dragon-Tiger</td>
                                        <td class="bRight txtCenter txtMid">DRA</td>
                                        <td class="bRight txtCenter bBottom" style="background-color: gray;">
                                            <img src="./API_files/dragon tiger.png" class="IconSize"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">Roulette</td>
                                        <td class="bRight txtCenter txtMid">ROU</td>
                                        <td class="bRight txtCenter bBottom" style="background-color: gray;">
                                            <img src="./API_files/roulette.png" class="IconSize"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">SicBo</td>
                                        <td class="bRight txtCenter txtMid">SIC</td>
                                        <td class="bRight txtCenter bBottom" style="background-color: gray;">
                                            <img src="./API_files/sic bo.png" class="IconSize"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">Multi-Table</td>
                                        <td class="bRight txtCenter txtMid">MUL</td>
                                        <td class="bRight txtCenter" style="background-color: gray;">
                                            <img src="./API_files/multi-table.png" class="IconSize"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Game direct link</b></lable>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.9rem;">
                        <div class="col-12">
                            <label class="txtHead">Baccarat
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;</label><label
                                class="txtHead">game=BAC</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Dragon-Tiger
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;</label><label
                                class="txtHead">game=DRA</label>

                        </div>
                        <div class="col-12">
                            <label class="txtHead">Roulette
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;</label><label
                                class="txtHead">game=ROU</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">SicBo
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;</label><label
                                class="txtHead">game=SIC</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Multi-Table
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;</label><label
                                class="txtHead">game=MUL</label>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Language</b></lable>
                    </div>
                    <div class="form-group col-12">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Remark: please use exactly code with example.</label>
                    </div>
                </div> -->
                <!-- <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-2"></div>
                    <div class="form-group col-6">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th class="bRight txtCenter" style="width: 200px;">Language</th>
                                        <th class="txtCenter" style="width: 210px;">Value of parameter</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtMid">English</td>
                                        <td class="txtCenter txtMid">EN</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">Thai</td>
                                        <td class="txtCenter txtMid">TH</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">Chinese Mandarin</td>
                                        <td class="txtCenter txtMid">CNM</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">Chinese Cantonese</td>
                                        <td class="txtCenter txtMid">CNC</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">Korean</td>
                                        <td class="txtCenter txtMid">KOR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">Vietnam</td>
                                        <td class="txtCenter txtMid">VT</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.87rem;">
                        <div class="col-12">
                            <label class="txtHead">English
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                class="txtHead">lang=EN</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Thai
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                class="txtHead">lang=TH</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Chinese Mandarin
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                class="txtHead">lang=CNM</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Chinese Cantonese
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                class="txtHead">lang=CNC</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Korean
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                class="txtHead">lang=KOR</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Vietnam
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                class="txtHead">lang=VT</label>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Signout re-direct optional link:</b></lable>
                    </div>
                </div> -->
                <!-- <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.681rem;">
                        <div class="col-12">
                            <label class="txtHead">Baccarat
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;url=</label><label
                                class="txtHead">input your link here(full link with https://)</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Dragon-Tiger
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=DRA&amp;url=</label><label
                                class="txtHead">input your link here(full link with https://)</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Roulette
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=ROU&amp;url=</label><label
                                class="txtHead">input your link here(full link with https://)</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">SicBo
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=SIC&amp;url=</label><label
                                class="txtHead">input your link here(full link with https://)</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Multi-Table
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=MUL&amp;url=</label><label
                                class="txtHead">input your link here(full link with https://)</label>
                        </div>
                    </div>
                </div> -->
                <div class="pb-5"></div>


                <div class="col-12" id="tabFive">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.5 Call Back Service">4.5 Call Back
                            Service</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="col-12">
                    <label
                        set-lan="html:*Please keep">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        *โปรดเก็บข้อมูล ”Call Back Service” <b
                            style="color: red;">ทั้งหมดไว้เป็นความลับ</b>.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </label>
                </div>
                <lable><b style="color: #19A17A !important;"></b></lable>
                <div class="pb-5"></div>
                <div class="col-12" id="tabSix" style="margin-left: 10px;">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.5.1 GetUserBalance">4.5.1
                            GetUserDetail</b>
                    </lable>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                            <label
                                set-lan="html:When a player">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                เมื่อผู้เล่นเข้าสู่หน้าแรกหรือหน้าอื่นๆ ของระบบ AMB Lotto ระบบจะส่งคำขอเพื่อรับยอดเงินคงเหลือของผู้เล่นจริง</label>
                    </div>
                    <div class="form-group col-12 ex">
                            <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                            </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable351">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                        <th set-lan="html:Remark" class="txtCenter">Remark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"GetUserDetail"</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object respone.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;"
                                            set-lan="text:Example Request Body">Example Request Body</b><i
                                            class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="351A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"GetUserDetail"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1"</span>,
        <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"agent"</span>
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                            <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                            </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable351">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                        <th set-lan="html:Remark" class="txtCenter">Remark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">username</td>
                                        <td class="bRight">String</td>
                                        <td>Username from partner system.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">phone</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">email</td>
                                        <td class="bRight">String</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">line</td>
                                        <td class="bRight">String</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rate</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                            <lable><b style="color: #19A17A !important;" set-lan="text:Request Code">Request Code</b>
                            </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable351">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td class="bRight">success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td class="bRight">Bad parameters.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td class="bRight">Player not found.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;"
                                            set-lan="text:Example Request Body">Example Request Body</b><i
                                            class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="351A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-string">0</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"username"</span>: <span class="hljs-string">"member1"</span>,
        <span class="hljs-attr">"phone"</span>: <span class="hljs-string">"081111111111"</span>,
        <span class="hljs-attr">"email"</span>: <span class="hljs-string">"google1@gmail.com"</span>,
        <span class="hljs-attr">"line"</span>: <span class="hljs-string">"line1"</span>,
        <span class="hljs-attr">"rate"</span>: {   <span class="hljs-string">"line1"</span>
        },
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabSixs" style="margin-left: 10px;">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.5.1 GetUserBalance">4.5.2
                            GetUserBalance</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label
                            set-lan="html:When a player">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            เมื่อผู้เล่นเข้าสู่หน้าแรกหรือหน้าอื่นๆ ของระบบ AMB Lotto ระบบจะส่งคำขอเพื่อรับยอดเงินคงเหลือของผู้เล่นจริง</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable351">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"GetUserBalance"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from Pretty Gaming system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">requestDate</td>
                                        <td class="bRight">String</td>
                                        <td>System request date. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;"
                                            set-lan="text:Example Request Body">Example Request Body</b><i
                                            class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="351A" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"service"</span>: <span class="hljs-string">"GetUserBalance"</span>,
                <span class="hljs-attr">"data"</span>: {
                <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"5eae90e32f7df02c92fde32d"</span>,
                <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"startseamlessmember@startapiseamless"</span>,
                <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startseamlessmember"</span>,
                <span class="hljs-attr">"requestDate"</span>: <span class="hljs-string">"2020-05-03 19:16:47"</span>
                }
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 10%;" set-lan="html:Required" class="bRight txtCenter">
                                            Required</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">balance</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>SUCCESS</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="351B" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"balance"</span>: <span class="hljs-number">100000</span>
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabSeven">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.5.2 UserPlaceBet">4.5.3
                            UserPlaceBet</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label
                            set-lan="html:When a player places">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            When a player places a bet, the Pretty Gaming system sends a request UserPlaceBet to the
                            partner's system. The request will be timed out after 4 seconds and PlaceBetCancel will
                            be sent.</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable352">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"UserPlaceBet"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerId</td>
                                        <td class="bRight">String</td>
                                        <td>Player identity form Pretty Gaming system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from Pretty Gaming system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>
                                        <td>User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td>Bet type = Baccarat,4Point,Super6,CowCow, DragonTiger, Roulette,SicBo
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">currency</td>
                                        <td class="bRight">String</td>
                                        <td>Standard ISO 3-character currency unit eg: CNY/USD/EUR . <a
                                                href="https://service-api.prettygaming.asia/Page_API_Document/Bet_Limit.aspx"
                                                class="aLink">currency list</a></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">gameId</td>
                                        <td class="bRight">Number</td>
                                        <td>GameID</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPayOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>totalPayOutAmt equals 0 when a player loses but not in every game, for
                                            example, if a player places a bet in dragon tiger then he loses half of
                                            the bet amount (when bets 100, then totalPayOutAmt equals 50).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">winLoseTurnOver</td>
                                        <td class="bRight">Number</td>
                                        <td>Member win/lose turnover.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">arrayobject</td>
                                        <td>List of bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtId</td>
                                        <td class="bRight">String</td>
                                        <td>Transaction id of bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">commissionRate</td>
                                        <td class="bRight">Number</td>
                                        <td>Commission Rate.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td>Rate payout when member win.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betPosition</td>
                                        <td class="bRight">String</td>
                                        <td>Bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>Bet amount of this reccord.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>Payout amount of this reccord.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td>SuccessfulPayment,SuccessfulBet, Pending, Canceled.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">createDate</td>
                                        <td class="bRight">String</td>
                                        <td>The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">requestDate</td>
                                        <td class="bRight">String</td>
                                        <td>System request date. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;"
                                            set-lan="text:Example Request Body">Example Request Body</b><i
                                            class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="352A" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPlaceBet"</span>,
                <span class="hljs-attr">"data"</span>: {
                <span class="hljs-attr">"playerId"</span>: <span class="hljs-string">"5eae90e32f7df02c92fde32d"</span>,
                <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"startseamlessmember"</span>,
                <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startseamlessmember"</span>,
                <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">"1004718"</span>,
                <span class="hljs-attr">"type"</span>: <span class="hljs-string">"Baccarat"</span>,
                <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"THB"</span>,
                <span class="hljs-attr">"gameId"</span>: <span class="hljs-number">146826</span>,
                <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-number">-1400</span>,
                <span class="hljs-attr">"totalPayOutAmt"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"winLoseTurnOver"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"txtList"</span>: [
                    {
                    <span class="hljs-attr">"txtId"</span>: <span class="hljs-string">"5eaec8cdb9fe9212c6bd8aa5"</span>,
                    <span class="hljs-attr">"commissionRate"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">1.95</span>,
                    <span class="hljs-attr">"betPosition"</span>: <span class="hljs-string">"banker"</span>,
                    <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">-500</span>,
                    <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">0</span>
                    },
                    {
                    <span class="hljs-attr">"txtId"</span>: <span class="hljs-string">"5eaec8cdb9fe9212c6bd8aa9"</span>,
                    <span class="hljs-attr">"commissionRate"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">4.5</span>,
                    <span class="hljs-attr">"betPosition"</span>: <span class="hljs-string">"bankerNatural"</span>,
                    <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">-500</span>,
                    <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">0</span>
                    },
                    {
                    <span class="hljs-attr">"txtId"</span>: <span class="hljs-string">"5eaec8cdb9fe9212c6bd8aad"</span>,
                    <span class="hljs-attr">"commissionRate"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">12</span>,
                    <span class="hljs-attr">"betPosition"</span>: <span class="hljs-string">"bankerPair"</span>,
                    <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">-200</span>,
                    <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">0</span>
                    },
                    {
                    <span class="hljs-attr">"txtId"</span>: <span class="hljs-string">"5eaec8cdb9fe9212c6bd8dec"</span>,
                    <span class="hljs-attr">"commissionRate"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">1.5</span>,
                    <span class="hljs-attr">"betPosition"</span>: <span class="hljs-string">"big"</span>,
                    <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">-200</span>,
                    <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">0</span>
                    }
                ],
                <span class="hljs-attr">"status"</span>: <span class="hljs-string">"Pending"</span>,
                <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2020-05-03 20:36:13"</span>,
                <span class="hljs-attr">"requestDate"</span>: <span class="hljs-string">"2020-05-03 20:36:13"</span>
                }
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 10%;" set-lan="html:Required" class="bRight txtCenter">
                                            Required</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>SUCCESS</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911001</td>
                                        <td>Insufficient balance.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911002</td>
                                        <td>Account is Suspend.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911004</td>
                                        <td>Session expired.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911005</td>
                                        <td>Bet failed. Please try again.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911006</td>
                                        <td>The game is under maintenance.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911007</td>
                                        <td>You are not allowed to play this game.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911010</td>
                                        <td>Account is locked.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="352B" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabEight">
                    <lable><b style="color: #19A17A !important;">4.5.4 UserPlaceBetCancel</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label
                            set-lan="html:when previous PlaceBet">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            when previous PlaceBet is failed due to timeout or partner system error.Partner system
                            should refund the user if the transaction has been done in the partner system side.If
                            there are timeout or error, the request will be retried after n seconds within m
                            tries.An expired request will move to the unsuccessful transaction list for back office
                            to further process.Those unsuccessful transactions can be retry by the operator through
                            the back office.</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable352">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"UserPlaceBetCancel"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerId</td>
                                        <td class="bRight">String</td>
                                        <td>Player identity form Pretty Gaming system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from Pretty Gaming system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>
                                        <td>User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td>Bet type = Baccarat,4Point,Super6,CowCow, DragonTiger, Roulette,SicBo
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">currency</td>
                                        <td class="bRight">String</td>
                                        <td>Standard ISO 3-character currency unit eg: CNY/USD/EUR . <a
                                                href="https://service-api.prettygaming.asia/Page_API_Document/Bet_Limit.aspx"
                                                class="aLink">currency list</a></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">gameId</td>
                                        <td class="bRight">Number</td>
                                        <td>GameID</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPayOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>totalPayOutAmt equals 0 when a player loses but not in every game, for
                                            example, if a player places a bet in dragon tiger then he loses half of
                                            the bet amount (when bets 100, then totalPayOutAmt equals 50).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">winLoseTurnOver</td>
                                        <td class="bRight">Number</td>
                                        <td>Member win/lose turnover.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">arrayobject</td>
                                        <td>List of bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtId</td>
                                        <td class="bRight">String</td>
                                        <td>Transaction id of bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">commissionRate</td>
                                        <td class="bRight">Number</td>
                                        <td>Commission Rate.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td>Rate payout when member win.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betPosition</td>
                                        <td class="bRight">String</td>
                                        <td>Bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>Bet amount of this reccord.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>Payout amount of this reccord.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td>SuccessfulPayment,SuccessfulBet, Pending, Canceled.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">createDate</td>
                                        <td class="bRight">String</td>
                                        <td>The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">requestDate</td>
                                        <td class="bRight">String</td>
                                        <td>System request date. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;"
                                            set-lan="text:Example Request Body">Example Request Body</b><i
                                            class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="353A" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPlaceBetCancel"</span>,
                <span class="hljs-attr">"data"</span>: {
                <span class="hljs-attr">"playerId"</span>: <span class="hljs-string">"5eae90e32f7df02c92fde32d"</span>,
                <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"'startseamlessmember,"</span>,
                <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startseamlessmember"</span>,
                <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">"1004718"</span>,
                <span class="hljs-attr">"type"</span>: <span class="hljs-string">"Baccarat"</span>,
                <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"THB"</span>,
                <span class="hljs-attr">"gameId"</span>: <span class="hljs-number">146826</span>,
                <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-number">-1400</span>,
                <span class="hljs-attr">"totalPayOutAmt"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"winLoseTurnOver"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"txtList"</span>: [
                    {
                    <span class="hljs-attr">"txtId"</span>: <span class="hljs-string">"5eaec8cdb9fe9212c6bd8aa5"</span>,
                    <span class="hljs-attr">"commissionRate"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">1.95</span>,
                    <span class="hljs-attr">"betPosition"</span>: <span class="hljs-string">"banker"</span>,
                    <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">-500</span>,
                    <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">0</span>
                    },
                    {
                    <span class="hljs-attr">"txtId"</span>: <span class="hljs-string">"5eaec8cdb9fe9212c6bd8aa9"</span>,
                    <span class="hljs-attr">"commissionRate"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">4.5</span>,
                    <span class="hljs-attr">"betPosition"</span>: <span class="hljs-string">"bankerNatural"</span>,
                    <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">-500</span>,
                    <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">0</span>
                    },
                    {
                    <span class="hljs-attr">"txtId"</span>: <span class="hljs-string">"5eaec8cdb9fe9212c6bd8aad"</span>,
                    <span class="hljs-attr">"commissionRate"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">12</span>,
                    <span class="hljs-attr">"betPosition"</span>: <span class="hljs-string">"bankerPair"</span>,
                    <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">-200</span>,
                    <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">0</span>
                    },
                    {
                    <span class="hljs-attr">"txtId"</span>: <span class="hljs-string">"5eaec8cdb9fe9212c6bd8dec"</span>,
                    <span class="hljs-attr">"commissionRate"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">1.5</span>,
                    <span class="hljs-attr">"betPosition"</span>: <span class="hljs-string">"big"</span>,
                    <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">-200</span>,
                    <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">0</span>
                    }
                ],
                <span class="hljs-attr">"status"</span>: <span class="hljs-string">"Canceled"</span>,
                <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2020-05-03 20:36:13"</span>,
                <span class="hljs-attr">"requestDate"</span>: <span class="hljs-string">"2020-05-03 20:36:13"</span>
                }
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 10%;" set-lan="html:Required" class="bRight txtCenter">
                                            Required</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>SUCCESS</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">51101</td>
                                        <td>Duplicate Transaction (no return).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">51102</td>
                                        <td>Transaction not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="353B" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabNine">
                    <lable><b style="color: #19A17A !important;">4.5.5 UserPlacePayout</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label
                            set-lan="html:This interface will">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            This interface will be called after the platform pays, and the member's bet will be
                            returned to the third-party system in time. If the call times out or does not receive a
                            response, the system will re-call every minute until it succeeds.</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable352">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"UserPlacePayout"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerId</td>
                                        <td class="bRight">String</td>
                                        <td>Player identity form Pretty Gaming system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from Pretty Gaming system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>
                                        <td>User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td>Bet type = Baccarat,4Point,Super6,CowCow, DragonTiger, Roulette,SicBo
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">currency</td>
                                        <td class="bRight">String</td>
                                        <td>Standard ISO 3-character currency unit eg: CNY/USD/EUR . <a
                                                href="https://service-api.prettygaming.asia/Page_API_Document/Bet_Limit.aspx"
                                                class="aLink">currency list</a></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">gameId</td>
                                        <td class="bRight">Number</td>
                                        <td>GameID</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPayOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>totalPayOutAmt equals 0 when a player loses but not in every game, for
                                            example, if a player places a bet in dragon tiger then he loses half of
                                            the bet amount (when bets 100, then totalPayOutAmt equals 50).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">winLoseTurnOver</td>
                                        <td class="bRight">Number</td>
                                        <td>Member win/lose turnover.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">arrayobject</td>
                                        <td>List of bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtId</td>
                                        <td class="bRight">String</td>
                                        <td>Transaction id of bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">commissionRate</td>
                                        <td class="bRight">Number</td>
                                        <td>Commission Rate.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td>Rate payout when member win.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betPosition</td>
                                        <td class="bRight">String</td>
                                        <td>Bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>Bet amount of this reccord.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>Payout amount of this reccord.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td>SuccessfulPayment,SuccessfulBet, Pending, Canceled.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">result</td>
                                        <td class="bRight">arrayobject</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rsDr</td>
                                        <td class="bRight">object</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rsBc</td>
                                        <td class="bRight">object</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rsRu</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rsSic</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">winBc</td>
                                        <td class="bRight">array</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">winDr</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">winRu</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">winSic</td>
                                        <td class="bRight">object</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">resultLink</td>
                                        <td class="bRight">String</td>
                                        <td>Link for show game reslut of this game Id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">createDate</td>
                                        <td class="bRight">String</td>
                                        <td>The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">requestDate</td>
                                        <td class="bRight">String</td>
                                        <td>System request date. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;"
                                            set-lan="text:Example Request Body">Example Request Body</b><i
                                            class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="354A" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPlacePayout"</span>,
                <span class="hljs-attr">"data"</span>: {
                <span class="hljs-attr">"playerId"</span>: <span class="hljs-string">"5eae90e32f7df02c92fde32d"</span>,
                <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"startseamlessmember@startapiseamless"</span>,
                <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startseamlessmember"</span>,
                <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">"1004831"</span>,
                <span class="hljs-attr">"type"</span>: <span class="hljs-string">"Baccarat"</span>,
                <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"THB"</span>,
                <span class="hljs-attr">"gameId"</span>: <span class="hljs-number">147846</span>,
                <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-number">-10000</span>,
                <span class="hljs-attr">"totalPayOutAmt"</span>: <span class="hljs-number">10000</span>,
                <span class="hljs-attr">"winLoseTurnOver"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"txtList"</span>: [
                    {
                    <span class="hljs-attr">"txtId"</span>: <span class="hljs-string">"5eafdb00a875b774c30fffce"</span>,
                    <span class="hljs-attr">"commissionRate"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"betPosition"</span>: <span class="hljs-string">"banker"</span>,
                    <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">-10000</span>,
                    <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">10000</span>
                    }
                ],
                <span class="hljs-attr">"status"</span>: <span class="hljs-string">"SuccessfulPayment"</span>,
                <span class="hljs-attr">"result"</span>: {
                    <span class="hljs-attr">"rsBc"</span>: [
                    <span class="hljs-string">"Object"</span>
                    ],
                    <span class="hljs-attr">"rsDr"</span>: [
                    <span class="hljs-string">"Object"</span>
                    ],
                    <span class="hljs-attr">"rsRu"</span>: <span class="hljs-literal">null</span>,
                    <span class="hljs-attr">"rsSic"</span>: <span class="hljs-literal">null</span>,
                    <span class="hljs-attr">"winBc"</span>: [
                    <span class="hljs-string">"Array"</span>
                    ],
                    <span class="hljs-attr">"winDr"</span>: <span class="hljs-literal">null</span>,
                    <span class="hljs-attr">"winRu"</span>: <span class="hljs-literal">null</span>,
                    <span class="hljs-attr">"winSic"</span>: []
                },
                <span class="hljs-attr">"resultLink"</span>: <span class="hljs-string">"https://admin-dev.prettygaming.asia/?gameId=147846"</span>,
                <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2020-05-04 16:04:43"</span>,
                <span class="hljs-attr">"requestDate"</span>: <span class="hljs-string">"2020-05-04 16:06:08"</span>
                }
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 10%;" set-lan="html:Required" class="bRight txtCenter">
                                            Required</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>SUCCESS</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">51101</td>
                                        <td>Duplicate Transaction (no return).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="354B" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tab15">
                    <lable><b style="color: #19A17A !important;">4.5.6 UserPayTips</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label
                            set-lan="html:356">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            When a player places a bet, the Pretty Gaming system sends a request UserPayTips to the
                            partner's system. The request will be timed out after 4 seconds and PlaceBetCancel will
                            be sent.</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable356A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"UserPayTips"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerId</td>
                                        <td class="bRight">String</td>
                                        <td>Player identity form Pretty Gaming system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from Pretty Gaming system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>
                                        <td>User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td>Bet type = Baccarat,4Point,Super6,CowCow, DragonTiger, Roulette,SicBo
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">currency</td>
                                        <td class="bRight">String</td>
                                        <td>Standard ISO 3-character currency unit eg: CNY/USD/EUR . <a
                                                href="https://service-api.prettygaming.asia/Page_API_Document/Bet_Limit.aspx"
                                                class="aLink">currency list</a></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">gameId</td>
                                        <td class="bRight">Number</td>
                                        <td>GameID</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPayOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>totalPayOutAmt equals 0 when a player loses but not in every game, for
                                            example, if a player places a bet in dragon tiger then he loses half of
                                            the bet amount (when bets 100, then totalPayOutAmt equals 50).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">winLoseTurnOver</td>
                                        <td class="bRight">Number</td>
                                        <td>Member win/lose turnover.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">Object</td>
                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtId</td>
                                        <td class="bRight">String</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">commissionRate</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betPosition</td>
                                        <td class="bRight">String</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">payOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td>SuccessfulPayment,SuccessfulBet, Pending, Canceled.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">createDate</td>
                                        <td class="bRight">String</td>
                                        <td>The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">requestDate</td>
                                        <td class="bRight">String</td>
                                        <td>System request date. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;"
                                            set-lan="text:Example Request Body">Example Request Body</b><i
                                            class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="356A" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPayTips"</span>,
                <span class="hljs-attr">"data"</span>: {
                <span class="hljs-attr">"playerId"</span>: <span class="hljs-string">"5eae90e32f7df02c92fde32d"</span>,
                <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"startseamlessmember"</span>,
                <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startseamlessmember"</span>,
                <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">"1004718"</span>,
                <span class="hljs-attr">"type"</span>: <span class="hljs-string">"Tips"</span>,
                <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"THB"</span>,
                <span class="hljs-attr">"gameId"</span>: <span class="hljs-number">146826</span>,
                <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-number">-1400</span>,
                <span class="hljs-attr">"totalPayOutAmt"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"winLoseTurnOver"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"txtList"</span>: [
                    {
                    <span class="hljs-attr">"txtId"</span>: <span class="hljs-string">"5fe07f9724f30035d29ba03b"</span>,
                    <span class="hljs-attr">"commissionRate"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"betPosition"</span>: <span class="hljs-string">"tips"</span>,
                    <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">500</span>,
                    <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">0</span>
                    }
                ],
                <span class="hljs-attr">"status"</span>: <span class="hljs-string">"SuccessfulPayment"</span>,
                <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2020-05-03 20:36:13"</span>,
                <span class="hljs-attr">"requestDate"</span>: <span class="hljs-string">"2020-05-03 20:36:13"</span>
                }
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable356B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 10%;" set-lan="html:Required" class="bRight txtCenter">
                                            Required</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable356C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>SUCCESS</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911001</td>
                                        <td>Insufficient balance.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911002</td>
                                        <td>Account is Suspend.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911004</td>
                                        <td>Session expired.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911005</td>
                                        <td>Bet failed. Please try again.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911006</td>
                                        <td>The game is under maintenance.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911007</td>
                                        <td>You are not allowed to play this game.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911010</td>
                                        <td>Account is locked.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="356B" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tab16">
                    <lable><b style="color: #19A17A !important;">4.5.7 UserPayTipsCancel</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label
                            set-lan="html:357">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            When a player places a bet, the Pretty Gaming system sends a request UserPayTipsCalcel
                            to the partner's system. The request will be timed out after 4 seconds and
                            PlaceBetCancel will be sent.</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable357A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"UserPayTipsCancel"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerId</td>
                                        <td class="bRight">String</td>
                                        <td>Player identity form Pretty Gaming system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from Pretty Gaming system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>
                                        <td>User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td>Bet type = Baccarat,4Point,Super6,CowCow, DragonTiger, Roulette,SicBo
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">currency</td>
                                        <td class="bRight">String</td>
                                        <td>Standard ISO 3-character currency unit eg: CNY/USD/EUR . <a
                                                href="https://service-api.prettygaming.asia/Page_API_Document/Bet_Limit.aspx"
                                                class="aLink">currency list</a></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">gameId</td>
                                        <td class="bRight">Number</td>
                                        <td>GameID</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPayOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>totalPayOutAmt equals 0 when a player loses but not in every game, for
                                            example, if a player places a bet in dragon tiger then he loses half of
                                            the bet amount (when bets 100, then totalPayOutAmt equals 50).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">winLoseTurnOver</td>
                                        <td class="bRight">Number</td>
                                        <td>Member win/lose turnover.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">Object</td>
                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtId</td>
                                        <td class="bRight">String</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">commissionRate</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betPosition</td>
                                        <td class="bRight">String</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">payOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td>SuccessfulPayment,SuccessfulBet, Pending, Canceled.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">createDate</td>
                                        <td class="bRight">String</td>
                                        <td>The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">requestDate</td>
                                        <td class="bRight">String</td>
                                        <td>System request date. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;"
                                            set-lan="text:Example Request Body">Example Request Body</b><i
                                            class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="357A" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPayTipsCancel"</span>,
                <span class="hljs-attr">"data"</span>: {
                <span class="hljs-attr">"playerId"</span>: <span class="hljs-string">"5eae90e32f7df02c92fde32d"</span>,
                <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"startseamlessmember"</span>,
                <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startseamlessmember"</span>,
                <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">"1004718"</span>,
                <span class="hljs-attr">"type"</span>: <span class="hljs-string">"Tips"</span>,
                <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"THB"</span>,
                <span class="hljs-attr">"gameId"</span>: <span class="hljs-number">146826</span>,
                <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-number">-1400</span>,
                <span class="hljs-attr">"totalPayOutAmt"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"winLoseTurnOver"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"txtList"</span>: [
                    {
                    <span class="hljs-attr">"txtId"</span>: <span class="hljs-string">"5fe07f9724f30035d29ba03b"</span>,
                    <span class="hljs-attr">"commissionRate"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"betPosition"</span>: <span class="hljs-string">"tips"</span>,
                    <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">500</span>,
                    <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">0</span>
                    }
                ],
                <span class="hljs-attr">"status"</span>: <span class="hljs-string">"Canceled"</span>,
                <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2020-05-03 20:36:13"</span>,
                <span class="hljs-attr">"requestDate"</span>: <span class="hljs-string">"2020-05-03 20:36:13"</span>
                }
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable357B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 10%;" set-lan="html:Required" class="bRight txtCenter">
                                            Required</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable357C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>SUCCESS</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">51101</td>
                                        <td>Duplicate Transaction (no return).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">51102</td>
                                        <td>Transaction not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="357B" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabTen">
                    <lable><b style="color: #19A17A !important;">4.5.8 Response Code</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Pretty Gaming API Respone</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable355B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:Parameter" style="width: 100px;" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71002</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71003</td>
                                        <td>Invalid agentUsername or apiKey.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>Invalid agentUsername or apiKey.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71005</td>
                                        <td>playerUsername must be between 4 and 24 characters long ,
                                            error_filed:"playerUsername".</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71006</td>
                                        <td>username must not contain any special characters and can only contain
                                            letters a-z and numbers 0-9.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71007</td>
                                        <td>invalid bet limit id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71008</td>
                                        <td>System detects double request bets. Please wait 1 minute to proceed
                                            again.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71009</td>
                                        <td>Bet below the limit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71010</td>
                                        <td>Bet more than the limit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71011</td>
                                        <td>Game ID not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71012</td>
                                        <td>No more bets.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71013</td>
                                        <td>Up line amount is not enough to accept your bet. Please contact your up
                                            line.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71014</td>
                                        <td>Invalid request body.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71015</td>
                                        <td>Can request up to 5 times per minute.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71016</td>
                                        <td>Can request up to 15 times per minute.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71017</td>
                                        <td>Can request up to 30 times per minute.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <lable id="tabEleven"><b style="color: #19A17A !important;">4.6 Optional API</b></lable>
                <div class="pb-4"></div>
                <div class="col-12" id="tabFourteen">
                    <lable><b style="color: #19A17A !important;">4.6.1 memberBetHistories</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Url : </label>
                            <label>https://api-dev.prettygaming.asia/apiRoute/api/memberBetHistories</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable48A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate <a
                                                href="https://service-api.prettygaming.asia/Page_API_Document/Seamless_API.aspx?Action=0"
                                                class="aLink">key</a> ID after crate Agent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">startDate</td>
                                        <td class="bRight">Date</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">endDate</td>
                                        <td class="bRight">Date</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">page</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;"
                                            set-lan="text:Example Request Body">Example Request Body</b><i
                                            class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="48A" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"startapiTransferwallet"</span>,
                <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"ae6330a9-6c2f-1bd3-3122-47ddad703de9"</span>,
                <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startTransferwalletmember"</span>,
                <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2019-05-03 20:36:13"</span>,
                <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2020-05-20 20:36:13"</span>,
                <span class="hljs-attr">"page"</span>: <span class="hljs-number">1</span>
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable38B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 10%;" set-lan="html:Required" class="bRight txtCenter">
                                            Required</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Player username from Pretty Gaming system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">startDate</td>
                                        <td class="bRight">Date</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">endDate</td>
                                        <td class="bRight">Date</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">result</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">docs</td>
                                        <td class="bRight">Array</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Array of documents.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalDocs</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Total number of documents in collection that match a query.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">limit</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Limit that was used.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPages</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Total number of pages.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">page</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Current page number</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">pagingCounter</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>The starting sl. number of first document.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hasPrevPage</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hasNextPage</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">prevPage</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">nextPage</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable47C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>SUCCESS</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">997</td>
                                        <td>invalid input format 'balance' field.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71002</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71003</td>
                                        <td>Invalid agentUsername or apiKey.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>missing filed 'playerUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71016</td>
                                        <td>Can request up to 15 times per minute.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71018</td>
                                        <td>missing filed 'startDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71019</td>
                                        <td>missing filed 'endDate'.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71020</td>
                                        <td>Invalid filed 'startDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71021</td>
                                        <td>Invalid filed 'endDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71022</td>
                                        <td>Invalid filed 'page'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="48B" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"msg"</span>: <span class="hljs-string">"SUCCESS"</span>,
                <span class="hljs-attr">"data"</span>: {
                <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"5eae90e32f7df02c92fde32d"</span>,
                <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startTransferwalletmember"</span>,
                <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"startTransferwalletmember@startapiTransferwallet"</span>,
                <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2019-05-03 20:36:13"</span>,
                <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2020-05-20 20:36:13"</span>,
                <span class="hljs-attr">"result"</span>: {
                    <span class="hljs-attr">"docs"</span>: [],
                    <span class="hljs-attr">"totalDocs"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"limit"</span>: <span class="hljs-number">100</span>,
                    <span class="hljs-attr">"totalPages"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"page"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"pagingCounter"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"hasPrevPage"</span>: <span class="hljs-literal">false</span>,
                    <span class="hljs-attr">"hasNextPage"</span>: <span class="hljs-literal">false</span>,
                    <span class="hljs-attr">"prevPage"</span>: <span class="hljs-literal">null</span>,
                    <span class="hljs-attr">"nextPage"</span>: <span class="hljs-literal">null</span>
                }
                }
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabTwelve">
                    <lable><b style="color: #19A17A !important;">4.6.2 betHistories</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://api-dev.prettygaming.asia/apiRoute/api/betHistories
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable49A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate <a
                                                href="https://service-api.prettygaming.asia/Page_API_Document/Seamless_API.aspx?Action=0"
                                                class="aLink">key</a> ID after crate Agent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">startDate</td>
                                        <td class="bRight">Date</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">endDate</td>
                                        <td class="bRight">Date</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">page</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;"
                                            set-lan="text:Example Request Body">Example Request Body</b><i
                                            class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="49A" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"startapiTransferwallet"</span>,
                <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"ae6330a9-6c2f-1bd3-3122-47ddad703de9"</span>,
                <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2019-05-03 20:36:13"</span>,
                <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2020-05-20 20:36:13"</span>,
                <span class="hljs-attr">"page"</span>: <span class="hljs-number">1</span>
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Bet Position</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">BACCARAT</td>
                                        <td>'banker', 'player', 'tie', 'bankerPair', 'playerPair', 'big', 'small',
                                            'bankerNatural', 'playerNatural', 'super6'</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">DRAGON TIGER</td>
                                        <td>'dragon','tiger'</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">TIPS DEALER</td>
                                        <td>'tips'</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable49B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 10%;" set-lan="html:Required" class="bRight txtCenter">
                                            Required</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentUserId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">startDate</td>
                                        <td class="bRight">Date</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">endDate</td>
                                        <td class="bRight">Date</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">result</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">docs</td>
                                        <td class="bRight">Array</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Array of documents.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalDocs</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Total number of documents in collection that match a query.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">limit</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Limit that was used.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPages</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Total number of pages.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">page</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Current page number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">pagingCounter</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>The starting sl. number of first document.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hasPrevPage</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hasNextPage</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">prevPage</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">nextPage</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable47C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>SUCCESS</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">997</td>
                                        <td>invalid input format 'balance' field.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71002</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71003</td>
                                        <td>Invalid agentUsername or apiKey.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>missing filed 'playerUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71016</td>
                                        <td>Can request up to 15 times per minute.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71018</td>
                                        <td>missing filed 'startDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71019</td>
                                        <td>missing filed 'endDate'.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71020</td>
                                        <td>Invalid filed 'startDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71021</td>
                                        <td>Invalid filed 'endDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71022</td>
                                        <td>Invalid filed 'page'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Calculation Description</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable47D">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">validAmt</td>
                                        <td>validAmt = betAmt</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutAmt</td>
                                        <td>payOutAmt = (betAmt(absolute) * payOutRate) + payOutCom</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">winLose</td>
                                        <td>winLose = payOutAmt - validAmt</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="49B" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"msg"</span>: <span class="hljs-string">"SUCCESS"</span>,
                <span class="hljs-attr">"data"</span>: {
                <span class="hljs-attr">"agentUserId"</span>: <span class="hljs-string">"5eae908903b0b56fd5b1f429"</span>,
                <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"startapiTransferwallet"</span>,
                <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2019-05-03 20:36:13"</span>,
                <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2020-05-20 20:36:13"</span>,
                <span class="hljs-attr">"result"</span>: {
                    <span class="hljs-attr">"docs"</span>: [
                    {
                        <span class="hljs-attr">"validAmt"</span>: <span class="hljs-number">100</span>,
                        <span class="hljs-attr">"payOutCom"</span>: <span class="hljs-number">0</span>,
                        <span class="hljs-attr">"payOutBet"</span>: <span class="hljs-number">200</span>,
                        <span class="hljs-attr">"winLose"</span>: <span class="hljs-number">100</span>,
                        <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">200</span>,
                        <span class="hljs-attr">"betStatus"</span>: <span class="hljs-string">"Win"</span>,
                        <span class="hljs-attr">"status"</span>: <span class="hljs-string">"SuccessfulPayment"</span>,
                        <span class="hljs-attr">"_id"</span>: <span class="hljs-string">"7h2hhe2ed4g85d86551h60hh"</span>,
                        <span class="hljs-attr">"memberId"</span>: <span class="hljs-string">"7h2080e87cgged83ge4h37g7"</span>,
                        <span class="hljs-attr">"memberUsername"</span>: <span class="hljs-string">"perttygaming@perttygaming"</span>,
                        <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"THB"</span>,
                        <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">"1111676"</span>,
                        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"DragonTiger"</span>,
                        <span class="hljs-attr">"gameId"</span>: <span class="hljs-number">771112</span>,
                        <span class="hljs-attr">"tableId"</span>: <span class="hljs-string">"DRG-1"</span>,
                        <span class="hljs-attr">"round"</span>: <span class="hljs-number">38</span>,
                        <span class="hljs-attr">"commissionRate"</span>: <span class="hljs-number">0</span>,
                        <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">2</span>,
                        <span class="hljs-attr">"betPosition"</span>: <span class="hljs-string">"tiger"</span>,
                        <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">-100</span>,
                        <span class="hljs-attr">"ip"</span>: <span class="hljs-string">"305.00.440.440"</span>,
                        <span class="hljs-attr">"updateDate"</span>: <span class="hljs-string">"2020-07-16T07:04:44.270Z"</span>,
                        <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2020-07-16T07:04:44.270Z"</span>,
                        <span class="hljs-attr">"__v"</span>: <span class="hljs-number">0</span>,
                        <span class="hljs-attr">"result"</span>: {
                        <span class="hljs-attr">"rsBc"</span>: {
                            <span class="hljs-attr">"banker_1"</span>: <span class="hljs-literal">null</span>,
                            <span class="hljs-attr">"banker_2"</span>: <span class="hljs-literal">null</span>,
                            <span class="hljs-attr">"banker_3"</span>: <span class="hljs-literal">null</span>,
                            <span class="hljs-attr">"banker123"</span>: <span class="hljs-number">0</span>,
                            <span class="hljs-attr">"player_1"</span>: <span class="hljs-literal">null</span>,
                            <span class="hljs-attr">"player_2"</span>: <span class="hljs-literal">null</span>,
                            <span class="hljs-attr">"player_3"</span>: <span class="hljs-literal">null</span>,
                            <span class="hljs-attr">"player123"</span>: <span class="hljs-number">0</span>
                        },
                        <span class="hljs-attr">"rsDr"</span>: {
                            <span class="hljs-attr">"dragon"</span>: <span class="hljs-string">"9H"</span>,
                            <span class="hljs-attr">"dragon_tt"</span>: <span class="hljs-number">9</span>,
                            <span class="hljs-attr">"tiger"</span>: <span class="hljs-string">"JS"</span>,
                            <span class="hljs-attr">"tiger_tt"</span>: <span class="hljs-number">11</span>
                        },
                        <span class="hljs-attr">"rsRu"</span>: <span class="hljs-literal">null</span>,
                        <span class="hljs-attr">"rsSic"</span>: <span class="hljs-literal">null</span>,
                        <span class="hljs-attr">"winBc"</span>: [],
                        <span class="hljs-attr">"winDr"</span>: <span class="hljs-string">"TIGER"</span>,
                        <span class="hljs-attr">"winRu"</span>: <span class="hljs-literal">null</span>,
                        <span class="hljs-attr">"winSic"</span>: []
                        }
                    }
                    ],
                    <span class="hljs-attr">"totalDocs"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"limit"</span>: <span class="hljs-number">100</span>,
                    <span class="hljs-attr">"totalPages"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"page"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"pagingCounter"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"hasPrevPage"</span>: <span class="hljs-literal">false</span>,
                    <span class="hljs-attr">"hasNextPage"</span>: <span class="hljs-literal">false</span>,
                    <span class="hljs-attr">"prevPage"</span>: <span class="hljs-literal">null</span>,
                    <span class="hljs-attr">"nextPage"</span>: <span class="hljs-literal">null</span>
                }
                }
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabThirteen">
                    <lable><b style="color: #19A17A !important;">4.6.3 getMemberWinLoseTurnOver</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://api-dev.prettygaming.asia/apiRoute/api/getMemberWinLoseTurnOver
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate <a
                                                href="https://service-api.prettygaming.asia/Page_API_Document/Transferwallet_API.aspx?Action=0"
                                                class="aLink">key</a> ID after crate Agent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">startDate</td>
                                        <td class="bRight">Date</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">endDate</td>
                                        <td class="bRight">Date</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;"
                                            set-lan="text:Example Request Body">Example Request Body</b><i
                                            class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"startapiTransferwallet"</span>,
                <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"ae6330a9-6c2f-1bd3-3122-47ddad703de9"</span>,
                <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startTransferwalletmember"</span>,
                <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2019-05-03 20:36:13"</span>,
                <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2020-05-20 20:36:13"</span>
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 10%;" set-lan="html:Required" class="bRight txtCenter">
                                            Required</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Player username from Pretty Gaming system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">startDate</td>
                                        <td class="bRight">Date</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">endDate</td>
                                        <td class="bRight">Date</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">turnOver</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>SUCCESS</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">997</td>
                                        <td>invalid input format 'balance' field.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71002</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71003</td>
                                        <td>Invalid agentUsername or apiKey.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>missing filed 'playerUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71015</td>
                                        <td>Can request up to 5 times per minute.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71018</td>
                                        <td>missing filed 'startDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71019</td>
                                        <td>missing filed 'endDate'.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71020</td>
                                        <td>Invalid filed 'startDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71021</td>
                                        <td>Invalid filed 'endDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true"
                                            style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410B" style="border-radius: 0.375rem;" class="hljs json">{
                <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"msg"</span>: <span class="hljs-string">"SUCCESS"</span>,
                <span class="hljs-attr">"data"</span>: {
                <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"5eae90e32f7df02c92fde32d"</span>,
                <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startTransferwalletmember"</span>,
                <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"startTransferwalletmember@startapiTransferwallet"</span>,
                <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2019-05-03 20:36:13"</span>,
                <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2020-05-20 20:36:13"</span>,
                <span class="hljs-attr">"turnOver"</span>: <span class="hljs-number">0</span>
                }
            }</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="btn-toolbar mb-12">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='lottotype.php'">
                            <lan set-lan="html:Back">Back</lan>
                        </button>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='transferwallet.php'">
                            <lan set-lan="html:Next">Next</lan>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<?php include 'layouts/footer.php';?>

<script type="text/javascript">
    $(document).ready(function () {
        $("#manu4 , #manu4 > a").addClass("active");
        $("#manu4 > div").css("display", "block");

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