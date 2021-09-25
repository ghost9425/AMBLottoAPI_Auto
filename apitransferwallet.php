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
                <h1><b style="color: #19A17A !important;" set-lan="text:3. Seamless API">3. API Transferwallet</b></h1>
                <div class="pb-3"></div>
                <div class="col-12" id="tabOne">
                    <lable><b style="color: #19A17A !important;" set-lan="text:3.1 Introduction Seamless API">3.1
                    Introduction API Transferwallet</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:0. *">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        *หมายเหตุ ในส่วนนี้การเปิดใช้ระบบ Auto จะต้องแจ้งเปิด Prefix ใหม่กับทาง AMB Lotto Line:@ 
                        <a href="https://line.me/ti/p/~@amblotto.vip" target="blank">
                            @amblotto.vip
                        </a>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabTwo">
                    <lable><b style="color: #19A17A !important;" set-lan="text:3.1 Introduction Seamless API">3.2
                    Register</b></lable>
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
                                https://test-api.pirate168.com/apiRoute/member/landing/register
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                            <div class="table-wrapper">
                                <table class="table table-borderless table-striped" id="DataTable1">
                                    <thead class="rgba-green-slight">
                                        <tr>
                                            <th style="width:15%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Parameter</th>
                                            <th style="width:20%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Type</th>
                                            <th style="width:45%" set-lan="html:Type" class="txtCenter bRight">Description
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bRight">username</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Username member.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">password</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Password for login.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">firstname</td>
                                            <td class="bRight">Number</td>
                                            <td class="bRight">Name must be matct with bank account.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">lastname</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Lastname must be matct with bank account.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">bank</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Bank name.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">acc_no</td>
                                            <td class="bRight">Number</td>
                                            <td class="bRight">Account number.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">phone</td>
                                            <td class="bRight">Number</td>
                                            <td class="bRight">Phone number.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">agent</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">This member register under by this agent.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">master_member</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Copy payout and discount from this user.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="45A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"username"</span>: <span class="hljs-string">"member01",</span>
    <span class="hljs-attr">"password"</span>: <span class="hljs-string">"aA444444",</span>
    <span class="hljs-attr">"firstname"</span>: <span class="hljs-string">"test01",</span>
    <span class="hljs-attr">"lastname"</span>: <span class="hljs-string">"test02",</span>
    <span class="hljs-attr">"bank"</span>: <span class="hljs-string">"KBANK",</span>
    <span class="hljs-attr">"acc_no"</span>: <span class="hljs-string">"0261294974",</span>
    <span class="hljs-attr">"phone"</span>: <span class="hljs-string">"0838259109",</span>
    <span class="hljs-attr">"agent"</span>: <span class="hljs-string">"agenttest",</span>
    <span class="hljs-attr">"master_member"</span>: <span class="hljs-string">"member1"</span>
}</code></pre>
                                    <script src="./API_files/ex4_5.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>

                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">message</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45C">
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
                                        <td class="bRight">2000</td>
                                        <td>user already exixt</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2041</td>
                                        <td>agent not found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2043</td>
                                        <td>กรุณาส่ง Prefix</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2043</td>
                                        <td>กรุณาส่ง First Name</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2043</td>
                                        <td>กรุณาส่ง Last Name</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2043</td>
                                        <td>ไม่มี Prefix นี้ในระบบ</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2044</td>
                                        <td>invalid bank name or bankstatus</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2051</td>
                                        <td>invalid username</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2052</td>
                                        <td>password len is < 8</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2053</td>
                                        <td>invalid phone</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2054</td>
                                        <td>invalid acc_no</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>*code 2043 มาจากระบบฝาก/ถอนอัตโนมัติ	
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Response
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="47B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0,</span>
    <span class="hljs-attr">"message"</span>: <span class="hljs-string">"success"</span>
}</code></pre>
                                    <script src="./API_files/ex4_7B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                <div class="table-wrapper">
                    <table class="table table-borderless table-striped" id="DataTable62">
                        <thead class="rgba-green-slight">
                            <tr>
                                <th set-lan="html:Description" class="txtCenter bRight">Bank list</th>
                                <th set-lan="html:Download" class="txtCenter" style="width: 45%;">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="txtCenter bRight">SCB</td>
                                <td class="txtCenter">ธนาคารไทยพาณิชย์</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">KBANK</td>
                                <td class="txtCenter">ธนาคารกสิกรไทย</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">BBL</td>
                                <td class="txtCenter">ธนาคารกรุงเทพ</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">BAY</td>
                                <td class="txtCenter">ธนาคารกรุงศรีอยุธยา</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">KTB</td>
                                <td class="txtCenter">ธนาคารกรุงไทย</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">BAAC</td>
                                <td class="txtCenter">ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">TMB</td>
                                <td class="txtCenter">ธนาคารทหารไทย</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">ICBC</td>
                                <td class="txtCenter">ธนาคารไอซีบีซี</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">TCD</td>
                                <td class="txtCenter">ธนาคารไทยเครดิตเพื่อรายย่อย</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">CITI</td>
                                <td class="txtCenter">ธนาคารซิตี้แบงก์</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">SCBT</td>
                                <td class="txtCenter">ธนาคารสแตนดาร์ดชาร์เตอร์ด</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">CIMB</td>
                                <td class="txtCenter">ธนาคารซีไอเอ็มบีไทย</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">UOB</td>
                                <td class="txtCenter">ธนาคารยูโอบี</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">GSB</td>
                                <td class="txtCenter">ธนาคารออมสิน</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">HSBC</td>
                                <td class="txtCenter">ธนาคารเอชเอสบีซี</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">MIZUHO</td>
                                <td class="txtCenter">ธนาคารมิซูโฮ</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">GHB</td>
                                <td class="txtCenter">ธนาคารอาคารสงเคราะห์</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">LHBANK</td>
                                <td class="txtCenter">ธนาคารแลนด์</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">TBANK</td>
                                <td class="txtCenter">ธนาคารธนชาต</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">TISCO</td>
                                <td class="txtCenter">ธนาคารทิสโก้</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">KKP</td>
                                <td class="txtCenter">ธนาคารเกียรตินาคิน</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">IBANK</td>
                                <td class="txtCenter">ธนาคารอิสลามแห่งประเทศไทย</td>
                            </tr>
                            <tr>
                                <td class="txtCenter bRight">TMB</td>
                                <td class="txtCenter">ธนาคารทีเอ็มบีธนชาต</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabThree">
                    <lable><b style="color: #19A17A !important;" set-lan="text:3.1 Introduction Seamless API">3.3
                    Login request</b></lable>
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
                                https://test-api.pirate168.com/apiRoute/member/landing/login
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                            <div class="table-wrapper">
                                <table class="table table-borderless table-striped" id="DataTable1">
                                    <thead class="rgba-green-slight">
                                        <tr>
                                            <th style="width:15%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Parameter</th>
                                            <th style="width:20%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Type</th>
                                            <th style="width:45%" set-lan="html:Type" class="txtCenter bRight">Description
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bRight">agentUsername</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Agent account , Account length is restricted to 36 chars at most.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">playerUsername</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Player username from partner system.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">playerPassword</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Player password from partner system.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="45A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"agenttest",</span>
    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member2",</span>
    <span class="hljs-attr">"playerPassword"</span>: <span class="hljs-string">"aA444444"</span>
}</code></pre>
                                    <script src="./API_files/ex4_5.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>

                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td>Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from AMBLotto system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">tkUuid</td>
                                        <td class="bRight">String</td>
                                        <td>Can use only 1 time. limit to 24 hours from generate time.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">url</td>
                                        <td class="bRight">String</td>
                                        <td>AMB Lotto link but don't show web header</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">urlFullPage</td>
                                        <td class="bRight">String</td>
                                        <td>AMB Lotto link fullpage</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">message</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45C">
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
                                        <td class="bRight">1006</td>
                                        <td>Invalid UserAgent or ApiKey</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">41001</td>
                                        <td>Error Request body is not an object.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71002</td>
                                        <td>missing filed 'playerUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71031</td>
                                        <td>invalid username or password</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71005</td>
                                        <td>playerUsername must be between 4 and 36 characters long.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Response
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="47B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0,</span>
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"066e56786c3458f6e7bb2e70c8de248d5d77184bee6db80b744fd68284b2",</span>
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"member2@agenttest",</span>
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member2@agenttest",</span>
        <span class="hljs-attr">"tkUuid"</span>: <span class="hljs-string">"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoyMiwiZXhwIjoxNjMyNTY3ODMxLCJpYXQiOjE2MzE3MDM4MzEsInJvbGUiOiJtZW1iZXIyQGFnZW50dGVzdCIsInN1YiI6ZmFsc2V9.rVIC-1-5FXPcwd5OtyGD0Ds51NwmjshY87hYHbGkdt8",</span>
        <span class="hljs-attr">"url"</span>: <span class="hljs-string">"https://lotto.zonelotto.net/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoyMiwiZXhwIjoxNjMyNTY3ODMxLCJpYXQiOjE2MzE3MDM4MzEsInJvbGUiOiJtZW1iZXIyQGFnZW50dGVzdCIsInN1YiI6ZmFsc2V9.rVIC-1-5FXPcwd5OtyGD0Ds51NwmjshY87hYHbGkdt8&header=off",</span>
        <span class="hljs-attr">"urlFullPage"</span>: <span class="hljs-string">"https://lotto.zonelotto.net/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoyMiwiZXhwIjoxNjMyNTY3ODMxLCJpYXQiOjE2MzE3MDM4MzEsInJvbGUiOiJtZW1iZXIyQGFnZW50dGVzdCIsInN1YiI6ZmFsc2V9.rVIC-1-5FXPcwd5OtyGD0Ds51NwmjshY87hYHbGkdt8&header=on"</span>
    },
    <span class="hljs-attr">"message"</span>: <span class="hljs-string">"success"</span>
}</code></pre>
                                    <script src="./API_files/ex4_7B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabFour">
                    <lable><b style="color: #19A17A !important;" set-lan="text:3.1 Introduction Seamless API">3.4
                    Deposit</b></lable>
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
                                https://test-api.pirate168.com/api/member/auto/deposit
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                            <div class="table-wrapper">
                                <table class="table table-borderless table-striped" id="DataTable1">
                                    <thead class="rgba-green-slight">
                                        <tr>
                                            <th style="width:15%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Parameter</th>
                                            <th style="width:20%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Type</th>
                                            <th style="width:45%" set-lan="html:Type" class="txtCenter bRight">Description
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bRight">agentId</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Agent Id from partner system.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">username</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Username member.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">amount</td>
                                            <td class="bRight">Number</td>
                                            <td class="bRight">Amount of deposit.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">transaction_ref</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Transaction reference Unique from your system type deposit.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">signature</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">signature เข้ารหัสโดยใช้วิธีเข้ารหัสแบบ SHA256 โดย plaintext แบบ agentId=AGENT_USERNAME&key=KEY_OF_AGENT&username=MEMBER_USER_NAME&amount=100.00   จำเป็นต้องมีทศนิยม 2 ตำแหน่งเสมอและ username กับ agentId เป็น  lowercase และใช้ key เป็น key ในการเข้ารหัส</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="45A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentId"</span>: <span class="hljs-string">"ntc123",</span>
    <span class="hljs-attr">"username"</span>: <span class="hljs-string">"member2",</span>
    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">10.00,</span>
    <span class="hljs-attr">"transaction_ref"</span>: <span class="hljs-string">"xxxy",</span>
    <span class="hljs-attr">"signature"</span>: <span class="hljs-string">"7a0b7f992f7e7b053c0fc223f9503ee54df362e8906d05754505fb80ad94de77"</span>
}</code></pre>
                                    <script src="./API_files/ex4_5.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>

                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">after_balance</td>
                                        <td class="bRight">Number</td>
                                        <td>Balance after Deposit of member.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">before_balance</td>
                                        <td class="bRight">Number</td>
                                        <td>Balance before Deposit of member.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">message</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ref</td>
                                        <td class="bRight">String</td>
                                        <td>Reference id Unique from AMB Lotto system.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45C">
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
                                        <td class="bRight">2031</td>
                                        <td>member not found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2033</td>
                                        <td>invalid data value</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2037</td>
                                        <td>duplicate transaction ref</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2041</td>
                                        <td>agent not found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2045</td>
                                        <td>invalid siganture</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Response
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="47B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"after_balance"</span>: <span class="hljs-number">14010,</span>
    <span class="hljs-attr">"before_balance"</span>: <span class="hljs-string">14000,</span>
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0,</span>
    <span class="hljs-attr">"message"</span>: <span class="hljs-string">"success",</span>
    <span class="hljs-attr">"ref"</span>: <span class="hljs-number">"5f1cd7c3fb68ae7c679f8c33966610670d32ff1e",</span>
}</code></pre>
                                    <script src="./API_files/ex4_7B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabFive">
                    <lable><b style="color: #19A17A !important;" set-lan="text:3.2 Workflow">3.5 Withdraw</b>
                    </lable>
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
                                https://test-api.pirate168.com/api/member/auto/withdraw
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                            <div class="table-wrapper">
                                <table class="table table-borderless table-striped" id="DataTable1">
                                    <thead class="rgba-green-slight">
                                        <tr>
                                            <th style="width:15%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Parameter</th>
                                            <th style="width:20%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Type</th>
                                            <th style="width:45%" set-lan="html:Type" class="txtCenter bRight">Description
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bRight">agentId</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Agent Id from partner system.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">username</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Username member.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">amount</td>
                                            <td class="bRight">Number</td>
                                            <td class="bRight">Amount of withdraw.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">transaction_ref</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Transaction reference Unique from your system type withdraw.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">signature</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">signature เข้ารหัสโดยใช้วิธีเข้ารหัสแบบ SHA256 โดย plaintext แบบ agentId=AGENT_USERNAME&key=KEY_OF_AGENT&username=MEMBER_USER_NAME&amount=100.00   จำเป็นต้องมีทศนิยม 2 ตำแหน่งเสมอและ username กับ agentId เป็น  lowercase และใช้ key เป็น key ในการเข้ารหัส</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="45A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentId"</span>: <span class="hljs-string">"ntc123",</span>
    <span class="hljs-attr">"username"</span>: <span class="hljs-string">"member2",</span>
    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">10.00,</span>
    <span class="hljs-attr">"transaction_ref"</span>: <span class="hljs-string">"axcvb",</span>
    <span class="hljs-attr">"signature"</span>: <span class="hljs-string">"7a0b7f992f7e7b053c0fc223f9503ee54df362e8906d05754505fb80ad94de77"</span>
}</code></pre>
                                    <script src="./API_files/ex4_5.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>

                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">after_balance</td>
                                        <td class="bRight">Number</td>
                                        <td>Balance after withdraw of member.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">before_balance</td>
                                        <td class="bRight">Number</td>
                                        <td>Balance before withdraw of member.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">message</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ref</td>
                                        <td class="bRight">String</td>
                                        <td>Reference id Unique from AMB Lotto system.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45C">
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
                                        <td class="bRight">2031</td>
                                        <td>member not found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2033</td>
                                        <td>invalid data value</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2037</td>
                                        <td>duplicate transaction ref</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2041</td>
                                        <td>agent not found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2045</td>
                                        <td>invalid siganture</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Response
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="47B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"after_balance"</span>: <span class="hljs-number">14000,</span>
    <span class="hljs-attr">"before_balance"</span>: <span class="hljs-string">14010,</span>
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0,</span>
    <span class="hljs-attr">"message"</span>: <span class="hljs-string">"success",</span>
    <span class="hljs-attr">"ref"</span>: <span class="hljs-number">"5f1cd7c3fb68ae7c679f8c33966610670d32ff1e",</span>
}</code></pre>
                                    <script src="./API_files/ex4_7B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabSix">
                    <lable><b style="color: #19A17A !important;" set-lan="text:3.2 Workflow">3.6 Get Creditagent</b>
                    </lable>
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
                                https://test-api.pirate168.com/api/member/auto/getcreditagent
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                            <div class="table-wrapper">
                                <table class="table table-borderless table-striped" id="DataTable1">
                                    <thead class="rgba-green-slight">
                                        <tr>
                                            <th style="width:15%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Parameter</th>
                                            <th style="width:20%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Type</th>
                                            <th style="width:45%" set-lan="html:Type" class="txtCenter bRight">Description
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bRight">agentId</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Agent Id from partner system.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">signature</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">signature เข้ารหัสโดยใช้วิธีเข้ารหัสแบบ SHA256 โดย plaintext แบบ agentId=AGENT_USERNAME&key=KEY_OF_AGENT และใช้ key เป็น key ในการเข้ารหัส</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="45A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentId"</span>: <span class="hljs-string">"ntc123",</span>
    <span class="hljs-attr">"signature"</span>: <span class="hljs-string">"52c4ef2da95b8071c425ecd0ef6ee970dbc04721ec5c5fb121e8aa42d29bcdd3"</span>
}</code></pre>
                                    <script src="./API_files/ex4_5.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>

                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">message</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">credit</td>
                                        <td class="bRight">Number</td>
                                        <td>Total credit agent.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45C">
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
                                        <td class="bRight">2033</td>
                                        <td>invalid data value</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2041</td>
                                        <td>agent not found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2045</td>
                                        <td>invalid siganture</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Response
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="47B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0,</span>
    <span class="hljs-attr">"credit"</span>: <span class="hljs-string">80922.99,</span>
    <span class="hljs-attr">"message"</span>: <span class="hljs-number">"success",</span>
}</code></pre>
                                    <script src="./API_files/ex4_7B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabSeven">
                    <lable><b style="color: #19A17A !important;" set-lan="text:3.2 Workflow">3.7 Get Creditmember</b>
                    </lable>
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
                                https://test-api.pirate168.com/api/member/auto/getcreditmember
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                            <div class="table-wrapper">
                                <table class="table table-borderless table-striped" id="DataTable1">
                                    <thead class="rgba-green-slight">
                                        <tr>
                                            <th style="width:15%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Parameter</th>
                                            <th style="width:20%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Type</th>
                                            <th style="width:45%" set-lan="html:Type" class="txtCenter bRight">Description
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bRight">agentId</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Agent Id from partner system.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">username</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Username member.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">signature</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">signature เข้ารหัสโดยใช้วิธีเข้ารหัสแบบ SHA256 โดย plaintext แบบ agentId=AGENT_USERNAME&key=KEY_OF_AGENT&username=MEMBER_USER_NAME และใช้ key เป็น key ในการเข้ารหัส</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="45A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentId"</span>: <span class="hljs-string">"ntc123",</span>
    <span class="hljs-attr">"username"</span>: <span class="hljs-string">"member2",</span>
    <span class="hljs-attr">"signature"</span>: <span class="hljs-string">"1592e9c442942b7eb858a97c4e420ab2b7b8795d8a0cccf380f67ec9c86f716c"</span>
}</code></pre>
                                    <script src="./API_files/ex4_5.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>

                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">message</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">credit</td>
                                        <td class="bRight">Number</td>
                                        <td>Total credit member.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45C">
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
                                        <td class="bRight">2031</td>
                                        <td>member not found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2033</td>
                                        <td>invalid data value</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2041</td>
                                        <td>agent not found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2045</td>
                                        <td>invalid siganture</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Response
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="47B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0,</span>
    <span class="hljs-attr">"credit"</span>: <span class="hljs-string">1020,</span>
    <span class="hljs-attr">"message"</span>: <span class="hljs-number">"success",</span>
}</code></pre>
                                    <script src="./API_files/ex4_7B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabEight">
                    <lable><b style="color: #19A17A !important;" set-lan="text:3.2 Workflow">3.8 Validturn</b>
                    </lable>
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
                                https://test-api.pirate168.com/api/member/auto/validturn
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                            <div class="table-wrapper">
                                <table class="table table-borderless table-striped" id="DataTable1">
                                    <thead class="rgba-green-slight">
                                        <tr>
                                            <th style="width:15%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Parameter</th>
                                            <th style="width:20%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Type</th>
                                            <th style="width:45%" set-lan="html:Type" class="txtCenter bRight">Description
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bRight">agentId</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Agent Id from partner system.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">username</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Username member.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">transaction_ref</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Transaction reference Unique from your system type deposit/withdraw.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">signature</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">signature เข้ารหัสโดยใช้วิธีเข้ารหัสแบบ SHA256 โดย plaintext แบบ agentId=AGENT_USERNAME&key=KEY_OF_AGENT&username=MEMBER_USER_NAME&transaction_ref=xxxxx1 username กับ agentId เป็น  lowercase และใช้ key เป็น key ในการเข้ารหัส</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="45A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentId"</span>: <span class="hljs-string">"ntc123",</span>
    <span class="hljs-attr">"username"</span>: <span class="hljs-string">"member2",</span>
    <span class="hljs-attr">"transaction_ref"</span>: <span class="hljs-string">"e2154fea5da2dd0d1732ff30931723c2973003a0",</span>
    <span class="hljs-attr">"signature"</span>: <span class="hljs-string">"a65718a555624256f4d613c3ccd587762da51472b38bf328a7bc02dfb02caf51"</span>
}</code></pre>
                                    <script src="./API_files/ex4_5.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>

                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">amount</td>
                                        <td class="bRight">Number</td>
                                        <td>Amount of bet.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">game</td>
                                        <td class="bRight">String</td>
                                        <td>Product type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">outstanding</td>
                                        <td class="bRight">Number</td>
                                        <td>The outstanding has not been calculated.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">validAmount</td>
                                        <td class="bRight">Number</td>
                                        <td>Validturn amount with out door.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">wlTurnAmount</td>
                                        <td class="bRight">Number</td>
                                        <td>Total Win/Loss .</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">message</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ref</td>
                                        <td class="bRight">String</td>
                                        <td>Reference id Unique from AMB Lotto system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">username</td>
                                        <td class="bRight">String</td>
                                        <td>Username member.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45C">
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
                                        <td class="bRight">2031</td>
                                        <td>member not found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2033</td>
                                        <td>invalid data value</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2041</td>
                                        <td>agent not found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2045</td>
                                        <td>invalid siganture</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2048</td>
                                        <td>log data not found</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Response
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="47B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0,</span>
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"LOTTO"</span>: {
            <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0,</span>
            <span class="hljs-attr">"game"</span>: <span class="hljs-number">"LOTTO",</span>
            <span class="hljs-attr">"outstanding"</span>: <span class="hljs-number">0,</span>
            <span class="hljs-attr">"validAmount"</span>:<span class="hljs-number">0,</span>
            <span class="hljs-attr">"wlTurnAmount"</span>:<span class="hljs-number">0,</span>
        },
        <span class="hljs-attr">"SLOT"</span>: {
            <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0,</span>
            <span class="hljs-attr">"game"</span>: <span class="hljs-number">"SLOT",</span>
            <span class="hljs-attr">"outstanding"</span>: <span class="hljs-number">0,</span>
            <span class="hljs-attr">"validAmount"</span>:<span class="hljs-number">0,</span>
            <span class="hljs-attr">"wlTurnAmount"</span>:<span class="hljs-number">0,</span>
        }
    },
    <span class="hljs-attr">"message"</span>: <span class="hljs-number">"success",</span>
    <span class="hljs-attr">"ref"</span>: <span class="hljs-number">"9a15f42d1c524c306eb91c3df1216db248a8f224",</span>
    <span class="hljs-attr">"username"</span>: <span class="hljs-number">"member2"</span>
}</code></pre>
                                    <script src="./API_files/ex4_7B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabNine">
                    <lable><b style="color: #19A17A !important;" set-lan="text:3.2 Workflow">3.9 Landing Result</b>
                    </lable>
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
                                https://test-api.pirate168.com/apiRoute/member/landing/result
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                            <div class="table-wrapper">
                                <table class="table table-borderless table-striped" id="DataTable1">
                                    <thead class="rgba-green-slight">
                                        <tr>
                                            <th style="width:15%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Parameter</th>
                                            <th style="width:20%" set-lan="html:Parameter" class="txtCenter bRight">
                                            Type</th>
                                            <th style="width:45%" set-lan="html:Type" class="txtCenter bRight">Description
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bRight">agentUsername</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Agent account , Account length is restricted to 36 chars at most.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">lottotype</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Key of lotto type.</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">startDate</td>
                                            <td class="bRight">Date</td>
                                            <td class="bRight">Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">endDate</td>
                                            <td class="bRight">Date</td>
                                            <td class="bRight">Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="45A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"amblotto1234",</span>
    <span class="hljs-attr">"lottotype"</span>: <span class="hljs-string">"thailotto",</span>
    <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2021-09-02 15:04:05",</span>
    <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2021-09-16 15:04:05"</span>
}</code></pre>
                                    <script src="./API_files/ex4_5.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>

                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">date</td>
                                        <td class="bRight">String</td>
                                        <td>The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">result</td>
                                        <td class="bRight">arrayobject</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">name_th</td>
                                        <td class="bRight">String</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">name_en</td>
                                        <td class="bRight">String</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45C">
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
                                        <td class="bRight">41001</td>
                                        <td>Error Request body is not an object.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71011</td>
                                        <td>invalid lottotype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71021</td>
                                        <td>please input startDate and endDate</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71022</td>
                                        <td>invalid input format 'startDate' field.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71023</td>
                                        <td>invalid input format 'endDate' field.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71034</td>
                                        <td>invalid format Date</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Response
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="47B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0,</span>
    <span class="hljs-attr">"data"</span>: [
        {
            <span class="hljs-attr">"name_th"</span>: <span class="hljs-number">"หวยไทย",</span>
            <span class="hljs-attr">"name_en"</span>: <span class="hljs-number">"Thai Lotto",</span>
            <span class="hljs-attr">"date"</span>: <span class="hljs-number">"2021-09-16 00:00:00",</span>
            <span class="hljs-attr">"result"</span>: {
                <span class="hljs-attr">"top6"</span>: [
                    <span class="hljs-number">"070935"</span>
                ],
                <span class="hljs-attr">"top3"</span>: [
                    <span class="hljs-number">"935"</span>
                ],
                <span class="hljs-attr">"bottom3"</span>: [
                    <span class="hljs-number">"609",</span>
                    <span class="hljs-number">"817",</span>
                    <span class="hljs-number">"379",</span>
                    <span class="hljs-number">"007"</span>
                ],
                <span class="hljs-attr">"bottom2"</span>: [
                    <span class="hljs-number">"90"</span>
                ]
            }
        }
    ],
    <span class="hljs-attr">"msg"</span>: <span class="hljs-number">"success"</span>
}</code></pre>
                                    <script src="./API_files/ex4_7B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="btn-toolbar mb-12">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='version.php'">
                            <lan set-lan="html:Back">Back</lan>
                        </button>
                    </div>
                    <!-- <div class="col-md-6" style="text-align: right;">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='seamlessapi.php'">
                            <lan set-lan="html:Next">Next</lan>
                        </button>
                    </div> -->
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