<?php include 'layouts/header.php'; ?>
<div class="wrapper container">
    <?php include 'layouts/nav.php'; ?>
    <main class="" style="padding-left: 15rem; transition: all 0.3s ease-in-out 0s;">
        <?php include 'layouts/lang.php'; ?>
        <div class="body-content">

            <style>
                .txtHead {
                    color: #7F0055;
                }
            </style>
            <div style="background: #f2f3f4; padding: 30px; margin-top: 1%; border-radius: .375rem;">
                <h1><b style="color: #cfa137 !important;" data-translate="4" set-lan="text:5. Transferwallet Api">5.
                        Transferwallet Api</b></h1>
                <div class="pb-3"></div>
                <div class="col-12" id="tabOne">
                    <lable><b style="color: #cfa137 !important;" set-lan="text:5.1 Introduction Transferwallet API">5.1
                            Introduction Transferwallet API</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:5.1 Body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            This section is to illustrate the detail of implementing transferwallet in external partner
                            system.</label>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabTwo">
                    <lable><b style="color: #cfa137 !important;" set-lan="text:5.2 Workflow">5.2 Workflow</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:5.2 Body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Preliminary information in order to run the API, the partner system must have prevalence of
                            commands So that the system can run the API under conditions</label>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabThree">
                    <lable><b style="color: #cfa137 !important;" set-lan="text:5.3 Setting">5.3 Setting</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:0. *">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*If
                            you hold a master account, please create an agent API account under your master account and
                            login with created agent API account before following this setting step.</label>
                        <label set-lan="html:1.	Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.
                            Login</label>
                        <div class="col-12">
                            <img src="./API_files/001.jpg" style="width: 30%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.
                            Click the Account menu and select the Profile menu</label>
                        <div class="col-12">
                            <img src="./API_files/002.jpg" style="width: 80%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label id="tabZero" set-lan="html:3. Define">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.
                            Define the following API information</label>
                        <div class="col-12">
                            <label set-lan="html:3.1 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                3.1 You can add multiple IP addresses by press the button</label>
                            <img src="./API_files/003_2.jpg" style="height: 35px;">
                        </div>
                        <div class="col-12">
                            <label set-lan="html:3.2 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                3.2 You can click “API Document” button for preview Information</label>
                            <img src="./API_files/003_3.jpg" style="height: 35px;">
                        </div>
                        <div class="col-12">
                            <label set-lan="html:3.3 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                3.3 You can click “Save Profile” button for saving data</label>
                            <img src="./API_files/003_5.jpg" style="height: 35px;">
                        </div>
                        <div class="col-12">
                            <img src="./API_files/003_5.jpg" style="width: 80%; margin-left: 10%;">
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabFour">
                    <lable><b style="color: #cfa137 !important;" set-lan="text:5.4 login request">5.4 login request</b>
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
                                https://api-dev.prettygaming.asia/apiRoute/member/loginRequest
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
                        <lable><b style="color: #cfa137 !important;" set-lan="text:Request Body">Request Body</b>
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
                                        <th style="width: 15%;" set-lan="html:Type" class="txtCenter bRight">Type</th>
                                        <th style="width: 10%;" set-lan="html:Required" class="bRight txtCenter">
                                            Required</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>System generate <a href="https://service-api.prettygaming.asia/Page_API_Document/Transferwallet_API.aspx#tabZero" class="aLink">key</a> ID after crate Agent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Player account , Account length is restricted to 36 chars at most</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betLimit</td>
                                        <td class="bRight">arrayNumber</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>betLimit can containt <span style="color: red;">maximum 6 values
                                            </span>depends on the currency. you can see the limits in this table: <a href="https://service-api.prettygaming.asia/Page_API_Document/Bet_Limit.aspx" class="aLink">Currency / Bet Limit</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #cfa137 !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="3_4A" style="border-radius: 0.375rem;" class="hljs json">{
                                    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"sb234567123"</span>,
                                    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"33c0d59d-51b9-45e0-ba7f-4ca442cd8421"</span>,
                                    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"as001"</span>,
                                    <span class="hljs-attr">"betLimit"</span>: [
                                        <span class="hljs-number">1001</span>,
                                        <span class="hljs-number">1006</span>,
                                        <span class="hljs-number">1012</span>
                                    ]
                                    }</code></pre>
                                    <script src="./API_files/ex_3-1.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
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
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
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
                                        <td class="bRight">tkUuid</td>
                                        <td class="bRight">String</td>
                                        <td>Can use only 1 time. limit to 24 hours from generate time.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">uriDesktop</td>
                                        <td class="bRight">String</td>
                                        <td>Game link(Desktop version)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">uriMobile</td>
                                        <td class="bRight">String</td>
                                        <td>Game link(Mobile version)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Response Code</b></lable>
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
                                        <td class="bRight">41001</td>
                                        <td>Error Request body is not an object.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61001</td>
                                        <td>IP address is not allowed.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>missing filed 'playerUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71005</td>
                                        <td>playerUsername must be between 4 and 24 characters long.</td>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #cfa137 !important;">Example Response
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="44B" style="border-radius: 0.375rem;" class="hljs json">{
                                    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
                                    <span class="hljs-attr">"msg"</span>: <span class="hljs-string">"SUCCESS"</span>,
                                    <span class="hljs-attr">"data"</span>: {
                                        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"5ebd1f57dc7cdc7900125a64"</span>,
                                        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"transferwallet@sb234567123"</span>,
                                        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"transferwallet"</span>,
                                        <span class="hljs-attr">"tkUuid"</span>: <span class="hljs-string">"5ebd1f57dc7cdc7900125a65"</span>,
                                        <span class="hljs-attr">"uriDesktop"</span>: <span class="hljs-string">"http://hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65"</span>,
                                        <span class="hljs-attr">"uriMobile"</span>: <span class="hljs-string">"http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65"</span>
                                    }
                                    }</code></pre>
                                    <script src="./API_files/ex4_4B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;" set-lan="text:** Optional">** Optional for
                                direct/re-direct link.</b></lable>
                    </div>
                    <div class="form-group col-12">
                        <label set-lan="html:You can add">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            You can add a value (BAC, DRA, SIC, ROU, MUL) to the parameter in the of the link
                            (&amp;game=) to redirect players to the specific games</label>
                    </div>
                    <div class="col-8">
                        <a href="https://service-api.prettygaming.asia/img/zip/game_icons.rar" style="float: right;" class="Point" download=""><i class="fa fa-download" aria-hidden="true"></i>
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
                                            <img src="./API_files/baccarat.png" class="IconSize">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">Dragon-Tiger</td>
                                        <td class="bRight txtCenter txtMid">DRA</td>
                                        <td class="bRight txtCenter bBottom" style="background-color: gray;">
                                            <img src="./API_files/dragon tiger.png" class="IconSize">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">Roulette</td>
                                        <td class="bRight txtCenter txtMid">ROU</td>
                                        <td class="bRight txtCenter bBottom" style="background-color: gray;">
                                            <img src="./API_files/roulette.png" class="IconSize">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">SicBo</td>
                                        <td class="bRight txtCenter txtMid">SIC</td>
                                        <td class="bRight txtCenter bBottom" style="background-color: gray;">
                                            <img src="./API_files/sic bo.png" class="IconSize">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">Multi-Table</td>
                                        <td class="bRight txtCenter txtMid">MUL</td>
                                        <td class="bRight txtCenter" style="background-color: gray;">
                                            <img src="./API_files/multi-table.png" class="IconSize">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Game direct link</b></lable>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.9rem;">
                        <div class="col-12">
                            <label class="txtHead">Baccarat
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;</label><label class="txtHead">game=BAC</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Dragon-Tiger
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;</label><label class="txtHead">game=DRA</label>

                        </div>
                        <div class="col-12">
                            <label class="txtHead">Roulette
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;</label><label class="txtHead">game=ROU</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">SicBo
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;</label><label class="txtHead">game=SIC</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Multi-Table
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;</label><label class="txtHead">game=MUL</label>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Language</b></lable>
                    </div>
                    <div class="form-group col-12">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Remark: please use exactly code with example.</label>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
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
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label class="txtHead">lang=EN</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Thai
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label class="txtHead">lang=TH</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Chinese Mandarin
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label class="txtHead">lang=CNM</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Chinese Cantonese
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label class="txtHead">lang=CNC</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Korean
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label class="txtHead">lang=KOR</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Vietnam
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label class="txtHead">lang=VT</label>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Signout re-direct optional link:</b></lable>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.681rem;">
                        <div class="col-12">
                            <label class="txtHead">Baccarat
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;url=</label><label class="txtHead">input your link here(full link with https://)</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Dragon-Tiger
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=DRA&amp;url=</label><label class="txtHead">input your link here(full link with https://)</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Roulette
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=ROU&amp;url=</label><label class="txtHead">input your link here(full link with https://)</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">SicBo
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=SIC&amp;url=</label><label class="txtHead">input your link here(full link with https://)</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Multi-Table
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=MUL&amp;url=</label><label class="txtHead">input your link here(full link with https://)</label>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabFive">
                    <lable><b style="color: #cfa137 !important;" set-lan="text:5.5 getUserBalance">5.5
                            getUserBalance</b></lable>
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
                            <label>
                                https://api-dev.prettygaming.asia/apiRoute/api/getUserBalance
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
                        <lable><b style="color: #cfa137 !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45A">
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
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate <a href="https://service-api.prettygaming.asia/Page_API_Document/Seamless_API.aspx?Action=0" class="aLink">key</a> ID after crate Agent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #cfa137 !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="45A" style="border-radius: 0.375rem;" class="hljs json">{
                                    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"startapiTransferwallet"</span>,
                                    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"ae6330a9-6c2f-1bd3-3122-47ddad703de9"</span>,
                                    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startTransferwalletmember"</span>
                                    }</code></pre>
                                    <script src="./API_files/ex4_5.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Response Body</b></lable>
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
                        <lable><b style="color: #cfa137 !important;">Service Response Code</b></lable>
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
                                        <td>SUCCESS</td>
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
                                        <td class="bRight">71017</td>
                                        <td>Can request up to 30 times per minute.</td>
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
                                    <lable class="Point"><b style="color: #cfa137 !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="45B" style="border-radius: 0.375rem;" class="hljs json">{
                                    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
                                    <span class="hljs-attr">"msg"</span>: <span class="hljs-string">"SUCCESS"</span>,
                                    <span class="hljs-attr">"data"</span>: {
                                        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"5eae90e32f7df02c92fde32d"</span>,
                                        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startTransferwalletmember"</span>,
                                        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"startTransferwalletmember@startapiTransferwallet"</span>,
                                        <span class="hljs-attr">"balance"</span>: <span class="hljs-number">0</span>
                                    }
                                    }</code></pre>
                                    <script src="./API_files/ex4_5B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabSix">
                    <lable><b style="color: #cfa137 !important;">5.6 deposit</b></lable>
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
                            <label>
                                https://api-dev.prettygaming.asia/apiRoute/api/deposit
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
                        <lable><b style="color: #cfa137 !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable46A">
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
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate <a href="https://service-api.prettygaming.asia/Page_API_Document/Seamless_API.aspx?Action=0" class="aLink">key</a> ID after crate Agent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">balance</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">transId</td>
                                        <td class="bRight">String</td>
                                        <td>Optional: should be Unique key from your system. reference to <a href="https://service-api.prettygaming.asia/Page_API_Document/Transferwallet_API.aspx#tab12" class="aLink">5.12 depositWithdrawHistoryByTransId</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #cfa137 !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="46A" style="border-radius: 0.375rem;" class="hljs json">{
                                    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"startapiTransferwallet"</span>,
                                    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"ae6330a9-6c2f-1bd3-3122-47ddad703de9"</span>,
                                    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startTransferwalletmember"</span>,
                                    <span class="hljs-attr">"balance"</span>: <span class="hljs-number">100</span>,
                                    <span class="hljs-attr">"transId"</span>: <span class="hljs-string">"5f0c27dbea3f3261f2cd3886"</span>
                                    }</code></pre>
                                    <script src="./API_files/ex4_6.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Response Body</b></lable>
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
                                        <td class="bRight">ref</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
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
                                        <td class="bRight">addBalance</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">afterMemberBalance</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">afterAgentBalance</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Service Response Code</b></lable>
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
                                        <td class="bRight">71017</td>
                                        <td>Can request up to 30 times per minute.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911001</td>
                                        <td>Insufficient balance.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #cfa137 !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="46B" style="border-radius: 0.375rem;" class="hljs json">{
                                    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
                                    <span class="hljs-attr">"msg"</span>: <span class="hljs-string">"SUCCESS"</span>,
                                    <span class="hljs-attr">"data"</span>: {
                                        <span class="hljs-attr">"ref"</span>: <span class="hljs-string">"1ab5e3d6240525370dbf8ad9"</span>,
                                        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"5eae90e32f7df02c92fde32d"</span>,
                                        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startTransferwalletmember"</span>,
                                        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"startTransferwalletmember@startapiTransferwallet"</span>,
                                        <span class="hljs-attr">"addBalance"</span>: <span class="hljs-number">100</span>,
                                        <span class="hljs-attr">"afterMemberBalance"</span>: <span class="hljs-number">100</span>,
                                        <span class="hljs-attr">"afterAgentBalance"</span>: <span class="hljs-number">10011800</span>
                                    }
                                    }</code></pre>
                                    <script src="./API_files/ex4_6B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabSeven">
                    <lable><b style="color: #cfa137 !important;">5.7 withdrawal</b></lable>
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
                            <label>
                                https://api-dev.prettygaming.asia/apiRoute/api/withdrawal
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
                        <lable><b style="color: #cfa137 !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable47A">
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
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate <a href="https://service-api.prettygaming.asia/Page_API_Document/Seamless_API.aspx?Action=0" class="aLink">key</a> ID after crate Agent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">balance</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">transId</td>
                                        <td class="bRight">String</td>
                                        <td>Optional: should be Unique key from your system. reference to <a href="https://service-api.prettygaming.asia/Page_API_Document/Transferwallet_API.aspx#tab12" class="aLink">5.12 depositWithdrawHistoryByTransId</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #cfa137 !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="47A" style="border-radius: 0.375rem;" class="hljs json">{
                                    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"startapiTransferwallet"</span>,
                                    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"ae6330a9-6c2f-1bd3-3122-47ddad703de9"</span>,
                                    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startTransferwalletmember"</span>,
                                    <span class="hljs-attr">"balance"</span>: <span class="hljs-number">100</span>,
                                    <span class="hljs-attr">"transId"</span>: <span class="hljs-string">"5f0c27dbea3f3261f2cd3886"</span>
                                    }</code></pre>
                                    <script src="./API_files/ex4_7.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable47B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                                        <td class="bRight">ref</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
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
                                        <td class="bRight">addBalance</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">afterMemberBalance</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">afterAgentBalance</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Service Response Code</b></lable>
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
                                        <td class="bRight">71017</td>
                                        <td>Can request up to 30 times per minute.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911001</td>
                                        <td>Insufficient balance.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #cfa137 !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="47B" style="border-radius: 0.375rem;" class="hljs json">{
                                    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
                                    <span class="hljs-attr">"msg"</span>: <span class="hljs-string">"SUCCESS"</span>,
                                    <span class="hljs-attr">"data"</span>: {
                                        <span class="hljs-attr">"ref"</span>: <span class="hljs-string">"5ee1b3d6240525370dbf8ad9"</span>,
                                        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"5eae90e32f7df02c92fde32d"</span>,
                                        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startTransferwalletmember"</span>,
                                        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"startTransferwalletmember@startapiTransferwallet"</span>,
                                        <span class="hljs-attr">"addBalance"</span>: <span class="hljs-number">100</span>,
                                        <span class="hljs-attr">"afterMemberBalance"</span>: <span class="hljs-number">10011900</span>,
                                        <span class="hljs-attr">"afterAgentBalance"</span>: <span class="hljs-number">0</span>
                                    }
                                    }</code></pre>
                                    <script src="./API_files/ex4_7B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabEight">
                    <lable><b style="color: #cfa137 !important;">5.8 memberBetHistories</b></lable>
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
                            <label>
                                https://api-dev.prettygaming.asia/apiRoute/api/memberBetHistories
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
                        <lable><b style="color: #cfa137 !important;" set-lan="text:Request Body">Request Body</b>
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
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                                        <td>System generate <a href="https://service-api.prettygaming.asia/Page_API_Document/Seamless_API.aspx?Action=0" class="aLink">key</a> ID after crate Agent</td>
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
                                    <lable class="Point"><b style="color: #cfa137 !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
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
                                    <script src="./API_files/ex4_8.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable38B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                        <lable><b style="color: #cfa137 !important;">Service Response Code</b></lable>
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
                                    <lable class="Point"><b style="color: #cfa137 !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
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
                                    <script src="./API_files/ex4_8B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabNine">
                    <lable><b style="color: #cfa137 !important;">5.9 betHistories</b></lable>
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
                        <lable><b style="color: #cfa137 !important;" set-lan="text:Request Body">Request Body</b>
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
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                                        <td>System generate <a href="https://service-api.prettygaming.asia/Page_API_Document/Seamless_API.aspx?Action=0" class="aLink">key</a> ID after crate Agent</td>
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
                                    <lable class="Point"><b style="color: #cfa137 !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="49A" style="border-radius: 0.375rem;" class="hljs json">{
                                    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"startapiTransferwallet"</span>,
                                    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"ae6330a9-6c2f-1bd3-3122-47ddad703de9"</span>,
                                    <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2019-05-03 20:36:13"</span>,
                                    <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2020-05-20 20:36:13"</span>,
                                    <span class="hljs-attr">"page"</span>: <span class="hljs-number">1</span>
                                    }</code></pre>
                                    <script src="./API_files/ex4_9.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Bet Position</b></lable>
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
                        <lable><b style="color: #cfa137 !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable49B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                        <lable><b style="color: #cfa137 !important;">Service Response Code</b></lable>
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
                        <lable><b style="color: #cfa137 !important;">Calculation Description</b></lable>
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
                                    <lable class="Point"><b style="color: #cfa137 !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
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
                                            <span class="hljs-attr">"updateDate"</span>: <span class="hljs-string">"2020-07-16T07:04:45.270Z"</span>,
                                            <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2020-07-16T07:04:45.270Z"</span>,
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
                                    <script src="./API_files/ex4_9B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabTen">
                    <lable><b style="color: #cfa137 !important;">5.10 getMemberWinLoseTurnOver</b></lable>
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
                        <lable><b style="color: #cfa137 !important;" set-lan="text:Request Body">Request Body</b>
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
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                                        <td>System generate <a href="https://service-api.prettygaming.asia/Page_API_Document/Transferwallet_API.aspx?Action=0" class="aLink">key</a> ID after crate Agent</td>
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
                                    <lable class="Point"><b style="color: #cfa137 !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
                                    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"startapiTransferwallet"</span>,
                                    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"ae6330a9-6c2f-1bd3-3122-47ddad703de9"</span>,
                                    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startTransferwalletmember"</span>,
                                    <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2019-05-03 20:36:13"</span>,
                                    <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2020-05-20 20:36:13"</span>
                                    }</code></pre>
                                    <script src="./API_files/ex4_10.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                        <lable><b style="color: #cfa137 !important;">Service Response Code</b></lable>
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
                                    <lable class="Point"><b style="color: #cfa137 !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
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
                                    <script src="./API_files/ex4_10B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tab11">
                    <lable><b style="color: #cfa137 !important;">5.11 depositWithdrawHistory</b></lable>
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
                            <label>
                                https://api-dev.prettygaming.asia/apiRoute/api/depositWithdrawHistory
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
                        <lable><b style="color: #cfa137 !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable411A">
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
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate <a href="https://service-api.prettygaming.asia/Page_API_Document/Transferwallet_API.aspx?Action=0" class="aLink">key</a> ID after crate Agent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ref</td>
                                        <td class="bRight">String</td>
                                        <td>Deposit/Withdraw transaction reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #cfa137 !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="411A" style="border-radius: 0.375rem;" class="hljs json">{
                                    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"startapiTransferwallet"</span>,
                                    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"ae6330a9-6c2f-1bd3-3122-47ddad703de9"</span>,
                                    <span class="hljs-attr">"ref"</span>: <span class="hljs-string">"5f0c27dbea3f3261f2cd3886"</span>
                                    }</code></pre>
                                    <script src="./API_files/ex4_11A.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable411B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                                        <td class="bRight">ref</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Deposit/Withdraw transaction reference.</td>
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
                                        <td class="bRight">transferAmount</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">transferDate</td>
                                        <td class="bRight">Date</td>
                                        <td class="bRight txtCenter">Yes</td>
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
                                    <lable class="Point"><b style="color: #cfa137 !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="411B" style="border-radius: 0.375rem;" class="hljs json">{
                                    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
                                    <span class="hljs-attr">"msg"</span>: <span class="hljs-string">"SUCCESS"</span>,
                                    <span class="hljs-attr">"data"</span>: {
                                        <span class="hljs-attr">"ref"</span>: <span class="hljs-string">"5f0c27dbea3f3261f2cd3886"</span>,
                                        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"5f0c231d5aeecb61ec2f3867"</span>,
                                        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startapiTransferwallet"</span>,
                                        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"b2uthb01@startapiTransferwallet"</span>,
                                        <span class="hljs-attr">"transferAmount"</span>: <span class="hljs-number">1</span>,
                                        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"DEPOSIT"</span>,
                                        <span class="hljs-attr">"transferDate"</span>: <span class="hljs-string">"2020-07-13 16:22:35"</span>
                                    }
                                    }</code></pre>
                                    <script src="./API_files/ex4_11B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tab12">
                    <lable><b style="color: #cfa137 !important;">5.12 depositWithdrawHistoryByTransId</b></lable>
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
                            <label>
                                https://api-dev.prettygaming.asia/apiRoute/api/depositWithdrawHistoryByTransId
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
                        <lable><b style="color: #cfa137 !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable412A">
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
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate <a href="https://service-api.prettygaming.asia/Page_API_Document/Transferwallet_API.aspx?Action=0" class="aLink">key</a> ID after crate Agent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">transId</td>
                                        <td class="bRight">String</td>
                                        <td>transId Unique from your system type Deposit / Withdrawal</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #cfa137 !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="412A" style="border-radius: 0.375rem;" class="hljs json">{
                                    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"startapiTransferwallet"</span>,
                                    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"ae6330a9-6c2f-1bd3-3122-47ddad703de9"</span>,
                                    <span class="hljs-attr">"transId"</span>: <span class="hljs-string">"5f0c27dbea3f3261f2cd3886"</span>
                                    }</code></pre>
                                    <script src="./API_files/ex4_12A.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable412B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                                        <td class="bRight">transId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>transId Unique from your system type Deposit / Withdrawal</td>
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
                                        <td class="bRight">transferAmount</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">transferDate</td>
                                        <td class="bRight">Date</td>
                                        <td class="bRight txtCenter">Yes</td>
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
                                    <lable class="Point"><b style="color: #cfa137 !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="412B" style="border-radius: 0.375rem;" class="hljs json">{
                                    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
                                    <span class="hljs-attr">"msg"</span>: <span class="hljs-string">"SUCCESS"</span>,
                                    <span class="hljs-attr">"data"</span>: {
                                        <span class="hljs-attr">"transId"</span>: <span class="hljs-string">"5f0c27dbea3f3261f2cd3886"</span>,
                                        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"5f0c231d5aeecb61ec2f3867"</span>,
                                        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"startapiTransferwallet"</span>,
                                        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"b2uthb01@startapiTransferwallet"</span>,
                                        <span class="hljs-attr">"transferAmount"</span>: <span class="hljs-number">1</span>,
                                        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"DEPOSIT"</span>,
                                        <span class="hljs-attr">"transferDate"</span>: <span class="hljs-string">"2020-07-13 16:22:35"</span>
                                    }
                                    }</code></pre>
                                    <script src="./API_files/ex4_12B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>




                <div class="btn-toolbar mb-12">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='seamlessapi.php'">
                            <lan set-lan="html:Back">Back</lan>
                        </button>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='responsecode.php'">
                            <lan set-lan="html:Next">Next</lan>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<?php include 'layouts/footer.php'; ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#manu8 , #manu8 > a").addClass("active");
        $("#manu8 > div").css("display", "block");

        $(this).on("click", ".koh-faq-question", function() {
            $(this).parent().find(".koh-faq-answer").slideToggle();
            $(this).find(".fa").toggleClass('active');
        });

        var URL = window.location.href;
        URL = URL.substring(URL.lastIndexOf('#') + 1);

        var page = 4;
        var link = url_link(page, URL);
        $("#" + link + " , #" + link + " > a").addClass("active");
    });
</script>

</body>

</html>