<?php include 'layouts/header.php'; ?>
<div class="wrapper container">
    <?php include 'layouts/nav.php'; ?>
    <main class="" style="padding-left: 15rem; transition: all 0.3s ease-in-out 0s;">
        <?php include 'layouts/lang.php'; ?>
        <div class="body-content">

            <style>
                .marTop {
                    margin-top: 1rem;
                }
            </style>

            <div style="background: #f2f3f4; padding: 30px; margin-top: 1%; border-radius: .375rem;">
                <h1><b style="color: #cfa137 !important;">6. Service Respond Code</b></h1>
                <div class="pb-3"></div>

                <div class="col-12" id="tabOne">
                    <lable><b style="color: #cfa137 !important;">6.1 Member Authen</b></lable>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper marTop">
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
                                        <td class="bRight">10001</td>
                                        <td>Invalid Username or Password.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12" id="tabTwo">
                    <lable><b style="color: #cfa137 !important;">6.2 Token</b></lable>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper marTop">
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
                                        <td class="bRight">500</td>
                                        <td>Unauthorized.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">501</td>
                                        <td>Your position is not available for use with this function.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">503</td>
                                        <td>Invalid access token.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">5001</td>
                                        <td>This token has already been replaced.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12" id="tabThree">
                    <lable><b style="color: #cfa137 !important;">6.3 System</b></lable>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper marTop">
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
                                        <td class="bRight">999</td>
                                        <td>DATABASE ERROR PLEASE TRY AGAIN.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">11000</td>
                                        <td>E11000 duplicate key error collection (สร้างซ้ำไอดีเดิม).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">11001</td>
                                        <td>required error.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">11002</td>
                                        <td>CastError.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12" id="tabFour">
                    <lable><b style="color: #cfa137 !important;">6.4 Validator</b></lable>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper marTop">
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
                                        <td class="bRight">991</td>
                                        <td>Bet exceeds table limit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">992</td>
                                        <td>This position can use only one currency.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">993</td>
                                        <td>invalid bet limit id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">994</td>
                                        <td>invalid bet limit parameter please input bet limit more than 1 but not more
                                            than 6 value.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">995</td>
                                        <td>invalid currency.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">996</td>
                                        <td>Invalid input filed with special characters.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">997</td>
                                        <td>invalid input format.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">998</td>
                                        <td>missing filed.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12" id="tabFive">
                    <lable><b style="color: #cfa137 !important;">6.5 Caculator</b></lable>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper marTop">
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
                                        <td class="bRight">801</td>
                                        <td>Insufficient balance.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">802</td>
                                        <td>Amount of position tracking exceeds the amount available.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12" id="tabSix">
                    <lable><b style="color: #cfa137 !important;">6.6 Seamless API</b></lable>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper marTop">
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
                                        <td>playerUsername must be between 4 and 24 characters long",
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
                                        <td>System detects double request bets. Please wait 1 minute to proceed again.
                                        </td>
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
                                        <td>missing filed 'ref'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71023</td>
                                        <td>Ref not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71024</td>
                                        <td>Can't bet Big and Small in games 40 and above.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>ip not allowed to connect to this api server.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12" id="tabSeven">
                    <lable><b style="color: #cfa137 !important;">6.7 Service Respone</b></lable>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper marTop">
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
                                        <td>Bet successfully placed.</td>
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
                </div>


                <div class="btn-toolbar mb-12" style="margin-top: 20px;">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='transferwallet.php'">
                            <lan set-lan="html:Back">Back</lan>
                        </button>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='index.php'">
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
    $(document).ready(function () {
        $("#manu5 , #manu5 > a").addClass("active");
        $("#manu5 > div").css("display", "block");

        var URL = window.location.href;
        URL = URL.substring(URL.lastIndexOf('#') + 1);
        
        var page = 8;
        console.log(url_link(page, URL));
        var link = url_link(page, URL);
        $("#" + link + " , #" + link + " > a").addClass("active");
    });
</script>

</body>

</html>