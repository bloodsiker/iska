<footer class="main-footer">
    <div class="pull-right">
        <b>Разработка админ-панели</b> Овсійчук Дмитро
    </div>
    <br>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->

    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">

        </div><!-- /.tab-pane -->
    </div>
</aside><!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="/template/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="/template/bootstrap/js/bootstrap.min.js"></script>

<script src="/template/dist/js/translite.js"></script>
<!-- DataTables -->
<script src="/template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/template/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="/template/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE App -->
<script src="/template/dist/js/app.min.js"></script>

<script src="/template/dist/js/wow.min.js"></script>
<!-- CK Editor -->
<script src="/template/plugins/ckeditor/ckeditor.js"></script>
<script src="/template/dist/js/custom.js"></script>
<script>
        CKEDITOR.replace('comment');
        CKEDITOR.replace('lead');

</script>

<script>
    $(function () {
        $("#example1").DataTable(
            {
                "ordering": true,
                "filter": true,
                "sort": true,
                "order": [[ 0, "desc" ]]
            }
        );
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "filter": false,
            "sort": true,
            "order": [[ 1, "desc" ]]
        });
        $('.example').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "filter": false,
            "sort": true,
            "order": [[ 0, "desc" ]]
        });
        $('.no_sort').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "filter": false,
            "sort": false,
            "order": [[ 0, "desc" ]]
        });
    });
</script>

<script>
    var num = 50; //number of pixels before modifying styles

    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > num) {
            $('.main-sidebar').addClass('main-sidebar-fixed');
            $('.logo-fixed').css('display: block');
        } else {
            $('.main-sidebar').removeClass('main-sidebar-fixed');
            $('.logo-fixed').css('display: none');

        }
    });
</script>

<script>
    new WOW().init();
</script>

<script type="text/javascript">
    function diplay_hide (category_info)

    {
        if ($(category_info).css('display') == 'none')
        {
            $(category_info).animate({height: 'show'}, 500);
        }
        else
        {
            $(category_info).animate({height: 'hide'}, 500);
        }}
</script>

</body>
</html>
