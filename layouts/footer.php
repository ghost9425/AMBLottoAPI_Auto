<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="./API_files/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="./API_files/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <!--  <script type="text/javascript" src="js/bootstrap.min.js"></script>-->
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="./API_files/mdb.min.js"></script>
    <div class="hiddendiv common"></div>
    <!--  <script type="text/javascript" src="../js/dist/compiled-4.7.4.min.js"></script>-->
    <script type="text/javascript" src="./API_files/ace.min.js"></script>
    <script type="text/javascript" src="./API_files/SiteMaster.js"></script>
    <script type="text/javascript" src="./API_files/Lan.js"></script>
    <script src="./API_files/highlight.min.js"></script>

    <script>
        hljs.initHighlightingOnLoad();
    </script>
    <script>
        $(document).ready(function () {
            $('#txtLan').click(function (e) {
                e.stopPropagation();
                $('#divblock').slideToggle();
            });
            $('#divblock').click(function (e) {
                e.stopPropagation();
            });
            $(document).click(function () {
                $('#divblock').slideUp();
            });
            $('a.submenu').click(function() {
                $('a.waves-effect.submenu').parent().removeClass('active');
                $('a.waves-effect.submenu').removeClass('active');
                $(this).addClass("active");
                $(this).parent().addClass("active");
            })
        });
    </script>