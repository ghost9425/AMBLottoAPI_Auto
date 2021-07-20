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
                <h1><b style="color: #19A17A !important;">6. Service Respond Code</b></h1>
                <div class="pb-3"></div>

                <div class="col-12" id="tabOne">
                    <lable><b style="color: #19A17A !important;">6.1 Member Authen</b></lable>
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
                                        <td class="bRight">61001</td>
                                        <td>Invalid UserAgent or ApiKey</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61002</td>
                                        <td>IP address is not allowed.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61003</td>
                                        <td>request error Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61004</td>
                                        <td>request error callback url requst error destination error</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61005</td>
                                        <td>(Other error)</td>
                                    </tr>
                                 
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

      

                <div class="col-12" id="tabTwo">
                    <lable><b style="color: #19A17A !important;">6.2 Service Respone</b></lable>
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
                                        <td>success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">41001</td>
                                        <td>Error Request body is not an object.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">41002</td>
                                        <td>invalid input format 'balance', 'page', 'limit',  field.</td>
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
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71002</td>
                                        <td>missing filed 'playerUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71003</td>
                                        <td>Invalid agentUsername or apiKey.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71005</td>
                                        <td>playerUsername must be between 4 and 24 characters long.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71006</td>
                                        <td>username must not contain any special characters and can only contain letters a-z and numbers 0-9.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71007</td>
                                        <td>missing filed 'transId'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71008</td>
                                        <td>System detects double request bets. Please wait 1 minute to proceed again.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71010</td>
                                        <td>invalid ApiKey or UserAgent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71011</td>
                                        <td>invalid lottotype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71012</td>
                                        <td>login fail</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71014</td>
                                        <td>invalid UserMember</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71016</td>
                                        <td>Can request up to 15 times per minute.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71017</td>
                                        <td>transId has already existed</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71019</td>
                                        <td>invalid transId</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71020</td>
                                        <td>invalid referenceid</td>
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
                                        <td class="bRight">71024</td>
                                        <td>page should be greater than 0</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71025</td>
                                        <td>balance should be greater than 0</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71026</td>
                                        <td>missing filed 'startDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71027</td>
                                        <td>missing filed 'endDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71028</td>
                                        <td>missing filed 'ref'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">90003</td>
                                        <td>limit should be greater than or equal to 1 </td>
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
        $("#manu6 , #manu6 > a").addClass("active");
        $("#manu6 > div").css("display", "block");

        var URL = window.location.href;
        URL = URL.substring(URL.lastIndexOf('#') + 1);
        
        var page = 6;
        console.log(url_link(page, URL));
        var link = url_link(page, URL);
        $("#" + link + " , #" + link + " > a").addClass("active");
    });
</script>

</body>

</html>