<?php include 'layouts/header.php';?>
    <div class="wrapper container">
        <?php include 'layouts/nav.php';?>
        <main class="" style="padding-left: 15rem; transition: all 0.3s ease-in-out 0s;">            
            <?php include 'layouts/lang.php';?>
            <div class="body-content">

                <div style="background: #f2f3f4; padding: 30px; margin-top: 1%; border-radius: .375rem;">
                    <h1><b style="color: #19A17A !important;" set-lan="text:1. Introduction">1. Introduction</b>
                    </h1>
                    <div class="pb-3"></div>
                    <div class="btn-toolbar mb-3" role="toolbar">
                        <div class="form-group col-12">
                            <label
                                set-lan="html:Introduction Detail">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The
                                API Service is used to access condition for working system including registration,
                                query user accounts, user betting record query and game account balance transfer
                                function.This document includes detail for access extend API service of
                                system</label>
                        </div>
                    </div>

                </div>
                <div style="background: #f2f3f4; padding: 30px; margin-top: 1%; border-radius: .375rem;">
                    <h1><b style="color: #19A17A !important;">PrettyGaming Integration Form</b></h1>
                    <div class="btn-toolbar mb-3" role="toolbar">
                        <div class="form-group col-12" style="margin-left: 4rem;">
                            <a href="https://service-api.prettygaming.asia/Download/PrettyGaming_integration_form.docx"
                                class="Point colorDownload" download=""><i class="fa fa-download"
                                    aria-hidden="true"></i>
                                <label class="Point">&nbsp;Download</label></a>
                        </div>
                    </div>
                    <div class="btn-toolbar mb-12">
                        <div class="col-md-6">
                            <a href="https://service-api.prettygaming.asia/Page_API_Document/Version.aspx"
                                style="display: none;">Back</a>
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='version.php'">
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
            $("#manu1 , #manu1 > a").addClass("active");
            $("#manu1 > div").css("display", "block");
        });
    </script>

</body>

</html>